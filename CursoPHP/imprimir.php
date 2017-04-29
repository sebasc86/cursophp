<!DOCTYPE html>
<html>
  <head>
  <body>

    <form action="procesar.php" method="post">
      Nombre : <input type="text" name="nombre" placeholder="nombre" autocomplete="off"><br>
      Email   : <input type="email" name="email" placeholder="email" autocomplete="off"><br>

      <br>
      <label for="">Como te enteraste de este sitio?</label>
      <p><input type="checkbox" name="categoria" value="internet">Internet</p>
      <p><input type="checkbox" name="categoria[]" value="amigo">Un amigo</p>
      <p><input type="checkbox" name="categoria[]" value="TV">Television</p>

      <br>
      <label for="">Genero</label>
      <p><input type="radio" name="genero" value="masculino">Masculino</p>
      <p><input type="radio" name="genero" value="fememino">Femenino</p>


      <label for="">Como dormiste anoche</label>
      <select class="dormiste" name="dormiste">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>


      </select>

      <br>
      <label for="">Terminos y Condiciones</label>
      <p><input type="checkbox" name="tyc" value="terminosycondiciones" required>Terminos y Condiciones</p>



        <input type="submit">


    </form>
    <br>



    <form action="procesar.php" method="get">
      Nombre : <input type="text" name="nombre"><br>
      Email   : <input type="text" name="email" ><br>
      <input type="submit">

    </form>




  </body>
</html>
