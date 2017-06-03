console.log('esto es un archivo externo');
window.onload = function() {
  alert('esto se ejecuta cuando la página carga')
};

// Agregar un prompt que le pregunte al usuario el nombre, luego que se ejecute un
// alert que diga “Bienvenido Pepe”, donde Pepe es el nombre ingresado.

var nombre = prompt('Cual es tu nombre?')
alert('Bienvenido ' + nombre)

// 6. Agregar un confirm que le pregunte al usuario si tiene más de 18 años, en caso de
// que sea menor de edad que lo redirija a google.com.ar, utilizando location.
// 7. Escribir un console.log que muestra la dirección URL de nuestra página.
// 8. Crear dos botones llamados siguiente y anterior que simule el funcionamiento de los
// botones “back” y “next” del navegador.

var mayor = confirm("Sos mayor de 18 años")

if(mayor === false) location = 'http://www.google.com.ar/'

console.log('http://localhost/cursophp/Javascript/EjercicioC3.html')
