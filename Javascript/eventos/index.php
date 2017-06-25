<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Repaso</title>
  </head>
  <body>
    <style media="screen">
      .con-error {
        border-color: red;
      }
      html,
      body {
        height: 100%;
        padding: 0;
        margin: 0;
      }
    </style>

    <a class="ir-a-yahoo" href="http://www.yahoo.com">Ir a Yahoo!</a>

    <input type="text" name="nombre" value="" class="rojo campo">

    <button id="button" type="button">Hace Click!</button>

    <script type="text/javascript">

      document.body.onmousemove = function (e) {
        var r = Math.floor(e.clientX / window.innerWidth * 255)
        var g = Math.floor(e.clientY / window.innerHeight * 255)
        console.log('CLICK', r, g)

        document.body.style.backgroundColor = 'rgb(' + r + ', ' + g + ', 50)'
      }

      document.querySelector('a').addEventListener('click', function (event) {
        var href = this.href
        event.preventDefault()

        var confirmar = document.createElement('button')
        confirmar.innerText = 'Estas seguro de ir a Yahoo?'
        confirmar.onclick = function () {
          document.location.href = href
        }
        confirmar.style.width = '100%'
        confirmar.style.height = '100%'
        document.body.append(confirmar)

        // if (!confirm('Estas seguro de ir a Yahoo?')) {
        //   event.preventDefault()
        // }
      })

      var campo = document.getElementsByClassName('campo')[0]

      function addClassName (className, newClass) {
        return className.split(' ')
          .filter(function (item) {
            return item !== newClass
          }).join(' ') + ' ' + newClass
      }

      function removeClassName (className, removeClass) {
        return className.split(' ')
          .filter(function (item) {
            return item !== removeClass
          }).join(' ')
      }

      campo.addEventListener('blur', function (evento) {
        if (!this.value) {
          this.className = addClassName(this.className, 'con-error')
        } else {
          this.className = removeClassName(this.className, 'con-error')
        }
      })




      // campo.addEventListener('click', function () {
      //   alert('primer comportamiento')
      // })
      //
      // campo.addEventListener('click', function () {
      //   alert('segundo comportamiento')
      // })

      // document.getElementById('button').onclick = reaccionaAlClick
      //
      // var esperePorFavor = false
      //
      // function reaccionaAlClick () {
      //   if (esperePorFavor) {
      //     return alert('Espere, por favor!!')
      //   }
      //   alert('Llamando al servicio... puede demorar')
      //   esperePorFavor = true
      //   setTimeout(function () {
      //     esperePorFavor = false
      //   }, 3000)
      // }






      // TERMINÓ, CHAU!



    </script>

  </body>
</html>
