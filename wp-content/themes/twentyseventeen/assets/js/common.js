// JavaScript Document

$(function(){
	$('#box_video .flexslider').flexslider({
		animation: "slide",
		animationLoop: true,		
		pagination:true,
		itemWidth: 200,
		itemMargin: 20
	});
	$('#box_slider_banner .flexslider').flexslider({
		animation: "slide",
		animationLoop: true,		
		pagination:true
	});
	$('.hamber').click(function(){
		
		if($('.block_menu').css('display') == 'none'){
			$(this).addClass('active');
			$('.block_menu').slideDown();
		}
		else{
			$('.block_menu').slideUp();
			$('.hamber').removeClass('active');
		}
	});
	
})

$('.two-lines').ellipsis({
    lines: 2,             // force ellipsis after a certain number of lines. Default is 'auto'
    ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
    responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
});

$('.four-lines').ellipsis({
    lines: 4,             // force ellipsis after a certain number of lines. Default is 'auto'
    ellipClass: 'ellip',  // class used for ellipsis wrapper and to namespace ellip line
    responsive: true      // set to true if you want ellipsis to update on window resize. Default is false
});
