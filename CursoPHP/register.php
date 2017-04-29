<?php
    $errorNombre = '';
    $errorEmail = '';
    $errorValidarPass = '';
    $errorPias = '';


    if ($_POST) {

        //nombre
        $nombre = trim($_POST['name']);
        if (strlen($nombre) > 10) {
            $errorNombre = 'El nombre no puede superar los 10 caracteres';
        }

        //email
        $email = trim($_POST['email']);
        $input = filter_var($email, FILTER_VALIDATE_EMAIL);
        if ($input === false) {
            $errorEmail = 'El email ingresado no es válido';
        }

        //validar pass
        if ($_POST['password'] != $_POST['password2']) {
            $errorValidarPass = 'Las contraseñas no coinciden';


        //validar pais
        //if($_POST["pais"])

       }

    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>

                <div class='short_explanation'>* campos requeridos</div>
                <!--<input type='text' class='spmhidip' name='' />-->

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'><?php echo ($errorNombre); ?></span>
                </div>
                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'><?php echo($errorEmail); ?></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'></span>
                </div>

                <div class='container'>
                    <label for='pais' >País*:</label><br/>
                    <select name="pais" id="pais">
                        <?php
                            $paises = [
                                1 => '',
                                2 => 'Argentina',
                                3 => 'Brasil',
                                4 => 'Colombia',
                            ];

                        ?>


            <?php foreach ($paises as $key => $pais): ?>
                <option value="<?php echo $key; ?>">
                    <?php echo $pais; ?>
                  </option>
            <?php endforeach; ?>

                    </select>
                    <span id='register_username_errorloc' class='error'></span>
                </div>

                <div class='container' style='height:80px;'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>

                <?php if(!isset($_GET['versionCorta'])): ?>
                <div class='container' style='height:80px;'>
                    <label for='password2' >Confirmar*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password2' id='password2' maxlength="50" />
                    <div id='register_password2_errorloc' class='error' style='clear:both'><?php echo($errorValidarPass); ?></div>
                </div>
                <?php endif; ?>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
