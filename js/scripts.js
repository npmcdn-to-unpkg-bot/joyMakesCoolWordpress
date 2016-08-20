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
});