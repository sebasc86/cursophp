<?php var_dump($_POST);

$name = $_POST["name"];
$last_name = $_POST["last_name"];
$nickname = $_POST["nickname"];
$pass  = $_POST["pass"];
$confirmpass = $_POST["confirmpass"];
$email = $_POST["email"];

//if($name == 0 && $last_name == 0 && $nickname == 0 && $email == 0 && $pass == 0 && $confirmpass == 0){
//header("Location: registro_usuarios.php");
//};

$miString = "Me encanta php, A Mi tambien me encanta php!";
$busqueda = "php";
$resultado = strpos($miString, $busqueda);
echo "$resultado";

?>
