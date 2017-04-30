<?php
var_dump($_POST);

function nombre(){ if(isset($_POST["name"])){
 echo $_POST["name"];
};
};


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registracion</title>
  </head>
  <body>
  <fieldset>
    <form class="" action="confirmacion.php" method="POST">
      <legend>Registrate</legend>
      <br>
<!-------------------------------------------------------------->

<?php if (isset($_POST["name"])): ?>
      <div class="name" style="height:30px";>
        <label for="name">Nombre:</label>
        <input type="text" name="name" value=<?php echo $_POST["name"] ?>>
      </div>
<?php else: ?>
      <div class="name">
        <label for="name" style="height:80px;">Nombre:</label>
        <input type="text" name="name" placeholder="Nombre">
      </div>
<?php endif; ?>

<!----------------------------------------------------------------->

<?php if (isset($_POST["last_name"])): ?>
      <div class="last_name" style="height:30px";>
        <label for="last_name">Apellido:</label>
        <input type="text" name="last_name" value=<?php echo $_POST["last_name"] ?>>
      </div>
<?php else: ?>
      <div class="last_name">
        <label for="last_name" style="height:80px;">Apellido:</label>
        <input type="text" name="last_name" placeholder="Apellido">
      </div>
<?php endif; ?>

<!----------------------------------------------------------------->

<?php if (isset($_POST["nickname"])): ?>
      <div class="nickname" style="height:30px";>
        <label for="nickname">Nick Name:</label>
        <input type="text" name="nickname" value=<?php echo $_POST["nickname"] ?>>
      </div>
<?php else: ?>
      <div class="nickname">
        <label for="nickname" style="height:80px;">Nick Name:</label>
        <input type="text" name="nickname" placeholder="Nick Name">
      </div>
<?php endif; ?>

<!----------------------------------------------------------------->

<?php if (isset($_POST["email"])): ?>
      <div class="email" style="height:30px";>
        <label for="email">email:</label>
        <input type="email" name="email" value=<?php echo $_POST["email"] ?>>
      </div>
<?php else: ?>
      <div class="email">
        <label for="email" style="height:80px;">Email:</label>
        <input type="email" name="email" placeholder="email">
      </div>
<?php endif; ?>

<!----------------------------------------------------------------->

      <div class="pass">
        <label for="pass" style="height:80px;">Escribir Password</label>
          <input type="password" name="pass" placeholder="Password">
      </div>

      <div class="confirm_pass">
        <label for="confirm_pass" style="height:80px;">Confirmar Password:</label>
          <input type="password" name="confirmpass" placeholder="confirmar password">
      </div>

      <div class='container'>
          <input type='submit' name='Submit' value='Enviar' />
      </div>





    </form>



  </fieldset>


  </body>
</html>
