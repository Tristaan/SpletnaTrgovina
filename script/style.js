$(document).ready(function(){
	containerAlign();
	$(".second_menu").next('li').css({"padding-top":"10px"});
	$("#nav_button").click(function(){
		$(".first_menu").slideToggle();
		$("#container").css({"margin-top":$("#nav_holder").height()});
	});
	$(".first_menu>li>a,.second_menu>li>a").click(function(){
		if($(this).next().is("ul")){
			$(this).next().slideToggle();
		}
	});

});
$(window).resize(function() {
	containerAlign();
});

var containerAlign = function(){
	if($(window).width()>1000){
		var left=200;
		
	}else{
		var left=0;
	}
	$('#container').css('left',left+'px');
    $('#container').css('width',$(window).width()-left+'px');
}
