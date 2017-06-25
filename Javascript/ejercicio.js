


var btn = document.createElement("div");
btn.class = 'btn'
document.body.append(btn)
var input = document.createElement('input')
input.class = 'input'
input.type = 'text';
input.name = 'input';
input.addEventListener('keypress', function (e) {
  if (13 == e.keyCode) {
    var div = document.createElement('div')
    div.class = 'cuadrado'

  }
});
btn.appendChild(input);
var textnode = document.createTextNode("Tareas  a hacer ")
btn.prepend(textnode);













//
// frutas.forEach(function (value) {
//   var link = document.createElement('a')
//   link.href = value + '.php'
//   link.innerText = value
//   var li = document.createElement('li')
//   li.append(link)
//  lista.append(li)
// })
//
// document.body.append(lista)

// var lista = document.createElement('ul')
// var html = ''
// frutas.forEach(function (value) {
//   html += '<li><a href="' + value + '.php">' + value + '</a></li>'
// })
//lista.innerHTML = html
// document.body.append(lista)
//
//

// document.write('<ul>')
// frutas.forEach(function (fruta) {
//   document.write('<li><a href="' + fruta + '.php">' + fruta + '</a></li>')
// })
// document.write('</ul>')
