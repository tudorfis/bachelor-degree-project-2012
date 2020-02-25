/** Vertigo Tip by www.vertigo-project.com Requires jQuery */
this.vtip=function(){this.xOffset=-17;this.yOffset=-40;
	$("a[title!=''],.vtip,span[title!=''],img[title!='']").unbind().hover(function(a){this.t=this.title;this.title="";this.top=(a.pageY-yOffset);this.left=(a.pageX+xOffset);
	$("body").append('<div id="vtip"><span id="vtipArrow" />'+this.t+"</div>");
	$("#vtip").css("top",this.top+"px").css("left",this.left+"px").fadeIn("slow")},function(){this.title=this.t;$("#vtip").fadeOut("slow").remove()}).mousemove(function(a){this.top=(a.pageY+yOffset);this.left=(a.pageX+xOffset);$("#vtip").css("top",this.top+"px").css("left",this.left+"px")})};
jQuery(document).ready(function(a){vtip()});