
function healthhistory1() {
  var hh1=document.getElementById("prescription");
  var hh2=document.getElementById("inputbox1");
  hh1.classList.remove("d-none");
  hh2.classList.remove("d-none");
}
function healthhistory2() {
  var hh1=document.getElementById("prescription");
  var hh2=document.getElementById("inputbox1");
  hh1.classList.add("d-none");
  hh2.classList.add("d-none");
}

function diagnosefunction1() {
  var hh1=document.getElementById("diagnose");
  hh1.classList.remove("d-none");
}
function diagnosefunction2() {
  var hh1=document.getElementById("diagnose");
  hh1.classList.add("d-none");
}

function hideandshowhomesec() {
  var hh1=document.getElementById("hhhome1");
  var hh2=document.getElementById("hhhome2");
  var hh3=document.getElementById("ctnbtn");


  hh1.classList.add("d-none");
  hh3.classList.add("d-none");

  hh2.classList.remove("d-none");

}

function hideandshowhomesec1() {
  var hh1=document.getElementById("hhhome1");
  var hh2=document.getElementById("hhhome2");
  var hh3=document.getElementById("ctnbtn");
  hh1.classList.remove("d-none");
  hh3.classList.remove("d-none");
  hh2.classList.add("d-none");
}
// function cancer1() {
//
// var cch1=document.getElementById("hhhome2");
// cch1.classList.add("d-none");
//
//   var ch2=document.getElementById("answer1");
//   ch2.classList.remove("d-none");
//
// }
//
//
// function cancer2() {
//     var ch2=document.getElementById("answer1");
//   ch2.classList.add("d-none");
// }
