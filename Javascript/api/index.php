<?php

  $errors = [
    'nombre' => '',
    'email' => '',
    'nacimiento' => '',
    'acuerdo' => ''
  ];

  $email_regex = '/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/iD';

  if ($_POST) {
    if (!$_POST['nombre']) {
      $errors['nombre'] = 'Es requerido';
    }
    if (!$_POST['email']) {
      $errors['email'] = 'Es requerido';
    } else if (preg_match('/[!\s]/', $_POST['email'])) {
      $errors['email'] = 'La dirección ingresada no es válida';
    }
    if (!$_POST['acuerdo']) {
      $errors['acuerdo'] = 'Debe aceptar los términos y condiciones';
    }
  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Forms</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css">
</head>
<body>

  <div class="container">
    <h1>Nuevo usuario</h1>
    <form method="post">
      <div class="form-group <?php if ($errors['nombre']) : ?>has-error<?php endif ?>">
        <label class="control-label">Nombre</label>
        <input type="text" name="nombre" class="form-control">
        <?php if ($errors['nombre']) : ?>
          <span class="help-block">
            <?php echo $errors['nombre'] ?>
          </span>
        <?php endif ?>
      </div>
      <div class="form-group <?php if ($errors['email']) : ?>has-error<?php endif ?>">
        <label class="control-label">Email</label>
        <input type="text" name="email" class="form-control">
        <?php if ($errors['email']) : ?>
          <span class="help-block">
            <?php echo $errors['email'] ?>
          </span>
        <?php endif ?>
      </div>
      <div class="form-group <?php if ($errors['nacimiento']) : ?>has-error<?php endif ?>">
        <label class="control-label">Fecha de nacimiento</label>
        <input type="date" name="nacimiento" class="form-control">
        <?php if ($errors['nacimiento']) : ?>
          <span class="help-block">
            <?php echo $errors['nacimiento'] ?>
          </span>
        <?php endif ?>
      </div>
      <div class="form-group <?php if ($errors['acuerdo']) : ?>has-error<?php endif ?>">
        <label class="control-label">
          <input type="checkbox" name="acuerdo">
          Acepto los <a href="#">Términos y condiciones</a>
        </label>
        <?php if ($errors['acuerdo']) : ?>
          <span class="help-block">
            <?php echo $errors['acuerdo'] ?>
          </span>
        <?php endif ?>
      </div>
      <button class="btn btn-primary" type="submit">Enviar</button>
    </form>   
  </div>
  <script type="text/javascript">

    document.forms[0].onsubmit = function (e) {
      e.preventDefault()

      var req = new XMLHttpRequest()
      req.onreadystatechange = function () {
        if (this.readyState === 4) {
          if (this.status === 200) {
            // window.location.href = 'gracias.php'
            alert('GRACIAS!')
          } else {
            var errores = JSON.parse(this.responseText)
            console.log(errores)
            // muestro los errores
          }
        }
      }
      req.open('POST', 'api.php')
      var data = new FormData(document.forms[0])
      req.send(data)
      
    }


  </script>





</body>
</html>
