$(document).ready(function(){
  $("#h1").click(function(){
    $("#b1").toggle();
  });
});
$(document).ready(function(){
  $("#h2").click(function(){
    $("#b2").toggle();
  });
});



$(document).ready(function(){
  $("#h3").click(function(){
    $("#b3").toggle();
  });
});
$(document).ready(function(){
  $("#h4").click(function(){
    $("#b4").toggle();
  });
});
$(document).ready(function(){
  $("#h5").click(function(){
    $("#b5").toggle();
  });
});


$(document).ready(function(){
  $("#h6").click(function(){
    $("#b6").toggle();
  });
});
$(document).ready(function(){
  $("#h7").click(function(){
    $("#b7").toggle();
  });
});
$(document).ready(function(){
  $("#h8").click(function(){
    $("#b8").toggle();
  });
});

$(document).ready(function(){
  $("#h9").click(function(){
    $("#b9").toggle();
  });
});
$(document).ready(function(){
  $("#h10").click(function(){
    $("#b10").toggle();
  });
});
$(document).ready(function(){
  $("#h11").click(function(){
    $("#b11").toggle();
  });
});


$(document).ready(function(){
  $("#hinn1").click(function(){
    $("#binn1").toggle();
  });
});
$(document).ready(function(){
  $("#h2inn").click(function(){
    $("#b2inn").toggle();
  });
});
$(document).ready(function(){
  $("#hinn3").click(function(){
    $("#binn3").toggle();
  });
});
// ----------------------eo privacy policy-------------------
function selectdaughter() {
  var daut = document.getElementById("daut");

  var checkBox = document.getElementById("fammember");

  var daughters = document.getElementById("daughters");



  if (checkBox.checked == true){
    daughters.classList.remove("d-none");
    daut.classList.remove("d-none");



  } else {
     daughters.classList.add("d-none");
     daut.classList.add("d-none");


  }
}

// ----------------------------eo activatekit page------

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode;
    var num = document.getElementById('someid').value;
    if ((charCode > 31 && (charCode < 48 || charCode > 57)) || (num > 30)){
        if (num > 31){
          alert('choose number from 1-31');
        }
        return false;
    }else{
        return true;
    }
}
function conatinervasc1() {
  var checkBox = document.getElementById("conatinervasc1");

  var showmotherdivf124 = document.getElementById("conatinervasc1m");
  // var showmotherdivf1245 = document.getElementById("tartppgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    // showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     // showmotherdivf1245.classList.add("d-none");


  }
}
// -------------eo vascular
// -----------------------create registration strat------------------
function showtextboxcustom() {
  var checkBox = document.getElementById("passd");

  var showmotherdivf124t = document.getElementById("passwordvar");
  var showmotherdivf1245t = document.getElementById("mobiledvar");



  if (checkBox.checked == true){
    showmotherdivf124t.classList.remove("d-none");
    showmotherdivf1245t.classList.add("d-none");


  } else {
    showmotherdivf124t.classList.add("d-none");
    showmotherdivf1245t.classList.remove("d-none");


  }
}
// -------------eo registration------------------------
function tartppgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("tartppgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("tartppgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("tartppgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function tartpgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("tartpgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("tartpgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("tartpgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function tartgfhowmotherdivcheckbox() {
  var checkBox = document.getElementById("tartgfshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("tartgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("tartgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function tartgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("tartgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("tartgmmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("tartgmmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function tartfshowmotherdivcheckbox() {
  var checkBox = document.getElementById("tartfshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("tartfshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("tartfshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function tartshowmotherdivcheckbox() {
  var checkBox = document.getElementById("tartshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("tartshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("tartshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}

// -------------------eo tear of artery-----------
function eartppgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("eartppgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("eartppgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("eartppgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function eartpgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("eartpgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("eartpgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("eartpgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function eartgfhowmotherdivcheckbox() {
  var checkBox = document.getElementById("eartgfshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("eartgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("eartgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function eartgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("eartgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("eartgmmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("eartgmmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function eartfshowmotherdivcheckbox() {
  var checkBox = document.getElementById("eartfshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("eartfshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("eartfshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function eartshowmotherdivcheckbox() {
  var checkBox = document.getElementById("eartshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("eartshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("eartshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}


// -----eo enlargement artery-----------------

function stppgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("stppgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("stppgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("stppgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function stpgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("stpgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("stpgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("stpgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function stgfhowmotherdivcheckbox() {
  var checkBox = document.getElementById("stgfshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("stgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("stgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function stgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("stgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("stgmmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("stgmmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function stfshowmotherdivcheckbox() {
  var checkBox = document.getElementById("stfshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("stfshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("stfshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function stshowmotherdivcheckbox() {
  var checkBox = document.getElementById("stshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("stshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("stshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}

// --eo stroke----
function hppgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("hppgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("hppgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("hppgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function hpgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("hpgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("hpgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("hpgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function hgfhowmotherdivcheckbox() {
  var checkBox = document.getElementById("hgfshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("hgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("hgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function hgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("hgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("hgmmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("hgmmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function hfshowmotherdivcheckbox() {
  var checkBox = document.getElementById("hfshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("hfshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("hfshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function hshowmotherdivcheckbox() {
  var checkBox = document.getElementById("hshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("hshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("hshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}




// -----------------hh page------------------------
function ppgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("ppgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("ppgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("ppgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function pgmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("pgmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("pgfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("pgfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function gfhowmotherdivcheckbox() {
  var checkBox = document.getElementById("gfshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("gfmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("gfmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function gmhowmotherdivcheckbox() {
  var checkBox = document.getElementById("gmshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("gmmshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("gmmshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function fshowmotherdivcheckbox() {
  var checkBox = document.getElementById("fshowmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("fshowmotherdiv");
  var showmotherdivf1245 = document.getElementById("fshowmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function showmotherdivcheckbox() {
  var checkBox = document.getElementById("showmotherdivcheckv");

  var showmotherdivf124 = document.getElementById("showmotherdiv");
  var showmotherdivf1245 = document.getElementById("showmotherdiv1");



  if (checkBox.checked == true){
    showmotherdivf124.classList.remove("d-none");
    showmotherdivf1245.classList.remove("d-none");


  } else {
     showmotherdivf124.classList.add("d-none");
     showmotherdivf1245.classList.add("d-none");


  }
}
function Enlargedcontainfunc()
{
  var ehyper2=document.getElementById("Enlargedcontain");
  ehyper2.classList.remove("d-none");
}
function dEnlargedcontainfunc()
{
  var ehyper2=document.getElementById("Enlargedcontain");
  ehyper2.classList.add("d-none");
}

function ppgmotherhert() {
  var checkBox = document.getElementById("ppgmotherhert001");

  var ppgmothershow012 = document.getElementById("ppgmothershow012");
  var ppgmothershow0123 = document.getElementById("ppgmothershow0123");



  if (checkBox.checked == true){
    ppgmothershow012.classList.remove("d-none");
    ppgmothershow0123.classList.remove("d-none");


  } else {
     ppgmothershow012.classList.add("d-none");
     ppgmothershow0123.classList.add("d-none");


  }
}
function pgmotherhert() {
  var checkBox = document.getElementById("pgmotherhert001");

  var pgmothershow012 = document.getElementById("pgmothershow012");
  var pgmothershow0123 = document.getElementById("pgmothershow0123");



  if (checkBox.checked == true){
    pgmothershow012.classList.remove("d-none");
    pgmothershow0123.classList.remove("d-none");


  } else {
     pgmothershow012.classList.add("d-none");
     pgmothershow0123.classList.add("d-none");


  }
}
function gfatherhert() {
  var checkBox = document.getElementById("gfatherhert001");

  var gfathershow012 = document.getElementById("gfathershow01245");
  var gfathershow0123 = document.getElementById("gfathershow0123");



  if (checkBox.checked == true){
    gfathershow012.classList.remove("d-none");
    gfathershow0123.classList.remove("d-none");


  } else {
     gfathershow012.classList.add("d-none");
     gfathershow0123.classList.add("d-none");


  }
}

function gmotherhert() {
  var checkBox = document.getElementById("gmotherhert001");

  var gmothershow012 = document.getElementById("gmothershow012");
  var gmothershow0123 = document.getElementById("gmothershow0123");



  if (checkBox.checked == true){
    gmothershow012.classList.remove("d-none");
    gmothershow0123.classList.remove("d-none");


  } else {
     gmothershow012.classList.add("d-none");
     gmothershow0123.classList.add("d-none");


  }
}
function fatherhert() {
  var checkBox = document.getElementById("fatherhert001");

  var fathershow012 = document.getElementById("fathershow01245");
  var fathershow0123 = document.getElementById("fathershow0123");



  if (checkBox.checked == true){
    fathershow012.classList.remove("d-none");
    fathershow0123.classList.remove("d-none");


  } else {
     fathershow012.classList.add("d-none");
     fathershow0123.classList.add("d-none");


  }
}

function motherhert() {
  var checkBox = document.getElementById("motherhert001");

  var mothershow012 = document.getElementById("mothershow012");
  var mothershow0123 = document.getElementById("mothershow0123");



  if (checkBox.checked == true){
    mothershow012.classList.remove("d-none");
    mothershow0123.classList.remove("d-none");


  } else {
     mothershow012.classList.add("d-none");
     mothershow0123.classList.add("d-none");


  }
}
function matggmmfunc() {
  var checkBox = document.getElementById("matgmmfunc");

  var matgf011 = document.getElementById("matgmmfunc01");


  if (checkBox.checked == true){
    matgf011.classList.remove("d-none");

  } else {
     matgf011.classList.add("d-none");

  }
}
function matgffunc() {
  var checkBox = document.getElementById("matgfcheck01");

  var matgf011 = document.getElementById("matgf01");


  if (checkBox.checked == true){
    matgf011.classList.remove("d-none");

  } else {
     matgf011.classList.add("d-none");

  }
}
function patgffunc() {
  var checkBox = document.getElementById("patgfcheck01");

  var patgf013 = document.getElementById("patgf01");


  if (checkBox.checked == true){
    patgf013.classList.remove("d-none");

  } else {
     patgf013.classList.add("d-none");

  }
}
function patgmfunc() {
  var checkBox = document.getElementById("patgm01check");

  var patgm013 = document.getElementById("patgm01");


  if (checkBox.checked == true){
    patgm013.classList.remove("d-none");

  } else {
     patgm013.classList.add("d-none");

  }
}
function Arteriopathyfather() {
  var checkBox = document.getElementById("fatherarterio");

  var fathe123 = document.getElementById("fa1");


  if (checkBox.checked == true){
    fathe123.classList.remove("d-none");

  } else {
     fathe123.classList.add("d-none");

  }
}
function Arteriopathymother() {
  var checkBox = document.getElementById("motherarterio");

  var moooa112 = document.getElementById("ma1");


  if (checkBox.checked == true){
    moooa112.classList.remove("d-none");

  } else {
     moooa112.classList.add("d-none");

  }
}
function patgff() {
  var checkBox = document.getElementById("patgff12");

  var patgmm12 = document.getElementById("patgff1223");


  if (checkBox.checked == true){
    patgmm12.classList.remove("d-none");

  } else {
     patgmm12.classList.add("d-none");

  }
}
function patfmg() {
  var checkBox = document.getElementById("patgm");

  var patgmm12 = document.getElementById("patgmm");


  if (checkBox.checked == true){
    patgmm12.classList.remove("d-none");

  } else {
     patgmm12.classList.add("d-none");

  }
}
function paternalgm() {
  var checkBox = document.getElementById("patgm");

  var patgmm12 = document.getElementById("patgmm");


  if (checkBox.checked == true){
    patgmm12.classList.remove("d-none");

  } else {
     patgmm12.classList.add("d-none");

  }
}
function Maternalgm() {
  var checkBox = document.getElementById("Maternalgm12");

  var gbgb12 = document.getElementById("gbgb");


  if (checkBox.checked == true){
    gbgb12.classList.remove("d-none");

  } else {
     gbgb12.classList.add("d-none");

  }
}
function gmhamfather1() {
  var checkBox = document.getElementById("gmhamfather");

  var mgham12 = document.getElementById("mgham");


  if (checkBox.checked == true){
    mgham12.classList.remove("d-none");

  } else {
     mgham12.classList.add("d-none");

  }
}
function hamfather1() {
  var checkBox = document.getElementById("hamfather");

  var ham123 = document.getElementById("hamf");


  if (checkBox.checked == true){
    ham123.classList.remove("d-none");

  } else {
     ham123.classList.add("d-none");

  }
}
function hammother1() {
  var checkBox = document.getElementById("harmother");

  var ham12 = document.getElementById("ham");


  if (checkBox.checked == true){
    ham12.classList.remove("d-none");

  } else {
     ham12.classList.add("d-none");

  }
}
function pgfcardio() {
  var checkBox = document.getElementById("pgfothercardio");

  var pgfcardio = document.getElementById("pgfg");


  if (checkBox.checked == true){
    pgfcardio.classList.remove("d-none");

  } else {
     pgfcardio.classList.add("d-none");

  }
}
function pgcardio() {
  var checkBox = document.getElementById("pgothercardio");

  var pgcardio = document.getElementById("pgf");


  if (checkBox.checked == true){
    pgcardio.classList.remove("d-none");

  } else {
     pgcardio.classList.add("d-none");

  }
}
function gfcardio() {
  var checkBox = document.getElementById("gfothercardio");

  var gfcardio = document.getElementById("gfcardio");


  if (checkBox.checked == true){
    gfcardio.classList.remove("d-none");

  } else {
     gfcardio.classList.add("d-none");

  }
}
function gmcardio() {
  var checkBox = document.getElementById("gmothercardio");

  var gmcardio = document.getElementById("gmcard");


  if (checkBox.checked == true){
    gmcardio.classList.remove("d-none");

  } else {
     gmcardio.classList.add("d-none");

  }
}
function fcard1function() {
  var checkBox = document.getElementById("fathercardio");

  var fathercardio = document.getElementById("fcard1");


  if (checkBox.checked == true){
    fathercardio.classList.remove("d-none");

  } else {
     fathercardio.classList.add("d-none");

  }
}
function mcard1function() {
  var checkBox = document.getElementById("mothercardio");

  var mothercardio = document.getElementById("mcard1");


  if (checkBox.checked == true){
    mothercardio.classList.remove("d-none");

  } else {
     mothercardio.classList.add("d-none");

  }
}
function mothunhide() {
  var checkBox = document.getElementById("mother12");

  var sib1 = document.getElementById("m0");
  var sib2 = document.getElementById("m1");
  var sib3 = document.getElementById("m2_0");
  var sib4 = document.getElementById("m2_1");
  var sib5 = document.getElementById("m2_2");
  var sib6 = document.getElementById("m2");

  if (checkBox.checked == true){
    sib1.classList.remove("d-none");
    sib2.classList.remove("d-none");
    sib3.classList.remove("d-none");
    sib4.classList.remove("d-none");
    sib5.classList.remove("d-none");
    sib6.classList.remove("d-none");
  } else {
     sib1.classList.add("d-none");
     sib2.classList.add("d-none");
     sib3.classList.add("d-none");
     sib4.classList.add("d-none");
     sib5.classList.add("d-none");
     sib6.classList.add("d-none");


  }
}
function fatunhide() {
  var checkBox = document.getElementById("father12");

  var sib1 = document.getElementById("f0");
  var sib2 = document.getElementById("f1");
  var sib3 = document.getElementById("f2_0");
  var sib4 = document.getElementById("f2_1");
  var sib5 = document.getElementById("f2_2");
  var sib6 = document.getElementById("f2");

  if (checkBox.checked == true){
    sib1.classList.remove("d-none");
    sib2.classList.remove("d-none");
    sib3.classList.remove("d-none");
    sib4.classList.remove("d-none");
    sib5.classList.remove("d-none");
    sib6.classList.remove("d-none");
  } else {
     sib1.classList.add("d-none");
     sib2.classList.add("d-none");
     sib3.classList.add("d-none");
     sib4.classList.add("d-none");
     sib5.classList.add("d-none");
     sib6.classList.add("d-none");


  }
}
function sibunhide() {
  var checkBox = document.getElementById("siblings12");

  var sib1 = document.getElementById("s0");
  var sib2 = document.getElementById("s1");
  var sib3 = document.getElementById("s2_0");
  var sib4 = document.getElementById("s2_1");
  var sib5 = document.getElementById("s2_2");
  var sib6 = document.getElementById("s2");

  if (checkBox.checked == true){
    sib1.classList.remove("d-none");
    sib2.classList.remove("d-none");
    sib3.classList.remove("d-none");
    sib4.classList.remove("d-none");
    sib5.classList.remove("d-none");
    sib6.classList.remove("d-none");
  } else {
     sib1.classList.add("d-none");
     sib2.classList.add("d-none");
     sib3.classList.add("d-none");
     sib4.classList.add("d-none");
     sib5.classList.add("d-none");
     sib6.classList.add("d-none");


  }
}
function unhindemefromhre() {
  var checkBox = document.getElementById("mothetcheck");

  var text = document.getElementById("mothersection");

  if (checkBox.checked == true){
    text.classList.remove("d-none");
  } else {
     text.classList.add("d-none");
  }
}
function unhindemefromhre1() {
  var checkBox = document.getElementById("grandmothercheck");

  var text = document.getElementById("grandmothersec");

  if (checkBox.checked == true){
    text.classList.remove("d-none");
  } else {
     text.classList.add("d-none");
  }
}
function unhindemefromhre2() {
  var checkBox12 = document.getElementById("grandpatmother");

  var text12 = document.getElementById("grandpatmother12");

  if (checkBox12.checked == true){
    text12.classList.remove("d-none");
  } else {
     text12.classList.add("d-none");
  }
}
function unhindemefromhre3() {
  var checkBox12 = document.getElementById("fathercheck");

  var text12 = document.getElementById("fathercontain");

  if (checkBox12.checked == true){
    text12.classList.remove("d-none");
  } else {
     text12.classList.add("d-none");
  }
}
function unhindemefromhre4() {
  var checkBox12 = document.getElementById("mgrandfather");

  var text12 = document.getElementById("mgrandfathercontain");

  if (checkBox12.checked == true){
    text12.classList.remove("d-none");
  } else {
     text12.classList.add("d-none");
  }
}
function unhindemefromhre5() {
  var checkBox12 = document.getElementById("Paternalgrand");

  var text12 = document.getElementById("Paternalgrandcontain");

  if (checkBox12.checked == true){
    text12.classList.remove("d-none");
  } else {
     text12.classList.add("d-none");
  }
}
function bone11r() {
  var checkBox = document.getElementById("bone11");

  var text = document.getElementById("marrowown");

  if (checkBox.checked == true){
    text.classList.remove("d-none");
  } else {
     text.classList.add("d-none");
  }
}
function btranss1235()
{
  var hyperdp=document.getElementById("transcheck");
  // var hyperdd=document.getElementById("btrans13");

  hyperdp.classList.remove("d-none");
  // hyperdd.classList.remove("d-none");

}
function dbtranss1235()
{
  var hype1rda=document.getElementById("transcheck");
  var hyperdd=document.getElementById("btrans13");
  hype1rdd.classList.add("d-none");
  hype1rda.classList.add("d-none");
}

function bone11rr() {
  var checkBox = document.getElementById("bone12");

  var text = document.getElementById("marrowown1");

  if (checkBox.checked == true){
    text.classList.remove("d-none");
  } else {
     text.classList.add("d-none");
  }
}
function btranss()
{
  dbtranss();
  var hyperdp=document.getElementById("btrans123");
  var hyperdd1=document.getElementById("btrans13");
  var hyperdd=document.getElementById("transcheck");

  hyperdp.classList.remove("d-none");
  hyperdd.classList.remove("d-none");
  hyperdd1.classList.remove("d-none");


}
function dbtranss()
{
  var hype1rda=document.getElementById("btrans123");
  var hyperdd1=document.getElementById("btrans13");
  var hyperdd=document.getElementById("transcheck");

  hyperdd.classList.add("d-none");
  hyperdd1.classList.add("d-none");
  hype1rda.classList.add("d-none");

  btranss1235();
}

function cancerq1()
{
  var hyper=document.getElementById("cancerq1");
  hyper.classList.remove("d-none");
}
function cancerq2()
{
  var hype1r=document.getElementById("cancerq1");
  hype1r.classList.add("d-none");
}
function cancerq3()
{
  var hyper=document.getElementById("cancerq2");
  hyper.classList.remove("d-none");
}
function cancerq4()
{
  var hype1r=document.getElementById("cancerq2");
  hype1r.classList.add("d-none");
}
function cancerq5()
{
  var hyper=document.getElementById("cancerq3");
  hyper.classList.remove("d-none");
}
function cancerq6()
{
  var hype1r=document.getElementById("cancerq3");
  hype1r.classList.add("d-none");
}
function cancerq7()
{
  var hyper=document.getElementById("cancerq4");
  hyper.classList.remove("d-none");
}
function cancerq8()
{
  var hype1r=document.getElementById("cancerq4");
  hype1r.classList.add("d-none");
}
function cancerq9()
{
  var hyper=document.getElementById("cancerq5");
  hyper.classList.remove("d-none");
}
function cancerq10()
{
  var hype1r=document.getElementById("cancerq5");
  hype1r.classList.add("d-none");
}
function cancerq11()
{
  var hyper=document.getElementById("cancerq6");
  hyper.classList.remove("d-none");
}
function cancerq12()
{
  var hype1r=document.getElementById("cancerq6");
  hype1r.classList.add("d-none");
}
function cancerq13()
{
  var hyper=document.getElementById("cancerq7");
  hyper.classList.remove("d-none");
}
function cancerq14()
{
  var hype1r=document.getElementById("cancerq7");
  hype1r.classList.add("d-none");
}
function cancerq15()
{
  var hyper=document.getElementById("cancerq8");
  hyper.classList.remove("d-none");
}
function cancerq16()
{
  var hype1r=document.getElementById("cancerq8");
  hype1r.classList.add("d-none");
}
function cancerq17()
{
  var hyper=document.getElementById("cancerq9");
  hyper.classList.remove("d-none");
}
function cancerq18()
{
  var hype1r=document.getElementById("cancerq9");
  hype1r.classList.add("d-none");
}
function cancerq19()
{
  var hyper=document.getElementById("cancerq10");
  hyper.classList.remove("d-none");
}
function cancerq20()
{
  var hype1r=document.getElementById("cancerq10");
  hype1r.classList.add("d-none");
}
function hidemenow2()
{
  var hyper=document.getElementById("hidemenow2");
  hyper.classList.remove("d-none");
}
function dhidemenow2()
{
  var hype1r=document.getElementById("hidemenow2");
  hype1r.classList.add("d-none");
}

function hidemenow2a()
{
  var hyper=document.getElementById("hidemenow2a");
  hyper.classList.remove("d-none");
}
function dhidemenow2a()
{
  var hype1r=document.getElementById("hidemenow2a");
  hype1r.classList.add("d-none");
}


function hidemenow2b()
{
  var hyper=document.getElementById("hidemenow2b");
  hyper.classList.remove("d-none");
}
function dhidemenow2b()
{
  var hype1r=document.getElementById("hidemenow2b");
  hype1r.classList.add("d-none");
}


function hidemenow2c()
{
  var hyper=document.getElementById("hidemenow2c");
  hyper.classList.remove("d-none");
}
function dhidemenow2c()
{
  var hype1r=document.getElementById("hidemenow2c");
  hype1r.classList.add("d-none");
}

function hidemenow2d()
{
  var hyper=document.getElementById("hidemenow2d");
  hyper.classList.remove("d-none");
}
function dhidemenow2d()
{
  var hype1r=document.getElementById("hidemenow2d");
  hype1r.classList.add("d-none");
}








function hidemenow2()
{
  var hyper=document.getElementById("hidemenow2");
  hyper.classList.remove("d-none");
}
function dhidemenow2()
{
  var hype1r=document.getElementById("hidemenow2");
  hype1r.classList.add("d-none");
}

function hidemenow111()
{
  var hyper=document.getElementById("hidemenow111");
  hyper.classList.remove("d-none");
}
function dhidemenow111()
{
  var hype1r=document.getElementById("hidemenow111");
  hype1r.classList.add("d-none");
}
function hidemenow11()
{
  var hyper=document.getElementById("hidemenow11");
  hyper.classList.remove("d-none");
}
function dhidemenow11()
{
  var hype1r=document.getElementById("hidemenow11");
  hype1r.classList.add("d-none");
}
function hidemenow1()
{
  var hyper=document.getElementById("hidemenow1");
  hyper.classList.remove("d-none");
}
function dhidemenow1()
{
  var hype1r=document.getElementById("hidemenow1");
  hype1r.classList.add("d-none");
}
function fmhhh()
{
  var hyper=document.getElementById("fmhhh1");
  hyper.classList.remove("d-none");
}
function dfmhhh()
{
  var hype1r=document.getElementById("fmhhh1");
  hype1r.classList.add("d-none");
}
function fmhhh2()
{
  var hyper2=document.getElementById("fmhhh2");
  hyper2.classList.remove("d-none");
}
function dfmhhh2()
{
  var hyp2=document.getElementById("fmhhh2");
  hyp2.classList.add("d-none");
}

function fmhhh3()
{
  var hyper2=document.getElementById("fmhhh3");
  hyper2.classList.remove("d-none");
}
function dfmhhh3()
{
  var hyp2=document.getElementById("fmhhh3");
  hyp2.classList.add("d-none");
}

function fmhhh4()
{
  var hyper2=document.getElementById("fmhhh4");
  hyper2.classList.remove("d-none");
}
function dfmhhh4()
{
  var hyp2=document.getElementById("fmhhh4");
  hyp2.classList.add("d-none");
}
function fmhhh5()
{
  var hyper2=document.getElementById("fmhhh5");
  hyper2.classList.remove("d-none");
}
function dfmhhh5()
{
  var hyp2=document.getElementById("fmhhh5");
  hyp2.classList.add("d-none");
}

function fmhhh6()
{
  var hyper2=document.getElementById("fmhhh6");
  hyper2.classList.remove("d-none");
}
function dfmhhh6()
{
  var hyp2=document.getElementById("fmhhh6");
  hyp2.classList.add("d-none");
}


function fmhhh7()
{
  var hyper2=document.getElementById("fmhhh7");
  hyper2.classList.remove("d-none");
}
function dfmhhh7()
{
  var hyp2=document.getElementById("fmhhh7");
  hyp2.classList.add("d-none");
}


function fmhhh8()
{
  var hyper2=document.getElementById("fmhhh8");
  hyper2.classList.remove("d-none");
}
function dfmhhh8()
{
  var hyp2=document.getElementById("fmhhh8");
  hyp2.classList.add("d-none");
}

function fmhhh9()
{
  var hyper2=document.getElementById("fmhhh9");
  hyper2.classList.remove("d-none");
}
function dfmhhh9()
{
  var hyp2=document.getElementById("fmhhh9");
  hyp2.classList.add("d-none");
}


function fmhhh10()
{
  var hyper2=document.getElementById("fmhhh10");
  hyper2.classList.remove("d-none");
}
function dfmhhh10()
{
  var hyp2=document.getElementById("fmhhh10");
  hyp2.classList.add("d-none");
}


function fmhhh11()
{
  var hyper2=document.getElementById("fmhhh11");
  hyper2.classList.remove("d-none");
}
function dfmhhh11()
{
  var hyp2=document.getElementById("fmhhh11");
  hyp2.classList.add("d-none");
}

function fmhhh12()
{
  var hyper2=document.getElementById("fmhhh12");
  hyper2.classList.remove("d-none");
}
function dfmhhh12()
{
  var hyp2=document.getElementById("fmhhh12");
  hyp2.classList.add("d-none");
}

function fmhhh13()
{
  var hyper2=document.getElementById("fmhhh13");
  hyper2.classList.remove("d-none");
}
function dfmhhh13()
{
  var hyp2=document.getElementById("fmhhh13");
  hyp2.classList.add("d-none");
}


function fmhhh14()
{
  var hyper2=document.getElementById("fmhhh14");
  hyper2.classList.remove("d-none");
}
function dfmhhh14()
{
  var hyp2=document.getElementById("fmhhh14");
  hyp2.classList.add("d-none");
}


function fmhhh15()
{
  var hyper2=document.getElementById("fmhhh15");
  hyper2.classList.remove("d-none");
}
function dfmhhh15()
{
  var hyp2=document.getElementById("fmhhh15");
  hyp2.classList.add("d-none");
}
function fmhhh155()
{
  var hyper2=document.getElementById("fmhhh155");
  hyper2.classList.remove("d-none");
}
function dfmhhh155()
{
  var hyp2=document.getElementById("fmhhh155");
  hyp2.classList.add("d-none");
}

function fmhhh16()
{
  var hyper2=document.getElementById("fmhhh16");
  hyper2.classList.remove("d-none");
}
function dfmhhh16()
{
  var hyp2=document.getElementById("fmhhh16");
  hyp2.classList.add("d-none");
}


function fmhhh17()
{
  var hyper2=document.getElementById("fmhhh17");
  hyper2.classList.remove("d-none");
}
function dfmhhh17()
{
  var hyp2=document.getElementById("fmhhh17");
  hyp2.classList.add("d-none");
}


function fmhhh18()
{
  var hyper2=document.getElementById("fmhhh18");
  hyper2.classList.remove("d-none");
}
function dfmhhh18()
{
  var hyp2=document.getElementById("fmhhh18");
  hyp2.classList.add("d-none");
}
function fmhhh19()
{
  var hyper2=document.getElementById("fmhhh19");
  hyper2.classList.remove("d-none");
}
function dfmhhh19()
{
  var hyp2=document.getElementById("fmhhh19");
  hyp2.classList.add("d-none");
}

function fmhhh20()
{
  var hyper2=document.getElementById("fmhhh20");
  hyper2.classList.remove("d-none");
}
function dfmhhh20()
{
  var hyp2=document.getElementById("fmhhh20");
  hyp2.classList.add("d-none");
}
function fmhhh21()
{
  var hyper2=document.getElementById("fmhhh21");
  hyper2.classList.remove("d-none");
}
function dfmhhh21()
{
  var hyp2=document.getElementById("fmhhh21");
  hyp2.classList.add("d-none");
}

function fmhhh22()
{
  var hyper2=document.getElementById("fmhhh22");
  hyper2.classList.remove("d-none");
}
function dfmhhh22()
{
  var hyp2=document.getElementById("fmhhh22");
  hyp2.classList.add("d-none");
}


function fmhhh23()
{
  var hyper2=document.getElementById("fmhhh23");
  hyper2.classList.remove("d-none");
}
function dfmhhh23()
{
  var hyp2=document.getElementById("fmhhh23");
  hyp2.classList.add("d-none");
}


function fmhhh24()
{
  var hyper2=document.getElementById("fmhhh24");
  hyper2.classList.remove("d-none");
}
function dfmhhh24()
{
  var hyp2=document.getElementById("fmhhh24");
  hyp2.classList.add("d-none");
}
function fmhhh25()
{
  var hyper2=document.getElementById("fmhhh25");
  hyper2.classList.remove("d-none");
}
function dfmhhh25()
{
  var hyp2=document.getElementById("fmhhh25");
  hyp2.classList.add("d-none");
}

function fillnowfh()
{
  var hyper2=document.getElementById("fillnowfh");
  hyper2.classList.remove("d-none");
  // fmhhh20();
  // fmhhh21();
  // fmhhh22();
}
function dfillnowfh()
{
  var hyp2=document.getElementById("fillnowfh");
  hyp2.classList.add("d-none");
}
function cchh()
{
  var hyper2=document.getElementById("dcchh");
  hyper2.classList.remove("d-none");

}
function dcchh()
{
  var hyp2=document.getElementById("dcchh");
  hyp2.classList.add("d-none");
}

// -----------------your-risk page------------------------
function yourrisk()
{

}

function drinkcontinue()
{
  var ff013=document.getElementById("drink44");
  ff013.classList.remove("d-none");
  var ff023=document.getElementById("drink1");
  ff023.classList.remove("d-none");
  var ff0333=document.getElementById("drink11");
  ff0333.classList.remove("d-none");
  var ff044=document.getElementById("drink2");
  ff044.classList.remove("d-none");
  var ff045=document.getElementById("drink22");
  ff045.classList.remove("d-none");
  var ff0456=document.getElementById("drink222");
  ff0456.classList.remove("d-none");
  var ff045i=document.getElementById("drink33");
  ff045i.classList.add("d-none");
  var ff0456i=document.getElementById("drink333");
  ff0456i.classList.add("d-none");
}
function quitdrink()
{

  var ff013=document.getElementById("drink44");
  ff013.classList.remove("d-none");
  var ff023=document.getElementById("drink1");
  ff023.classList.remove("d-none");
  var ff0333=document.getElementById("drink11");
  ff0333.classList.remove("d-none");
  var ff044=document.getElementById("drink2");
  ff044.classList.remove("d-none");
  var ff045=document.getElementById("drink22");
  ff045.classList.remove("d-none");
  var ff0456=document.getElementById("drink222");
  ff0456.classList.remove("d-none");

  var ff045i=document.getElementById("drink33");
  ff045i.classList.remove("d-none");
  var ff0456i=document.getElementById("drink333");
  ff0456i.classList.remove("d-none");

}
function nodrink()
{
  var ff013=document.getElementById("drink44");
  ff013.classList.add("d-none");
  var ff023=document.getElementById("drink1");
  ff023.classList.add("d-none");
  var ff0333=document.getElementById("drink11");
  ff0333.classList.add("d-none");
  var ff044=document.getElementById("drink2");
  ff044.classList.add("d-none");
  var ff045=document.getElementById("drink22");
  ff045.classList.add("d-none");
  var ff0456=document.getElementById("drink222");
  ff0456.classList.add("d-none");
  var ff045i=document.getElementById("drink33");
  ff045i.classList.add("d-none");
  var ff0456i=document.getElementById("drink333");
  ff0456i.classList.add("d-none");
}
function activeme()
{
var ff01=document.getElementById("onlyfemale");
var ff0=document.getElementById("f0");
// var pb01=document.getElementById("progressbar1");
ff0.classList.remove("d-none");
ff01.classList.remove("d-none");
// pb01.classList.add("bhhh1");




}

function deactiveme()
{
  // var pb01=document.getElementById("progressbar1");
  // pb01.classList.remove("bhhh1");

var ff01=document.getElementById("onlyfemale");
var ff0=document.getElementById("f0");
ff0.classList.add("d-none");
ff01.classList.add("d-none");



}

function smokeactive()
{

var ff01=document.getElementById("smoke1");
ff01.classList.remove("d-none");
var ff02=document.getElementById("smoke11");
ff02.classList.remove("d-none");
var ff011=document.getElementById("smoke111");
ff011.classList.remove("d-none");
var ff022=document.getElementById("smoke333");
ff022.classList.remove("d-none");
var ff03=document.getElementById("smoke33");
ff03.classList.add("d-none");
var ff044o=document.getElementById("smoke2");
ff044o.classList.add("d-none");
var ff045e=document.getElementById("smoke22");
ff045e.classList.add("d-none");
}
function smokeactive1()
{

  var ff01=document.getElementById("smoke1");
  ff01.classList.remove("d-none");
  var ff02=document.getElementById("smoke11");
  ff02.classList.remove("d-none");
  var ff011=document.getElementById("smoke111");
  ff011.classList.remove("d-none");
  var ff022=document.getElementById("smoke333");
  ff022.classList.remove("d-none");
  var ff03=document.getElementById("smoke33");
  ff03.classList.remove("d-none");
  var ff044o=document.getElementById("smoke2");
  ff044o.classList.remove("d-none");
  var ff045e=document.getElementById("smoke22");
  ff045e.classList.remove("d-none");
}
function desmokeactive()
{
  var ff01=document.getElementById("smoke1");
  ff01.classList.add("d-none");
  var ff02=document.getElementById("smoke11");
  ff02.classList.add("d-none");
  var ff011=document.getElementById("smoke111");
  ff011.classList.add("d-none");
  var ff022=document.getElementById("smoke333");
  ff022.classList.add("d-none");
  var ff03=document.getElementById("smoke33");
  ff03.classList.add("d-none");
  var ff044o=document.getElementById("smoke2");
  ff044o.classList.add("d-none");
  var ff045e=document.getElementById("smoke22");
  ff045e.classList.add("d-none");
}

function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}


// -----eof risk page-----------------------
function myFunction() {


var navbaractive1=document.getElementById("headbar");
var navbaractive2=document.getElementById("nav-a-tag");
var navbaractive3=document.getElementById("img-1");
var submenu=document.getElementById("submenu");
var line=document.getElementById("hor-line");

var scroll = $(window).scrollTop();

if (scroll >= 10) {
line.classList.remove("d-none");
submenu.classList.remove("d-none");
navbaractive1.classList.add("fixed-top");
// navbaractive1.classList.add("shadow-1");
navbaractive2.classList.add("py-0");
navbaractive1.classList.add("bg-white");
navbaractive2.classList.add("remove-padding");
navbaractive3.classList.add("remove-padding-img");
navbaractive3.classList.add("p-0");
// navbaractive3.classList.add("p-2");



}
else {
  // line.classList.add("d-none");
  // submenu.classList.add("d-none");
  // navbaractive1.classList.remove("shadow-1");
navbaractive2.classList.remove("py-0");
navbaractive1.classList.remove("fixed-top");
navbaractive1.classList.remove("bg-white");
navbaractive2.classList.remove("remove-padding");
navbaractive3.classList.remove("remove-padding-img");
navbaractive3.classList.remove("p-2");
}



}
function myFunction1() {
if(window.innerWidth >= 576){
var navbaractive1=document.getElementById("headbar");
var navbaractive2=document.getElementById("nav-a-tag");
var navbaractive3=document.getElementById("img-1");
var submenu=document.getElementById("submenu");
var line=document.getElementById("hor-line");
var submenu1=document.getElementById("submenu1");
var line1=document.getElementById("hor-line1");


var scroll = $(window).scrollTop();

if (scroll >= 10) {
  line.classList.remove("d-none");

   submenu.classList.remove("d-none");
navbaractive1.classList.add("fixed-top");
// navbaractive1.classList.add("shadow-1");
navbaractive2.classList.add("py-0");
navbaractive1.classList.add("bg-white");
navbaractive2.classList.add("remove-padding");
navbaractive3.classList.add("remove-padding-img");
navbaractive3.classList.add("p-0");
// navbaractive3.classList.add("p-2");



}
else {
  line.classList.add("d-none");
  submenu.classList.add("d-none");
  // navbaractive1.classList.remove("shadow-1");
navbaractive2.classList.remove("py-0");
navbaractive1.classList.remove("fixed-top");
navbaractive1.classList.remove("bg-white");
navbaractive2.classList.remove("remove-padding");
navbaractive3.classList.remove("remove-padding-img");
navbaractive3.classList.remove("p-2");

}


}

else{
  if (scroll >= 10) {
    line1.classList.remove("d-none");
    submenu1.classList.remove("d-none");

  }
  else{
    line1.classList.add("d-none");
    submenu1.classList.add("d-none");


  }
}
}

function addproducttocart(){


  window.location.href = 'payment.html';
console.log(p6);
}

function addtocart_appointment_750()
{

  var p1=750.00;
  var p2=75;
  var p3=135;
  var p4=960;
  var testnames="Comprenhensive Session";
  console.log(p1);
  var element = document.getElementById("item_price").innerHTML;
  var element = document.getElementById("Shipping").innerHTML;
  var element = document.getElementById("taxamt").innerHTML;
  var element = document.getElementById("tot").innerHTML;
  var element = document.getElementById("item_price1").innerHTML;
  var element = document.getElementById("Shipping1").innerHTML;
  var element = document.getElementById("taxamt1").innerHTML;
  var element = document.getElementById("tot1").innerHTML;
  var element = document.getElementById("item_price3").innerHTML;
  var element = document.getElementById("Shipping3").innerHTML;
  var element = document.getElementById("taxamt3").innerHTML;
  var element = document.getElementById("tot3").innerHTML;

  console.log(element);
  document.getElementById("planname").innerHTML=testnames;
  var z = document.getElementById("testname").innerHTML=testnames;
  var zz = document.getElementById("testname2").innerHTML=testnames;
  var zzz = document.getElementById("testname3").innerHTML=testnames;
  var p6=document.getElementById("item_price").innerHTML=p1;
  var p7=document.getElementById("Shipping").innerHTML=p2;
  var p8=document.getElementById("taxamt").innerHTML=p3;
  var p9=document.getElementById("tot").innerHTML=p4;
  var p6=document.getElementById("item_price1").innerHTML=p1;
  var p7=document.getElementById("Shipping1").innerHTML=p2;
  var p8=document.getElementById("taxamt1").innerHTML=p3;
  var p9=document.getElementById("tot1").innerHTML=p4;
  var p6=document.getElementById("item_price3").innerHTML=p1;
  var p7=document.getElementById("Shipping3").innerHTML=p2;
  var p8=document.getElementById("taxamt3").innerHTML=p3;
  var p9=document.getElementById("tot3").innerHTML=p4;


// window.location.href = 'profile';
// var navbaractive1=document.getElementById("home-tab");
// var navbaractive2=document.getElementById("profile-tab");
//
// navbaractive1.classList.remove("active");
// navbaractive2.classList.add("active");

console.log(p6);
}
function divhidesummery() {
  var x = document.getElementById("summery");
  if (x.style.display === "block") {
    x.style.display = "none";
  }
  var y=document.getElementById("head-tab1");
  y.innerHTML = "Congratulations !";
  var z=document.getElementById("p-1");
  z.style.display = "none";
  var a=document.getElementById("d1");
  a.style.display = "none";
  var b=document.getElementById("d2");
  b.style.display = "none";
}


function div2showsummery() {
  var x = document.getElementById("summery");
  var y=document.getElementById("head-tab1");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
   y.innerHTML = "Our Certified genetic counsellor will call you at at the time of your appointment.";
   var z=document.getElementById("p-1");
   z.style.display = "none";
   var a=document.getElementById("d1");
   a.style.display = "block";
   var b=document.getElementById("d2");
   b.style.display = "block";

}


   function div4showsummery() {

  var x = document.getElementById("summery");
  var y=document.getElementById("head-tab1");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
   y.innerHTML = "Pay with";
   var z=document.getElementById("p-1");
   z.style.display = "none";
   var a=document.getElementById("d1");
   a.style.display = "block";
   var b=document.getElementById("d2");
   b.style.display = "block";



}




function datetimereview(){
  var kkk=document.getElementById("lblEventCalendar").innerHTML;
  document.getElementById("sdate").innerHTML=kkk;
}



function addtocart_appointment_550()
{
  var p1=550.00;
  var p2=75;
  var p3=99;
  var p4=724;
  var testnames="Preliminary Session";
  document.getElementById("planname").innerHTML=testnames;

  var z = document.getElementById("testname").innerHTML=testnames;
  var zz = document.getElementById("testname2").innerHTML=testnames;
  var zzz = document.getElementById("testname3").innerHTML=testnames;

  console.log(p1);
  var element = document.getElementById("item_price").innerHTML;
  var element = document.getElementById("Shipping").innerHTML;
  var element = document.getElementById("taxamt").innerHTML;
  var element = document.getElementById("tot").innerHTML;
  var element = document.getElementById("item_price1").innerHTML;
  var element = document.getElementById("Shipping1").innerHTML;
  var element = document.getElementById("taxamt1").innerHTML;
  var element = document.getElementById("tot1").innerHTML;
  var element = document.getElementById("item_price3").innerHTML;
  var element = document.getElementById("Shipping3").innerHTML;
  var element = document.getElementById("taxamt3").innerHTML;
  var element = document.getElementById("tot3").innerHTML;

  console.log(element);
  var p6=document.getElementById("item_price").innerHTML=p1;
  var p7=document.getElementById("Shipping").innerHTML=p2;
  var p8=document.getElementById("taxamt").innerHTML=p3;
  var p9=document.getElementById("tot").innerHTML=p4;
  var p6=document.getElementById("item_price1").innerHTML=p1;
  var p7=document.getElementById("Shipping1").innerHTML=p2;
  var p8=document.getElementById("taxamt1").innerHTML=p3;
  var p9=document.getElementById("tot1").innerHTML=p4;
  var p6=document.getElementById("item_price3").innerHTML=p1;
  var p7=document.getElementById("Shipping3").innerHTML=p2;
  var p8=document.getElementById("taxamt3").innerHTML=p3;
  var p9=document.getElementById("tot3").innerHTML=p4;


// window.location.href = 'profile';
var navbaractive1=document.getElementById("home-tab");
var navbaractive2=document.getElementById("profile-tab");

navbaractive1.classList.remove("active");
navbaractive2.classList.add("active");

console.log(p6);
}


function fillme()
{
  var element1 = document.getElementById("messages-tab");
  element1.classList.remove("disabled");
window.location.href = 'view-reports.html';

}




function fill(){

var t1=document.getElementById("nameship").value;
var t2=document.getElementById("cityship").value;
var t3=document.getElementById("pinship").value;
var t4=document.getElementById("a1ship").value;
var t5=document.getElementById("mobship").value;
var t6=document.getElementById("a2ship").value;
var t7=document.getElementById("emailship").value;
  console.log(t1);
  console.log(t2);
  console.log(t3);
  console.log(t4);
  console.log(t5);
  console.log(t6);
  console.log(t7);
  console.log(t1+t7);
  document.getElementById("namepay").value=t1;
  document.getElementById("addresschange").innerHTML=t1+''+"<br>"+t4+''+t7;
  var element = document.getElementById("profile-tab");
  element.classList.remove("disabled");

  // element.addClass('disabled-button');
  var con_button1=document.getElementById("con1").value;
  var con_button2=document.getElementById("con2").value;

  con_button1.style.display = "none";
  con_button2.style.display = "block";





}

function promo() {
  var t=document.getElementById("gift").value;
  var p=document.getElementById("total").innerHTML;
  console.log(p);
  console.log(t);
  console.log("hello");
  console.log(p);
if(t=="AONPT9997A"){
  var d=1000;
  var h=10195-1000;
  console.log(h);
    document.getElementById("total").innerHTML=h;
    alert("Congrates 1000 rs discounted from total");
    console.log(t);
  }
  else{
    alert("Wrong promo code applied");
  }

}


function clickCounter() {
    var y = document.getElementById("result").innerHTML;
    var p=document.getElementById("price").innerHTML;
    var s=document.getElementById("ship").innerHTML;
    var g=document.getElementById("gst").innerHTML;
    var t=document.getElementById("total").innerHTML;
    var p=9000;
    // console.log(p*2);


    var am1 = document.getElementById("addmember1");
    var am2 = document.getElementById("addmember2");
    var am3 = document.getElementById("addmember3");
    var am4 = document.getElementById("addmember4");
    var am5 = document.getElementById("addmember5");
    if (y < 5 )
    {
        y++;
        document.getElementById("result").innerHTML = y;
        // if(y == 1)
        // {
        //
        // var a=  document.getElementById("price").innerHTML=(p*2);
        // var b=  document.getElementById("ship").innerHTML=1000;
        // var c=  document.getElementById("gst").innerHTML=p*2*0.18;
        // var d=  document.getElementById("total").innerHTML=a+b+c;
        //
        // console.log(a);
        //
        //
        //   am1.style.display = "block";
        // }
        if(y == 2)
        {

        var a=  document.getElementById("price").innerHTML=(p*2);
        var b=  document.getElementById("ship").innerHTML=1000;
        var c=  document.getElementById("gst").innerHTML=p*2*0.18;
        var d=  document.getElementById("total").innerHTML=a+b+c;

        console.log(a);


          am1.style.display = "block";
        }
        if(y == 3)
          {

            var a=  document.getElementById("price").innerHTML=p*3;
            var b=  document.getElementById("ship").innerHTML=1000;
            var c=  document.getElementById("gst").innerHTML=p*3*0.18;
            var d=  document.getElementById("total").innerHTML=a+b+c;
            am2.style.display = "block";
console.log(a);

          }
          if(y == 4)
            {
              var a=  document.getElementById("price").innerHTML=p*4;
              var b=  document.getElementById("ship").innerHTML=1000;
              var c=  document.getElementById("gst").innerHTML=p*4*0.18;
              var d=  document.getElementById("total").innerHTML=a+b+c;
              am3.style.display = "block";


console.log(a);
            }
            if(y == 5)
              {
                var a=  document.getElementById("price").innerHTML=p*5;
                var b=  document.getElementById("ship").innerHTML=1000;
                var c=  document.getElementById("gst").innerHTML=p*5*0.18;
                var d=  document.getElementById("total").innerHTML=a+b+c;
                am4.style.display = "block";

console.log(a);
              }
}
    else{
      alert("You can not buy more then 5");
    }


}



function clickCountermin() {
var x= document.getElementById("result").innerHTML;
var ap1 = document.getElementById("addmember1");
var ap2 = document.getElementById("addmember2");
var ap3 = document.getElementById("addmember3");
var ap4 = document.getElementById("addmember4");
var ap5 = document.getElementById("addmember5");
var pm=document.getElementById("price").innerHTML;
var sm=document.getElementById("ship").innerHTML;
var gm=document.getElementById("gst").innerHTML;
var tm=document.getElementById("total").innerHTML;
console.log(x);

if(x>1)
{
if(x==2){
  x--;
  document.getElementById("price").innerHTML=9000;
  var a=document.getElementById("price").innerHTML;
  document.getElementById("ship").innerHTML=1000;
  var b=document.getElementById("ship").innerHTML;
  document.getElementById("gst").innerHTML=(9000*18)/100;
  var c=document.getElementById("gst").innerHTML;
  // var d=a+b+c;
  document.getElementById("total").innerHTML=11620;
  console.log(x);
  document.getElementById("result").innerHTML=x;
  ap1.style.display="none";
  ap2.style.display="none";
  ap3.style.display="none";
  ap4.style.display="none";
  ap5.style.display="none";
}

if(x==3){
  x--;
  document.getElementById("price").innerHTML=18000;

  console.log(x);
  document.getElementById("result").innerHTML=x;
  ap2.style.display="none";
  ap3.style.display="none";
  ap4.style.display="none";
  ap5.style.display="none";

}

if(x==4){
  x--;
  document.getElementById("price").innerHTML=27000;

  console.log(x);
  document.getElementById("result").innerHTML=x;

  ap3.style.display="none";
  ap4.style.display="none";
  ap5.style.display="none";

}


if(x==5){
  x--;
  document.getElementById("price").innerHTML=36000;

  console.log(x);
  document.getElementById("result").innerHTML=x;

  // ap3.style.display="none";
  ap4.style.display="none";
  ap5.style.display="none";

}



}


else{
  alert("You can not buy lesser then 1");

}
}



function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
