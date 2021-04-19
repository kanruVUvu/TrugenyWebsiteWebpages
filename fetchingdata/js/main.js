
$(document).ready(function(){
    // Add minus icon and expand color for collapse element which is open by default
    $(".collapse.show").each(function(){
    	$(this).prev(".card-header").find(".fa").addClass("fa-minus-circle").removeClass("fa-plus-circle");
      $(this).prev(".card-header").find(".acc-header").addClass("expand-color").removeClass("collapse-color");
    });

    // Toggle plus minus icon / add and remove header font color on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
    	$(this).prev(".card-header").find(".fa").removeClass("fa-plus-circle").addClass("fa-minus-circle");
      $(this).prev(".card-header").find(".acc-header").removeClass("collapse-color").addClass("expand-color");
    }).on('hide.bs.collapse', function(){
    	$(this).prev(".card-header").find(".fa").removeClass("fa-minus-circle").addClass("fa-plus-circle");
      $(this).prev(".card-header").find(".acc-header").removeClass("expand-color").addClass("collapse-color");
    });
});

/****navbar toggle*****/

$(document).ready(function() {
  $('.nav-button').click(function() {
    $('.nav-button').toggleClass('change');
  });

 $(window).scroll(function() {
    let position = $(this).scrollTop();
    if(position >= 100) {
      $('.nav-menu').addClass('custom-navbar');
    } else {
      $('.nav-menu').removeClass('custom-navbar');
    }
  });
});

/****end of navbar toggle*****/
/********dv-nav tabs on click function**********/

$( '.dv-nav li a' ).on( 'click', function () {
  $( '.dv-nav li' ).find( 'a.nav-active' ).removeClass( 'nav-active' );
  $( this ).addClass( 'nav-active' );
});

/********end of dv-nav tabs on click function**********/
/********dv-nav prev and next buttons on click function**********/


$('#btnNext').click(function(){
  $('.nav-tabs > .active').next('li').find('a').trigger('click');
});

  $('#btnPrevious').click(function(){
  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
});

function bootstrapTabControl(){
  var i, items = $('.dv-nav li a'), pane = $('.tab-pane');
  // next
  $('.next-button').on('click', function(){
      for(i = 0; i < items.length; i++){
          if($(items[i]).hasClass('nav-active') == true){
              break;
          }
      }
      if(i < items.length - 1){
          // for tab
          $(items[i]).removeClass('nav-active');
          $(items[i+1]).addClass('nav-active');
          // for pane
          $(pane[i]).removeClass('show active');
          $(pane[i+1]).addClass('show active');
      }

  });
  // Prev
  $('.prev-button').on('click', function(){
      for(i = 0; i < items.length; i++){
          if($(items[i]).hasClass('nav-active') == true){
              break;
          }
      }
      if(i != 0){
          // for tab
          $(items[i]).removeClass('nav-active');
          $(items[i-1]).addClass('nav-active');
          // for pane
          $(pane[i]).removeClass('show active');
          $(pane[i-1]).addClass('show active');
      }
  });
}
bootstrapTabControl();


/********end of dv-nav prev and next buttons on click function**********/

/*****close button for detailed view********/

(function ($) {
    $('.dv-closebutton').click(function(){
        $('#tab-content,.slide-buttons-wrap,.dv-block-wrap').remove();
        location.reload().attr('style','scroll-behavior: smooth');

        // $(window).scrollTop(0);

    });
})(jQuery);

/***************end of  close button for detailed view*********************/
/***************view report onclick button for detailed view*********************/

(function ($) {
    $('#veiw-report-btn').click(function(){
        $(this).remove();
        $('#tab-content,.slide-buttons-wrap,.dv-block-wrap').attr('style','display: block !important');
    });
})(jQuery);

/***************End of view report onclick button for detailed view*********************/
function inn() {
 document.getElementById("myText").readOnly = false;document.getElementById("myText").readOnly = false;
 document.getElementById("myText").style.border = "thin solid #000";

}
function changeIt()
{
var i = 1;
my_div.innerHTML = my_div.innerHTML +"<br><input type='text' name='mytext'+ i>"

}
