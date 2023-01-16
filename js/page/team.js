$(window).ready(function (){
	var outerWidth = $(window).width(),
		article = $('.sub_08 .artWrap .article');
	
	article.css({marginBottom: 0});
	article.find('.panelWrap').hide();
	article.css({marginTop: '4%'});
	
	if(outerWidth > 1000) {
		var i = 0;
		article.css({width: '23%'});
		while(i < 100){
			i++;
			article.eq(i).css({marginTop: '4%'});
		}
	} else if(outerWidth < 1000){
		var i = 0;
		article.css({width: '48%'});
		while(i < 100){
			i++;
			article.eq(i).css({marginTop: '4%'});
		}
	}
});

$(window).resize(function (){
	var outerWidth = $(window).width(),
		article = $('.sub_08 .artWrap .article');
		
	article.css({marginBottom: 0});
	article.find('.panelWrap').hide();
	article.css({marginTop: '4%'});
	
	if(outerWidth > 1000) {
		var i = 0;
		article.css({width: '23%'});
		while(i < 100){
			i++;
			article.eq(i).css({marginTop: '4%'});
		}
	} else if(outerWidth < 1000){
		var i = 0;
		article.css({width: '48%'});
		while(i < 100){
			i++;
			article.eq(i).css({marginTop: '4%'});
		}
	}
	$('.sub_08 .artWrap .article a .back_img').each(function (){
		var img = $(this).attr("style");
		if(img == "_opacity"){
			$(this).attr("style",$(this).attr("style").replace(/_opacity\.jpg/, '.jpg'));
		} else { 
			$(this).attr("style",$(this).attr("style").replace(/_opacity\.jpg/, '.jpg'));
		};
	});
	$('.sub_08 .artWrap .article a .back_img').removeClass('on');
	$('.sub_08 .artWrap .article a .back_img').removeClass('off');
});

function openPanel(panelId){
	var article = $('.sub_08 .artWrap .article');
		
	article.css({marginBottom: 0});
	article.find('.panelWrap').hide();
}

$('.sub_08 .artWrap .article a').click(function (){
	var outerWidth = $(window).width(),
		artWrap = $(this).parents(".artWrap"),
		article = artWrap.children('.article'),
		index = $(this).parent().index(),
		panel_h = $(this).next('.panelWrap').outerHeight(),
		bro_img = $('.sub_08 .artWrap .article a').find('.back_img');
		
	bro_img.each(function (){
		$(this).addClass('off').removeClass('on');
	});
	$(this).find('.back_img').removeClass('off').addClass('on');
	
	$(this).find('.mask60').fadeOut();
	$('.mask60').not($(this).find('.mask60')).fadeIn(200);
	
	if(outerWidth > 1000){
		if(index <= 3){
			var i = -1;
			while(i < 3){
				i++;
				article.eq(i).css({marginBottom: panel_h});
			}
		} else if (index > 3, index <= 7) {
			var i = 3;
			while(i < 7){
				i++;
				article.eq(i).css({marginBottom: panel_h});
			}
		} else if (index > 7, index <= 11) {
			var i = 7;
			while(i < 11){
				i++;
				article.eq(i).css({marginBottom: panel_h});
			}
		}
	} else if (outerWidth < 1000) {
		if(index <= 1){
			var i = -1;
			while(i < 1){
				i++;
				article.eq(i).css({marginBottom: panel_h});
			}
		} else if (index > 1, index <= 3) {
			var i = 1;
			while(i < 3){
				i++;
				article.eq(i).css({marginBottom: panel_h});
			}
		} else if (index > 3, index <= 5) {
			var i = 3;
			while(i < 5){
				i++;
				article.eq(i).css({marginBottom: panel_h});
			}
		} else if (index > 5, index <= 7) {
			var i = 5;
			while(i < 7){
				i++;
				article.eq(i).css({marginBottom: panel_h});
			}
		} else if (index > 7, index <= 9) {
			var i = 7;
			while(i < 9){
				i++;
				article.eq(i).css({marginBottom: panel_h});
			}
		}
	}
	$(this).next('.panelWrap').stop().slideDown();
})

function closepanel(){
	var article = $('.sub_08 .artWrap .article');
	article.find('.panelWrap').hide();
	article.css({marginBottom: 0});
	$('.sub_08 .artWrap .article a .back_img').each(function (){
		var img = $(this).attr("style");
		if(img == "_opacity"){
			$(this).attr("style",$(this).attr("style").replace(/_opacity\.jpg/, '.jpg'));
		} else { 
			$(this).attr("style",$(this).attr("style").replace(/_opacity\.jpg/, '.jpg'));
		};
	});
}
