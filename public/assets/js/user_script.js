// Script for active navigation
const moveMenuNav = (event) => {
  const getId = event.id;
  const links = document.querySelectorAll(".navbar .nav-link");
  for (i = 0; i < links.length; i++) {
    if (links[i].hasAttribute("class")) {
      links[i].classList.remove("active");
    }
  }

  event.classList.add("active");
};
// End of Script for active navigation

var a = 0;
window.onscroll = function () {
  myFunction();
  calculate();
};

// Get the navbar
var navbar = document.getElementById("navbar");
const mt = document.querySelector("#mt");
const toggleTop = document.querySelector("#toggleTop");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    mt.classList.add("margin-top");
    toggleTop.classList.remove("toggle-top");
  } else {
    navbar.classList.remove("sticky");
    mt.classList.remove("margin-top");
    toggleTop.classList.add("toggle-top");
  }
}

function closeNav() {
  $(".navbar-collapse").collapse("hide");
}

$(document).ready(
  $(function () {
    var navbtn = $(".navbar-toggler");

    $(navbtn).click(function () {
      $(navbtn).toggleClass("active");
    });
  })
);

$(function () {
  AOS.init({
    duration: 600,
    anchorPlacement: "top-top",
    once: false,
  });
  // window.addEventListener("load", AOS.refresh);
  onElementHeightChange(document.body, function () {
    AOS.refresh();
  });
});

function onElementHeightChange(elm, callback) {
  var lastHeight = elm.clientHeight;
  var newHeight;

  (function run() {
    newHeight = elm.clientHeight;
    if (lastHeight !== newHeight) callback();
    lastHeight = newHeight;

    if (elm.onElementHeightChangeTimer) {
      clearTimeout(elm.onElementHeightChangeTimer);
    }

    elm.onElementHeightChangeTimer = setTimeout(run, 200);
  })();
}

function refreshAos() {
  onElementHeightChange(document.body, function () {
    AOS.refresh();
  });
  AOS.init({
    duration: 600,
    anchorPlacement: "top-top",
    once: false,
  });
}

//Owl Carousel
$(document).on("click", "#setuju", function () {
  $(".btn-submit").attr({
    disabled: !$(this).is(":checked"),
  });
});

$(document).ready(function () {
  $(".owl-carousel").owlCarousel({
    loop: true,
    margin: 13,
    dots: true,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navigation: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
      },
      600: {
        items: 2,
        nav: false,
      },
      1000: {
        loop: true,
        items: 3,
        navigation: false,
      },
    },
  });
});

//Sistem informasi
//Scroll angka
function calculate() {
  var oTop = $("#counter").offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $(".counter-value").each(function () {
      var $this = $(this),
        countTo = $this.attr("data-count");
      $({
        countNum: $this.text(),
      }).animate(
        {
          countNum: countTo,
        },

        {
          duration: 2000,
          easing: "swing",
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
            //alert('finished');
          },
        }
      );
    });
    a = 1;
  }
}

// JS Aturan Layanan(Mobile)
$(".accordion_header").click(function () {
  $(".accordion_header").removeClass("active");
  $(this).addClass("active");
});

// stop video
$("#video-close-button-id").click(function () {
  $("#youtube-player-id").each(function () {
    var el_src = $(this).attr("src");
    $(this).attr("src", el_src);
  });
});

function cardImg() {
  const imgProfile = document.querySelector("#im-profile");
  const width = imgProfile.naturalWidth;
  const height = imgProfile.naturalHeight;

  if (width < height) {
    imgProfile.style.width = "100%";
    imgProfile.style.height = "auto";
    let n = 1;
    let nilai = (height - width) / 2;
    let data_margin = (nilai / width) * 100;
    let margin = (210 * data_margin) / 100;
    imgProfile.style.marginTop = "-" + margin + "px";
  } else if (width > height) {
    imgProfile.style.width = "auto";
    imgProfile.style.height = "100%";
    let n = 2;
    const nilai = (width - height) / 2;
    let data_margin = (nilai / width) * 100;
    let margin = (210 * data_margin) / 100;
    imgProfile.style.marginLeft = "-" + margin + "px";
  } else {
    imgProfile.style.width = "100%";
    imgProfile.style.height = "auto";
    let n = 0;
    imgProfile.style.margin = "0";
  }
}
