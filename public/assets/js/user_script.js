// JS active class
$(document).on('click', 'ul li', function(){
    $(this).addClass('active').siblings().removeClass('active');
  });


// JS animasi scroll angka
  var a = 0;
  $(window).scroll(function() {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.counter-value').each(function() {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
            countNum: countTo
          },

          {

            duration: 2000,
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
              //alert('finished');
            }

          });
      });
      a = 1;
    }

  });

  

  // JS Aturan Layanan(Mobile)
  $(".accordion_header").click(function(){
    $(".accordion_header").removeClass("active");
   $(this).addClass("active");
});



// JS AOS
$(function() {
  AOS.init({
    duration: 800,
    anchorPlacement:'top-top',
    once:false,
  });
  window.addEventListener("load", AOS.refresh);
});



// JS Navbar
$(document).ready( $(function(){
	var navbtn = $('.navbar-toggler');

	$(navbtn).click(function(){
		$(navbtn).toggleClass('active');
	});
}));