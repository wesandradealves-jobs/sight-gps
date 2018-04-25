jQuery(document).ready(function(){
  	$('.flexslider').flexslider({
    	animation: "slide",
    	controlNav: false
  	});
  	$('.noticias').flexslider({
	   	animation: "slide",
	   	directionNav: true,
	   	controlNav:false,
	    animationLoop: false,
	    itemWidth: 179.6,
	    itemMargin: 0,
	    minItems: 1,
	    maxItems: 3
  	});
  	$("#menu-header li").addClass("flex16");
	$( "aside nav a" ).click(function() {
		var data_value = $(this).attr("data-value");
		var data_type = $(this).attr("data-type");
		$(".filtro").hide();
		$(".filtro h4,.filtro ul").addClass("hide");
		$("#breadcrumbs li:last-child").text($(this).attr("title"));
		if(data_type=="filtro_por_categoria"){
			$("#filtro_por_categoria.filtro").show();
			$("#filtro_por_categoria.filtro h4."+data_value).removeClass("hide");
			$("#filtro_por_categoria.filtro ul."+data_value).removeClass("hide");
		} else if(data_type=="filtro_por_marca"){
			$("#filtro_por_marca.filtro").show();
			$("#filtro_por_marca.filtro h4."+data_value).removeClass("hide");
			$("#filtro_por_marca.filtro ul."+data_value).removeClass("hide");
		} else if(data_value=="todos"){
			$("#filtro_por_categoria.filtro").show();
			$("#filtro_por_categoria.filtro h4").removeClass("hide");
			$("#filtro_por_categoria.filtro ul").removeClass("hide");
		} else if(data_value=="marcas"){
			$("#filtro_por_marca.filtro").show();
			$("#filtro_por_marca.filtro h4").removeClass("hide");
			$("#filtro_por_marca.filtro ul").removeClass("hide");
		} else if(data_value=="destaques"){
			$("#filtro_por_destaque.filtro").show();
			$("#filtro_por_destaque.filtro h4").removeClass("hide");
			$("#filtro_por_destaque.filtro ul").removeClass("hide");
		}
	});
	$( "[title='Fechar']" ).click(function() {
		$("#newsletter").hide();
	});
	$( "[title='Assine nossa newsletter']" ).click(function() {
		$("#newsletter").show();
	});
	$(".page_id_38 main aside nav > ul li:first-child").click(function() {
		$(this).parent().toggleClass("on");
	});
	$('#menu-header').on( "click", function() {
		if ($(window).width() <= 768) {
			$(this).toggleClass("on");
			$("#menuMobile").toggleClass("on");
		}
	});
	$(window).resize(function(){
		if ($(window).width() > 768) {
			$(".on").removeClass("on");
		}
	});	
	var lastScrollTop = 0;
	$(window).scroll(function(event){
		var st = $(this).scrollTop();
		if (st > lastScrollTop){
			$(".on").removeClass("on");
		}
		lastScrollTop = st;
	});
	$("aside ul li.has-gnss").wrapAll('<li class="has-wrap"><ul>');
	$("aside .has-wrap").prepend("<a href='javascript:void(0)' data-type='expand'>GNSS</a>");
	$( ".has-wrap" ).click(function() {
		$(this).find("ul").toggle();
		$(this).find("a[data-type='expand']").toggleClass("active");
	});
});
