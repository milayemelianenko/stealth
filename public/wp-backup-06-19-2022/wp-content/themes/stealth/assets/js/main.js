$(document).ready(function(){
	$(document).on('focus', '.inputbox', function(){
		$(this).parents('.contact-row').addClass('active');
	});

	$(document).on('blur', '.inputbox', function(){
		if($(this).val().length == ''){
			$(this).parents('.contact-row').removeClass('active');
		}else{
			$(this).parents('.contact-row').addClass('active');
		}
	});

	$(document).on('click', '.cl-more-cta', function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active').text('see more');
			$('.cli-hidden').removeClass('active');
		}else{
			$(this).addClass('active').text('see less');
			$('.cli-hidden').addClass('active');
		}
	})

	if($('.home-team-slider').length){
		$('.home-team-slider').slick({
			dots: false,
			infinite: true,
			arrows: false,
			speed: 400,
			slidesToShow: 3,
			slidesToScroll: 1,
			centerMode: true,
			variableWidth: true,
			lazyLoad: 'progressive',
			autoplay: true,
	  		autoplaySpeed: 3000,
	  		responsive: [
			    {
			      	breakpoint: 1024,
			      	settings: {
				        slidesToShow: 2,
				        slidesToScroll: 1
			      	}
			    },
			    {
			      	breakpoint: 599,
			      	settings: {
				        slidesToShow: 1,
				        slidesToScroll: 1
			      	}
			    }
			]
		});
	}

	if($('.home-case-studies-slider').length){
		$('.home-case-studies-slider').slick({
			dots: false,
			fade: true,
			infinite: true,
			arrows: false,
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
	  		autoplaySpeed: 3000,
	  		pauseOnHover: false
		});
	}

	if($('.testimonials-slider').length){
		$('.testimonials-slider').slick({
			dots: false,
			fade: true,
			infinite: true,
			arrows: false,
			speed: 500,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplay: true,
	  		autoplaySpeed: 3000,
	  		pauseOnHover: false
		});
	}

	AOS.init({
        once: true,
        easing: 'ease-out-back',
        duration: 1200
  	});
});

$(window).scroll(function(){
	if($(this).scrollTop() > 50){
		$('body').addClass('fixed-body');
	}else{
		$('body').removeClass('fixed-body');
	}
});