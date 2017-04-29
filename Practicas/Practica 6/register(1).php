<?PHP


$errorValidarPass = '';

$paises = [
    'ar' => 'Argentina',
    'br' => 'Brasil',
    'co' => 'Colombia',
    'it' => 'Italia',
    'us' => 'Estados&nbspUnidos',
    'ca' => 'Canada',
    'es' => 'España',
    'fr' => 'Francia',
    'ru' => 'Rusia',
    'de' => 'Alemania'
];

function select(){
  if(isset($_POST["pais"])){
    if($_POST["pais"] == NULL){
    echo "Eliga un pais <br>";
    } else {
    echo $_POST["pais"];
    };
  };
};


$none = "no completo campo";
var_dump($_POST);

function variable($tiponame) {
  if(isset($_POST["$tiponame"])){
  echo $_POST["$tiponame"];
};
};


function variableError($tipoError) {
  if(isset($_POST[$tipoError])){
      if($_POST[$tipoError] == NULL) {
        echo "Falta completar campo <br>";
      }
  };
};

 // validacion nombre

function validarNombre() {
  if(isset($_POST["name"])){
$nombre = $_POST["name"];
$nombre = trim($nombre);
      if(strlen($nombre) > 20) {
        echo "Es mayor a 20 caracteres";
        return false;
      }else if(strlen($nombre) <= 3) {
        echo "Es Menor a 4 Caracteres";
        return false;
      }else if(!preg_match("/^[a-zA-ZñÑáÁéÉíÍÓóúÚÜÀ-Ö-ö-ÿ\s]+$/", $nombre)){
        echo "No es un nombre valido";
        return false;
      }else {
        return true;
      }

    };
};



//email
function emailValidate() {
  if(isset($_POST["email"])) {
    $email = trim($_POST['email']);
    $input = filter_var($email, FILTER_VALIDATE_EMAIL);
    if ($input === false) {
      $errorEmail = 'El email ingresado no es válido';
      echo "$errorEmail";
      return false;
    } else {
      return true;
    }
  };
};

//contraseña

//validar pass
function validarPass(){
  if(isset($_POST['password']) && isset($_POST["password2"])){
    $pass = $_POST["password"];
    if ($_POST['password'] != $_POST['password2']) {
      echo 'Las contraseñas no coinciden';
      return false;
    } elseif(strlen($pass) < 6){
        echo "es menor a 6 caracteres";
        return false;
    } elseif (!preg_match("/[a-z]/", $pass)){
        echo "La clave debe tener al menos una Minuscula";
        return false;
    } elseif(!preg_match("/[A-Z]/", $pass)) {
        echo "La clave debe tener al menos una Mayuscula";
        return false;
    } elseif (!preg_match("/[0-9]/", $pass)) {
        echo "La clave debe tener al menos un Número";
        return false;
    } else {
      return true;
    };
  };
};

if (validarPass() == true && validarNombre() == true && emailValidate() == true){
  header("Location: confirmacion.php");
  exit;
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
        <form id='register' action='register(1).php' method='post'>
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
                       validarPass(); ?></div>
                  </div>
                <?php endif; ?>



                <div class='container'>
                    <label for='pais' >País*:</label><br/>

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
                    <?php echo $value; ?>
                    </option>
                    <?php endforeach; ?>




                </div>



                <div class='container'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>


            </fieldset>
        </form>

    </body>
</html>
