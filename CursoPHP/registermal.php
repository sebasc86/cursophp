<?PHP

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>

  <div id='fg_membersite'>


          <?php if($_GET == false) :?>
          <?php var_dump($_GET) ?>
          <fieldset >
            <legend>Registrate</legend>

            <form id='register' action='registermal.php' method='get'>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <div class='short_explanation'>* campos requeridos</div>
            <input type='text' class='spmhidip' name='CP' >
            <div><span class='error'></span></div>
            <?php else: ?>

                  <?php foreach ($_GET as $key => $value): ?>
                      <?php if($_GET["name"] == true && $_GET["CP"] == true) :?>
                      <?php header("Location: registro_usuarios.php")?>
                      <?php elseif($_GET["name"] == false && $_GET["CP"] == true) :?>
                      <div id='fg_membersite'>
                      <fieldset >
                            <legend>Registrate</legend>
                            <form id='register' action='register.php' method='get'>
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                            <div class='short_explanation'>* campos requeridos</div>
                            <input type='text' class='spmhidip' name='CP' value=<?php echo $_GET["CP"] ?>>
                            <div><span class='error'></span></div>
                      <?php break; ?>

                      <?php else:?>
                    <div id='fg_membersite'>
                    <fieldset >
                        <legend>Registrate</legend>
                        <form id='register' action='register.php' method='get'>
                        <input type='hidden' name='submitted' id='submitted' value='1'/>
                        <div class='short_explanation'>* campos requeridos</div>
                        <input type='text' class='spmhidip' name='CP' >
                        <div><span class='error'>Faltan datos</span></div>
                      <?php break ;?>



                      <?php endif ; ?>
                  <?php endforeach; ?>

          <?php endif; ?>





                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'>


                      <?php foreach ($_GET as $key => $value2): ?>

                        <?php if($key == "name") :?>
                            <?php if($value2 == false) :?>

                              faltan datos
                            <?php endif; ?>

                        <?php endif; ?>


                    <?php endforeach; ?>



                    </span>
                </div>





                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
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

                <?php if(!isset($_GET["versioncorta"])): ?>
                <div class='container' style='height:80px;'>
                    <label for='password2' >Contaseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password2' name='password' id='password2' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'></div>
                </div>
              <?php endif; ?>



                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>
