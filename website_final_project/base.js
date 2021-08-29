// POP UP Login
//   &&
//Pop para Especialidades
var modal1 = document.getElementById('id01');
var modal2 = document.getElementById('id02');
var modal3 = document.getElementById('id03');
var modal4 = document.getElementById('id04');
var modal5 = document.getElementById('id05');
var modal6 = document.getElementById('id06');
var modal7 = document.getElementById('id07');

// Clicar fora da caixa faz sair
window.onclick = function(event) {
  if (event.target == modal1 || event.target == modal2 || event.target == modal3 || event.target == modal4 || event.target == modal5 || event.target == modal6 || event.target == modal7) {
    modal1.style.display = "none";
    modal2.style.display = "none";
  }
}

//botão para menu responsivo
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "nav") {
    x.className += " responsive";
  } else {
    x.className = "nav";
  }
}