var mobileNav = document.getElementById("mobile-nav");
var triggerMobileNav = document.getElementById("button-for-mobile-nav");

function openNav(){
  mobileNav.style.width="100%";
}

function closeNav(){
  mobileNav.style.width="0%";
}

$('.btn').on('click', (function() {
    $('.active').removeClass('active');
    $(this).addClass("active");
}));


$(document).ready(function(){


    $("h1").delay("1000").fadeIn();


    // hide #back-top first
    $("#back-top").hide();


    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 500) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
      
            }
        });


        // scroll body to 0px on click
        $('a#back-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });


});

if (mobileNav) {
triggerMobileNav.onclick = function() {
  openNav()
}
};
