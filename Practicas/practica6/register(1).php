<?PHP

include ("..\practica8\php\controller-php.php");


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Contact us</title>
</head>
<body>
  

    <div id='fg_membersite'>
        <form id='register' action='register(1).php' method='post' enctype="multipart/form-data">
            <fieldset >
                <legend>Registrate</legend>

                <input type='hidden' name='submitted' id='submitted' value='1'/>
                <div class='short_explanation'>* campos requeridos</div>


                <div class='container'>


                    <label for='name' >Nombre completo: </label><br/>

                      <input type='text' name='name' id='name' value="<?php  variable("name"); ?>" maxlength="50" /><br/>
                      <span id='register_name_errorloc' class='error'><?php variableError("name");
                      validarNombre();
                      ?></span>





                </div>


                <div class='container'>
                    <label for='email' >Email:</label><br/>
                    <input type='text' name='email' id='email' value="<?php variable("email"); ?>" maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'><?php variableError("email");
                    emailValidate();
                    ?>
                    </span>
                </div>

                <div class='container'>
                    <label for='username' >Nombre de usuario*:</label><br/>
                    <input type='text' name='username' id='username' value="<?php variable("username") ?>" maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'><?php variableError("username");?></span>
                </div>


                <div class='container'>
                    <label for='password' >Contraseña*:</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'>
                      <?php variableError("passoword"); ?>
                    </div>
                </div>



                <?php if (!isset($_GET["versioncorta"])): ?>
                  <div class='container' style='height:80px;'>
                      <label for='password' >Confirmar Contaseña*:</label><br/>
                      <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                      <input type='password' name='password2' id='password' maxlength="50" />
                      <div id='register_password_errorloc' class='error' style='clear:both'><?php
                       variableError("password2");
                       validarPass();?></div>
                  </div>
                <?php endif; ?>



                <div class='container'>
                    <label for='pais' >País*:</label><br>

                    <select name="pais" id="pais">

                      <option value="">

                        <?php if (isset($_POST["pais"])) :?>
                          <?php if ($_POST["pais"] != NULL)  :?>
                            <?php echo $_POST["pais"] ;?>
                            <?php else: ?>
                            <?php echo "Elije un pais" ;?>
                          <?php endif; ?>
                        <?php endif; ?>


                      </option>



                    <?php foreach ($paises as $key => $value): ?>
                    <option>
                    <?php echo $value;
                    ?>
                    <br>
                    </option>
                  <?php endforeach;?>

                </select>
                <br>
                <br>
                </div>

                <div class="enviar">

                Subir Avatar:
                <br>
                <input type="file" name="imgPerfil"><br>
                <br>
                </div>

                <div class="enviar">

                Subir Cv:
                <br>
                <input type="file" name="cv"><br><br>

                </div>

                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                    <p><?php echo $errorPais; ?></p>
                </div>


            </fieldset>
        </form>

    </body>
</html>
