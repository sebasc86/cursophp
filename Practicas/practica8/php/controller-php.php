<?php



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



$errorPais = "";
if(isset($_POST["pais"])){
  if($_POST["pais"] == null || $_POST ["pais"] === "Elige un pais") {
    $errorPais = "Debe completar al menos un pais";
  }
};

if (isset($_FILES['imgPerfil']) && validarPass() == true && validarNombre() == true && emailValidate() == true ){
  if ($_FILES['imgPerfil']['error'] == UPLOAD_ERR_OK) {

    $filename = $_FILES['imgPerfil']['tmp_name'];
    $ext = $_FILES["imgPerfil"]["name"];
    $ext = pathinfo($ext, PATHINFO_EXTENSION); //jpg
    $nombre = $_POST['name'] . ".". $ext;
    $destination =  __DIR__ . "/../imagenes/" . $nombre;
    move_uploaded_file($filename, $destination);
  };
};

if (isset($_FILES['cv']) && validarPass() == true && validarNombre() == true && emailValidate() == true && $_FILES['imgPerfil']['error'] == UPLOAD_ERR_OK){
  if ($_FILES['cv']['error'] == UPLOAD_ERR_OK) {

    $filename = $_FILES['cv']['tmp_name'];
    $ext = $_FILES["cv"]["name"];
    $ext = pathinfo($ext, PATHINFO_EXTENSION); //txt
    $nombre = $_POST['name'] . ".". $ext;
    $destination =  __DIR__ . "/../archivos/" . $nombre;
    move_uploaded_file($filename, $destination);
  };
};

/*$avatar = 'imagenes/'.$_POST['name']. '.' .'jpg';*/


function imagen(){
    if (file_exists($avatar))
    {
        echo "<img src='$avatar' alt='Logo' />";
    }
    else
    {
        echo "<p>La imagen no existe</p>";
    }
};

/*$nombre = $_POST['name'];
var_dump($nombre);*/


/*if (validarPass() == true && validarNombre() == true && emailValidate() == true){
  header("Location: confirmacion.php");
  exit;
};*/




/*function nombreImagen() {
  if(isset($_POST['nombre'])){
  $filejpg = 'C:\xampp\htdocs\cursophp\Practicas\practica8\imagenes\Sebas.jpg';
  $filejpg = fopen($filejpg, 'r');
  echo '<img src='.$filejpg. '>';
  fclose($filejpg);
};
};
*/

 /*el de abajo es

if ($_FILES['imgPerfil']['error'] == UPLOAD_ERR_OK) {

  $filename = $_FILES['imgPerfil']['tmp_name'];
  $ext = $_FILES["imgPerfil"]["name"];
  $ext = pathinfo($ext, PATHINFO_EXTENSION); //jpg
  $nombre = uniqid() . ".". $ext;
  $destination =  __DIR__ . "/../imagenes/" . $nombre;
  move_uploaded_file($filename, $destination);

// dir+ nombre de imagen + ext

*/


?>
