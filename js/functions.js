$(document).ready(function(){
	$("#inputConteudo").focus();
	
	$(".menu-item-side").click(function(event) {
	  	event.preventDefault();
	  	console.log('1');
	  	var ul = $(this).parent('li').next('ul');
	  	if ($(this).closest('.item').hasClass('menu-active-side')) {
	   		$('.menu-active-side').removeClass('menu-active-side');
	   		ul.removeClass('menu-open-side');
	   		ul.addClass('menu-close-side');
	  	} else {
	   		$(this).closest('.item').addClass('menu-active-side');
	   		ul.removeClass('menu-close-side');
	   		ul.addClass('menu-open-side');
	  	}
	});
});

function show(){
	$("#arquivos").show();
}
function hide(){
	$("#arquivos").hide();
}

function perfil(){
	if($(".perfil-lateral").is(':visible')){
		$(".perfil-lateral").hide();
	}else{
		$(".perfil-lateral").show();
	}

	$('.perfil-lateral').focus();
}