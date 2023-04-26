// codigo para generar efecto sticky en el header //
var header = $("header");
var window = $(window);
var windowHeight = $(window).height();

const scroller = new LocomotiveScroll({
  el: document.querySelector("[data-scroll-container]"),
  smooth: true,
  mobile: {
    smooth: true,
  },
  tablet: {
    smooth: true,
  },
});
scroller.on("scroll", (func) => {
  var sTop = $(".page-wrapper").offset();
  var topValue = sTop.top * -1;
  if (topValue >= 20) {
    header.addClass("sticky-header");
    $(".language").addClass("color");
  } else {
    header.removeClass("sticky-header");
    $(".language").removeClass("color");
  }

  if (topValue >= windowHeight / 2) {
    $(".menu-btn").addClass("menu-btn-color");
  } else {
    $(".menu-btn").removeClass("menu-btn-color");
  }
});

$(window).on('scroll load resize', function() {
	var scroll = $(window).scrollTop();
	if (scroll >= 20) {
		header.addClass("sticky-header");
		// $(".language").addClass("color");
	  } else {
		header.removeClass("sticky-header");
		// $(".language").removeClass("color");
	  }
	// if (scroll >= (windowHeight / 2)) {
	// 	header.addClass('sticky-header');
	// 	$('.logo').addClass('color-logo')
	// } else if (scroll >= 30){
	// 	$('.language').addClass('color');
	// } else {
	// 	header.removeClass('sticky-header');
	// 	$('.logo').removeClass('color-logo')
	// 	$('.language').removeClass('color');
	// }

	// var height_screen =  window.innerHeight - 200;
	// var scroll_pos = 0;
	// $(document).scroll(function() {
	// 	scroll_pos = $(this).scrollTop();
	// 	if(scroll_pos > height_screen) {
	// 		$(".navbar").addClass("menu-scroll");
	// 	} else {
	// 		$(".navbar").removeClass("menu-scroll");
	// 	}
	// });
});




$(".menu-container .submenu").on("click", function (e) {
  e.stopPropagation();
});

// $('.sub-menu ul').hide();
// $(".sub-menu a").click(function () {
// 	  $(this).parent(".sub-menu").children("ul").slideToggle("100");
// 	  $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
//   });

$(".menu-btn").on("click", function () {
  $(".menu-principal").toggleClass("menu-shown");
  $(".menu-btn").toggleClass("open-menu");
  $(".menu-container").toggleClass("show-menu");
  $(".language").toggleClass("color");
  $("body").toggleClass('hidescroll')
});

$("body").on("click", function () {
  $(".menu-container").removeClass("show-menu");
  $("body").removeClass('hidescroll')
  $(".menu").removeClass("open-menu");
});

$(".menu-order-container , .menu-btn").on("click", function (e) {
  e.stopPropagation();
});

//banner//

var swiperBanner = new Swiper(".slider-banner", {
  slidesPerView: 1,
  // lazy:{
  //   loadOnTransitionStart:true,
  //   enabled:true,
  // },

  spaceBetween: 0,
  autoplay: {
	delay: 6000,
  },
  pagination: {
    el: ".banner-pagination",
    clickable: true,
	renderBullet: function (index, className) {
		return '<svg  class="' + className + '" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="35px" viewBox="-2 -2 36 36" xml:space="preserve"><circle class="st0" cx="16" cy="16" r="15.5"/></svg>' ;
	  },
  },
  on:  {
    slideChange: (sw) =>{
      console.log(sw.realIndex)
      $('.slider-banner .swiper-wrapper .swiper-slide:nth-child('+ (sw.realIndex + 1) +')').find("video").trigger('play');
    }
  },

});

var lazyLoadInstance = new LazyLoad({
  elements_selector: ".lazy",
  // ... more custom settings?
});

if (lazyLoadInstance) {
  console.log("our lazy content is ready");
  lazyLoadInstance.update();
}

/* demo */
var inner = document.getElementById("lazyTest").outerHTML;



/* swiper events */
swiperBanner.on("slideChange", function() {
/* demo */
var inner = document.getElementById("lazyTest").outerHTML;

});



$(".card-item").slick({
  infinite: true,
  arrows: true,
});

var swiper = new Swiper(".portfolio", {
  slidesPerView: 4,
  centeredSlides: false,
  slidesPerGroupSkip: 1,
  grabCursor: true,
  dots: false,
  loop: true,
  keyboard: {
    enabled: true,
  },
  breakpoints: {
    991: {
      slidesPerView: 4,
      // slidesPerGroup: 1,
    },
    700: {
      slidesPerView: 2,
      // slidesPerGroup: 1,
    },
    400: {
      slidesPerView: 1,
      // slidesPerGroup: 1,
    },
    200: {
      slidesPerView: 1,
      // slidesPerGroup: 1,
    },
  },
  scrollbar: {
    el: ".swiper-scrollbar",
    //   hide: true,
  },
  navigation: {
    nextEl: ".banner-arrows .next",
    prevEl: ".banner-arrows .prev",
  },
});

var swiper = new Swiper(".slider-testimonies", {
  slidesPerView: 3,
  spaceBetween: 30,
  loop: true,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    1200: {
      slidesPerView: 3,
      // slidesPerGroup: 1,
    },
    768: {
      slidesPerView: 2,
      // slidesPerGroup: 1,
    },
    400: {
      slidesPerView: 1,
      // slidesPerGroup: 1,
    },
    200: {
      slidesPerView: 1,
      // slidesPerGroup: 1,
    },
  },
});

var swiper = new Swiper(".locations", {
  slidesPerView: 4,
  spaceBetween: 30,
  freeMode: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    1200: {
      slidesPerView: 4,
      // slidesPerGroup: 1,
    },
    700: {
      slidesPerView: 2,
      // slidesPerGroup: 1,
    },
    400: {
      slidesPerView: 1,
      // slidesPerGroup: 1,
    },
    200: {
      slidesPerView: 1,
      // slidesPerGroup: 1,
    },
  },
});

//   $(".location-info").click(function(e) {
// 	e.preventDefault();
// 	var offset = $(this).offset();
// 	var x = e.clientX - offset.left;
// 	var y = e.clientY - offset.top;
// 	console.log("X:"+x+" Y:"+y);
// })
$(".item-location").on("mousemove", function (e) {
  e.preventDefault();
  var offset = $(this).offset();
  // console.log(offset)
  var x = e.clientX;
  var y = e.clientY;
  // console.log("X:"+x+" Y:"+y);
  $(this).find(".location-info").css({
    left: x,
    top: y,
  });
});

var swiper = new Swiper(".items-brands", {
  slidesPerView: 6,
  spaceBetween: 30,
  freeMode: true,
  loop: true,
  speed: 5000,
  autoplay: {
    delay: 0.5,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    991: {
      slidesPerView: 6,
      // slidesPerGroup: 1,
    },
    700: {
      slidesPerView: 4,
      // slidesPerGroup: 1,
    },
    400: {
      slidesPerView: 2,
      // slidesPerGroup: 1,
    },
    200: {
      slidesPerView: 1,
      // slidesPerGroup: 1,
    },
  },
});

//about//

function sendMail()
{
    $('#send-btn').on('click', function(e)
    {
        e.preventDefault();
        $('#send-btn').html('Enviando...');



        var txtName = $('#txtName').val();
        var txtEmail = $('#txtEmail').val();
        var txtBussines = $('#txtBussines').val();
        var txtWeb = $('#txtWeb').val();
        var txtDescription = $('#txtDescription').val();


        if (txtName === '') {
            $('#send-btn').html('Enviar');
			return showError('Debes agregar un nombre.');
		} 
        else if (txtEmail == '' || !validateEmail(txtEmail)) {
            $('#send-btn').html('Enviar');
			return showError('Debes un ingresar un email válido.');
		} 
        else if (txtBussines === '') {
            $('#send-btn').html('Enviar');
			return showError('Debes agregar nombre de tu empresa');
		}
        else if (txtWeb === '') {
            $('#send-btn').html('Enviar');
			return showError('Debes agregar la web de tu empresa');
		}
        else if (txtDescription === '') {
            $('#send-btn').html('Enviar');
			return showError('Debes agregar una descripción');
		}


        var formData = new FormData();
        formData.append("action", "mypage_send_mail");
        formData.append("txtName", txtName);
        formData.append("txtEmail", txtEmail);
        formData.append("txtBussines", txtBussines);
        formData.append("txtWeb", txtWeb);
		formData.append("txtDescription", txtDescription);



        $.ajax({
            type: "POST",
            url: ajaxUrl,
            dataType: 'text',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data)
            {
                $('#send-btn').addClass('d-none');
                txtName = $('#txtName').val('');
                txtEmail = $('#txtEmail').val('');
                txtBussines = $('#txtBussines').val('');
                txtWeb = $('#txtWeb').val('');
				txtDescription = $('#txtDescription').val('');
                return showSuccess('Solicitud enviada correctamente.');
            }
       });
    });
}

sendMail();

function validateEmail(email) {
	const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
}

function showError(text) {
	var succ = $('.checkoutSuccessMessage');
	var err = $('.checkoutErrorMessage');

	succ.addClass('d-none');
	err.removeClass('d-none');
	err.text(text);
	return false;
}

function showSuccess(text) {
	var succ = $('.checkoutSuccessMessage');
	var err = $('.checkoutErrorMessage');

	err.addClass('d-none');
	succ.removeClass('d-none');
	succ.text(text);
	return false;
}
