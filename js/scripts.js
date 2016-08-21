$(function(){
	setInterval(function(){ 
	   // toggle the class every five second
	   $('.contentEvent a').toggleClass('active');  
	   setTimeout(function(){
	     // toggle back after 1 second
	     $('.contentEvent a').toggleClass('active');  
	   },5000);

	},5000);
	console.log("It's working");

	$('.mainHome .eventDetail').on('click', function(){
		$('.featuredEvent').css('top', '0');
	})

	$('.featuredEvent .closeButton').on('click', function(){
		$('.featuredEvent').css('top', '-200vh');
	})

	$('#menu-item-137').on('click', function(){
		$('ul.sub-menu').slideToggle();
	})

	$('.content h2').on('click', function(){
		$('header').css('left', '0');
	})

	$('.headerSlide').on('click', function(){
		$(this).addClass('hide');
		$('.slideBack').removeClass('hide');
		$('header').css('left', '0');
	});

	$('.slideBack').on('click', function() {
		$(this).addClass('hide');
		$('header').css('left', '-550px');
		$('.headerSlide').removeClass('hide');
	});

});