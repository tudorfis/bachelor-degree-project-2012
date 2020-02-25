//Go up button
function go_up(){
jQuery('html, body').animate({scrollTop:0}, 'slow');
}

//Check radio boxes
function check(id) {
if (document.getElementById(id).checked==true) {document.getElementById(id).checked=false;}
else if (document.getElementById(id).checked==false) {document.getElementById(id).checked=true;}
}


//Add content - put_video
function put_video() {
	nr = $('#video_nr').val();
	src = '';
	for (i=1;i<=nr;i++) {
	src = src+'<input type="text" name="video_titlu_'+i+'" placeholder="Titlu .." /><br /><input type="text" name="video_embed_'+i+'" class="video_embed" placeholder="Embed .." /><select name="video_tip_'+i+'"><option value="youtube">youtube</option><option value="vimeo">vimeo</option>	</select><br />';}
	$('.video').html(src);
}

//Add content - put_bibliografie
function put_bibliografie() {
	nr = $('#bibliografie_nr').val();
	src = '';
	for (i=1;i<=nr;i++) {
	src = src+'<input type="text" name="bibliografie_link_'+i+'" placeholder="Link .." /><br /><input type="text" name="bibliografie_content_'+i+'" placeholder="Content .." /><br /><input type="text" name="bibliografie_title_'+i+'" placeholder="Title .." /><br /><hr />';}
	$('.bibliografie').html(src);
}

//Add content - put_documentatie
function put_documentatie() {
	nr = $('#documentatie_nr').val();
	src = '';
	for (i=1;i<=nr;i++) {
	src = src+'<input type="text" name="documentatie_link_'+i+'" placeholder="Link .." /><br /><input type="text" name="documentatie_content_'+i+'" placeholder="Content .." /><br /><input type="text" name="documentatie_title_'+i+'" placeholder="Title .." /><br /><hr />';}
	$('.documentatie').html(src);
}


//Check all boxes in img_delete - delete.php
function checkAll(){
for (i = 1; i <= document.getElementById('nr_img').value; i++)
	{ 
	document.getElementById('img_'+i).checked = true ;
	document.getElementById('img_'+i).value = 'checked' ;
	}
}

//Uncheck all
function uncheckAll(){
for (i = 1; i <= document.getElementById('nr_img').value; i++)
	{ 
	document.getElementById('img_'+i).checked = false ;
	document.getElementById('img_'+i).value = 'not' ; 
	}
}

//Check box
function check_box(id) {
if (document.getElementById(id).checked==true) {
document.getElementById(id).checked=false;
document.getElementById(id).value='not';
}
else if (document.getElementById(id).checked==false) {
document.getElementById(id).checked=true;
document.getElementById(id).value='checked';
}
}


//Open window
function openWin(url,width,height)
{
myWindow=window.open(url,"_blank","resizable=yes, scrollbars=yes, width="+width+", height="+height);
myWindow.focus();
}







