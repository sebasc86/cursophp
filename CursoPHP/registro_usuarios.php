<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <form action="confirmacion.php" method="GET">

      <div>
        <label for="nombre">Nombre: </label>
          <?php if(isset($_GET["nombre"])) :?>
            <input type="text" name="nombre" value=<?php echo $_GET["nombre"] ?>>
          <?php else: ?>
            <input type="text" name="nombre" placeholder="nombre">
          <?php endif; ?>



      </div>
      <div>
        <label for="apellido">Apellido: </label>
        <?php if(isset($_GET["apellido"])) :?>
          <input type="text" name="apellido" value=<?php echo $_GET["apellido"] ?>>
        <?php else: ?>
          <input type="text" name="apellido" placeholder="apellido">
        <?php endif; ?>




      <div>
        <label for="email">Email:</label>
        <?php if(isset($_GET["email"])) :?>
          <input type="email" name="email" value=<?php echo $_GET["email"] ?>>
        <?php else: ?>
          <input type="email" name="email" placeholder="email">
        <?php endif; ?>
      </div>
      <div>
        <label for="edad">Edad:</label>
        <?php if(isset($_GET["edad"])) :?>
          <input type="text" name="edad" value=<?php echo $_GET["edad"] ?>>
        <?php else: ?>
          <input type="text" name="edad" placeholder="edad">
        <?php endif; ?>
      <div>
        <label for="pass">Password: </label>
        <input type="password" name="password" id="password">
      </div>

      <div>
        <label for="favoritos">Tus Favoritos</label>







            <?php if(!isset($_GET["favoritos"])) :?>
              <p><input type="checkbox" name="favoritos[]" value="futbol">Futbol</p>
              <p><input type="checkbox" name="favoritos[]" value="tenis">Tenis</p>
              <p><input type="checkbox" name="favoritos[]" value="basket">Basket</p>

          <?php else: ?>
            <?php foreach ($_GET["favoritos"] as $value): ?>
                <?php  if($value == "futbol") :?>
                  <p><input type="checkbox" name="favoritos[]" value="futbol" checked="">Futbol</p>
                <?php elseif ($value == "tenis") :?>
                  <p><input type="checkbox" name="favoritos[]" value="tenis" checked="">Tenis</p>
                <?php elseif ($value == "basket") :?>
                  <p><input type="checkbox" name="favoritos[]" value="basket" checked="">Basket</p>
                <?php endif; ?>

              <?php endforeach ;?>
              <?php endif; ?>









      </div>

      <div>
          <input type="submit" value="Registrarse">
      </div>
    </form>

      </div>

  </body>
</html>
