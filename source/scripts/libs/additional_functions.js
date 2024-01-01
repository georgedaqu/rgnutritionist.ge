$(document).ready(function(){
	// Outside click
	$(document).click(function(e){
		if(!$(e.target).closest(".element").length > 0){
			// Function
		}
	});
	// Share popup
	$("div.share ul li a, div.share_modal ul li a").click(function(e){
		e.preventDefault();
		window.open($(this).attr('href'), 'ShareWindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 275) + ', left=' + ($(window).width() / 2 - 225) + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
		return false;
	});
	// SVG auto set size
	if($("svg:not(.nosvg)").lengh){
		$("svg:not(.nosvg)").each(function(){
			var krki = this.getBBox();
			var sigane = krki.width;
			var simagle = krki.height;
			$(this).css({
				width: sigane + "px",
				height: simagle + "px"
			});
		});
	}
	// SVG stroke animation
	$("svg.dashed path").each(function(){
		var sigrdze = this.getTotalLength();
		this.style.strokeDasharray = [sigrdze, sigrdze].join(' ');
		this.style.strokeDashoffset = sigrdze;
	});
	$("div.modal_search div.close, div.modal_search div.search_wrap div.search_overlay").click(function(){
		$("div.modal_search").fadeOut(200);
	});
});