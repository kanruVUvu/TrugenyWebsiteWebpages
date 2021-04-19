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


