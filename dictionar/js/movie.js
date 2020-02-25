//Movie select script
Mid = "video-main";
MCid = "video-container";
Cid = "video";
LoadingImg = "http://localhost/dictionar/img/loading.gif";

//Loading image
function loading_img(){
return '<div class="loading"><img src="'+LoadingImg+'" alt="" class="loading" align="middle" /></div>';
}

//Return source of embeded youtube video
function youtube_video(src) {
	return '<iframe src="http://www.youtube.com/embed/'+src+'"></iframe>';
}

//Return source of embeded vimeo video
function vimeo_video(src) {
	 return '<iframe src="http://player.vimeo.com/video/'+src+'"></iframe>';
}

//Change curent movie
function change_movie(src,type){ 
$('#'+Mid).html(loading_img());
if (type=='youtube') { $('#'+Mid).html(youtube_video(src)); }
else if (type=='vimeo') { $('#'+Mid).html(vimeo_video(src)); } 
}