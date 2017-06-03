<?php
    require_once("soporte.php");
    require_once("clases/validadorUsuario.php");

    $repoUsuarios = $repo->getRepositorioUsuarios();

    if ($auth->estaLogueado()) {
        header("Location:inicio.php");exit;
    }
    $errores = [];
    $nombreDefault = "";
    $emailDefault = "";

    $paises = [
        "arg" => "Argentina",
        "per" => "Peru",
        "col" => "Colombia",
        "ven" => "Venezuela",
        "ger" => "Alemania",
        "fr" => "Francia",
        "usa" => "Estados Unidos"
    ];

    if (!empty($_POST))
    {
        $validador = new ValidadorUsuario();
        //Se envió información
        $errores = $validador->validar($_POST, $repo);

        if (empty($errores))
        {
            //No hay Errores

            //Primero: Lo registro
            $usuario = new Usuario(
                null,
                $_POST["name"],
                $_POST["email"],
                $_POST["username"],
                $_POST["password"],
                $_POST["paises"]
            );
            $usuario->setPassword($_POST["password"]);
            $usuario->guardar($repoUsuarios);
            $usuario->setAvatar($_FILES["avatar"]);

            //Segundo: Lo envio al exito
            header("Location:exito2.php");exit;


        }

        if (!isset($errores["name"]))
        {
            $nombreDefault = $_POST["name"];
        }
        if (!isset($errores["email"]))
        {
            $emailDefault = $_POST["email"];
        }
    }
?>

<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <title>Contact us</title>
</head>
<body>

    <!-- Form Code Start -->
    <div id='fg_membersite'>

        <form id='register' action='' method='post' accept-charset='UTF-8' enctype="multipart/form-data">
            <fieldset >

                <legend>Registrate</legend>

                <?php include("errores.php"); ?>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>


<input type='text' name='name' id='name' value='<?=$nombreDefault?>' maxlength="50" />

<?php if (isset($errores["name"])) { 
    echo $errores["name"];
}
?>

                    <br/>



                    <span id='register_name_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
<input type='text' name='email' id='email' value='<?=$emailDefault?>' maxlength="50" />

<?php if (isset($errores["email"])) { 
    echo $errores["email"];
}
?>

                    <br/>
                    <span id='register_email_errorloc' class='error'></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <div>
                    <label for="avatar">Avatar</label>
                    <input type="file" name="avatar" id="avatar"/>
                </div>


<select name="paises">
    <option value=""></option>
    <?php foreach ($paises as $codigo => $pais) { ?>
        <?php if ($_POST["paises"] == $codigo) { ?>
            <option selected value="<?=$codigo?>">
                <?= $pais ?>
            </option>
        <?php } else { ?>
            <option value="<?=$codigo?>">
                <?= $pais ?>
            </option>
        <?php } ?>


    <?php } ?>
</select>


                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>
        <!-- client-side Form Validations:
        Uses the excellent form validation script from JavaScript-coder.com-->


    </body>
</html>
