$(function() {

//initialise aos
AOS.init();

/**
 *  validate
 */

// Form
var contactForm = function() {
	if ($('#contactForm').length > 0 ) {
		$( "#contactForm" ).validate( {
			rules: {
				name: "required",
				subject: "required",
				email: {
					required: true,
					email: true
				},
				message: {
					required: true,
					minlength: 5
				}
			},
			messages: {
				name: "Please enter your name",
				subject: "Please enter your subject",
				email: "Please enter a valid email address",
				message: "Please enter a message"
			},
			/* submit via ajax */
			
			submitHandler: function(form) {		
				var $submit = $('.submitting'),
					$contactForm = "http://127.0.0.1:8000/contact" + '/' + $('#name').val() + '/' +  $('#email').val() + '/' + $('#subject').val() + '/' + $('#message').val(),
					waitText = 'Submitting...';

				$.ajax({   	
				  type: "GET",
				  url: $contactForm,
				  data: $(form).serialize(),

				  beforeSend: function() { 
					  $submit.css('display', 'block').text(waitText);
				  },

				  success: function(data) {

					console.log(data);

				   if (data.message == 'OK') {
					   $('#form-message-warning').hide();
						setTimeout(function(){
						   $('#contactForm').fadeOut();
					   }, 1000);
						setTimeout(function(){
						   $('#form-message-success').fadeIn();   
					   }, 1400);

					   // setTimeout(function(){
						  //  $('#form-message-success').fadeOut();   
					   // }, 8000);

					   setTimeout(function(){
						   $submit.css('display', 'none').text(waitText);  
					   }, 1400);

			 //       	setTimeout(function(){
			 //       		$( '#contactForm' ).each(function(){
										//     this.reset();
										// });
			 //       	}, 1400);
					   
					} else {
					   $('#form-message-warning').html(data.message);
						$('#form-message-warning').fadeIn();
						$submit.css('display', 'none');
					} 
					
				  },
				  error: function(data) {
					  $('#form-message-warning').html("Something went wrong. Please try again.");
					 $('#form-message-warning').fadeIn();
					 $submit.css('display', 'none');
				  }
			  });    		
			  } // end submitHandler

		});
	}
};
contactForm();


/**
* carousel  from colorib snippets
*/

if ( $('.owl-2').length > 0 ) {
	$('.owl-2').owlCarousel({
		center: false,
		items: 1,
		loop: true,
		stagePadding: 0,
		margin: 20,
		smartSpeed: 1000,
		autoplay: true,
		nav: true,
		dots: true,
		pauseOnHover: false,
		responsive:{
			600:{
				margin: 20,
				nav: true,
			  items: 2
			},
			1000:{
				margin: 20,
				stagePadding: 0,
				nav: true,
			  items: 3
			}
		}
	});            
}



/*** 
 * 
 * Sidebar from colorib snippets
*/

  var siteSticky = function() {
		$(".js-sticky-header").sticky({topSpacing:0});
	};
	siteSticky();

	var siteMenuClone = function() {

		$('.js-clone-nav').each(function() {
			var $this = $(this);
			$this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-menu-body');
		});


		setTimeout(function() {
			
			var counter = 0;
      $('.site-mobile-menu .has-children').each(function(){
        var $this = $(this);
        
        $this.prepend('<span class="arrow-collapse collapsed">');

        $this.find('.arrow-collapse').attr({
          'data-toggle' : 'collapse',
          'data-target' : '#collapseItem' + counter,
        });

        $this.find('> ul').attr({
          'class' : 'collapse',
          'id' : 'collapseItem' + counter,
        });

        counter++;

      });

    }, 1000);

		$('body').on('click', '.arrow-collapse', function(e) {
      var $this = $(this);
      if ( $this.closest('li').find('.collapse').hasClass('show') ) {
        $this.removeClass('active');
      } else {
        $this.addClass('active');
      }
      e.preventDefault();  
      
    });

		$(window).resize(function() {
			var $this = $(this),
				w = $this.width();

			if ( w > 768 ) {
				if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
			}
		})

		$('body').on('click', '.js-menu-toggle', function(e) {
			var $this = $(this);
			e.preventDefault();

			if ( $('body').hasClass('offcanvas-menu') ) {
				$('body').removeClass('offcanvas-menu');
				$this.removeClass('active');
			} else {
				$('body').addClass('offcanvas-menu');
				$this.addClass('active');
			}
		}) 

		// click outisde offcanvas
		$(document).mouseup(function(e) {
	    var container = $(".site-mobile-menu");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {
	      if ( $('body').hasClass('offcanvas-menu') ) {
					$('body').removeClass('offcanvas-menu');
				}
	    }
		});
	}; 
	siteMenuClone();

});