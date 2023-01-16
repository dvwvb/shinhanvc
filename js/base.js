 

if (matchMedia("screen and (max-width: 1200px)").matches) {
	$(document).ready(function(){
		$("#header .gnb > ul > li").click(function(){
			$("#header .gnb > ul > li").removeClass('open');
			$("#header .gnb > ul > li ul").slideUp();
			if(!$(this).find('ul').is(":visible")){
				$(this).find('ul').slideDown();
				$(this).addClass('open');
			}
		});


		$("#header .gnb-btn").click(function(){
			$("#header .gnb").stop().toggleClass('active');
			$(this).stop().toggleClass('close');
		})
	})
}

$("#gotoTop").on("click", function() {
	$("html, body").animate({scrollTop:0}, '0');
	return false;
});

function familySite(){
	$('.ft-family ul').stop().slideToggle();
	$('.ft-family').toggleClass('active');
}
