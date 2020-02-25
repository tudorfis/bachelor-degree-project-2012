//VARIOUS FUNCTIONS

//Go Up button
function go_up(id){
if (id == 'body') jQuery('html, body').animate({scrollTop:0}, 'slow');
else jQuery('#'+id).animate({scrollTop:0}, 'slow');
}


// AFISAREA BOX-urilor din PAGINA
////////////////////////////////////

//Set Cookie
function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}
//Get Cookie
function getCookie(c_name)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
  {
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}
//Delete Cookie
function delCookie(name) {
document.cookie = name +
'=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
} 







// FOCUS FUNCT
function hideSuggest(){
$('#search_suggest').css('max-height','0px'); 
}
function showSuggest(){
$('#search_suggest').css('max-height','300px');
}

//eof FOCUS

//Cand s-a incarcat documentul
$(document).ready(function() {

//AFISAREA ELEMENTELOR
///////////////////////////

//DEFINITIE
definitie = getCookie('definitie');
//setam din start sa arate
if (definitie != 'true' && definitie != 'false') { setCookie('definitie','true',365); }
definitie = getCookie('definitie');
if (definitie == 'true') { 			$('#definitie').css('display','block'); }
else if (definitie == 'false') {    $('#definitie').css('display','none'); }

//IMAGINI
imagini = getCookie('imagini');
//setam din start sa arate
if (imagini != 'true' && imagini != 'false') { setCookie('imagini','true',365); }
imagini = getCookie('imagini');
if (imagini == 'true') { 			$('#imagini').css('display','block'); }
else if (imagini == 'false') {    $('#imagini').css('display','none'); }

//VIDEO
video = getCookie('video');
//setam din start sa arate
if (video != 'true' && video != 'false') { setCookie('video','true',365); }
video = getCookie('video');
if (video == 'true') { 			$('#video').css('display','block');$('#'+MCid).css('min-height','400px'); }
else if (video == 'false') {    $('#video').css('display','none');$('#'+MCid).css('min-height','0px'); }

//BIBLIOGRAFIE
bibliografie = getCookie('bibliografie');
//setam din start sa arate
if (bibliografie != 'true' && bibliografie != 'false') { setCookie('bibliografie','true',365); }
bibliografie = getCookie('bibliografie');
if (bibliografie == 'true') { 			$('#bibliografie').css('display','block'); }
else if (bibliografie == 'false') {    $('#bibliografie').css('display','none'); }

//DOCUMENTATIE
documentatie = getCookie('documentatie');
//setam din start sa arate
if (documentatie != 'true' && documentatie != 'false') { setCookie('documentatie','true',365); }
documentatie = getCookie('documentatie');
if (documentatie == 'true') { 			$('#documentatie').css('display','block'); }
else if (documentatie == 'false') {    $('#documentatie').css('display','none'); }

});




//TOOGLE ID
function toggle_id(id){
switch (id) {
case 'definitie': definitie = getCookie('definitie'); 
				  if (definitie == 'true') 	{ $('#'+id).hide('medium'); delCookie('definitie'); setCookie('definitie','false',365);}
				  else if (definitie == 'false') 	{ $('#'+id).show('medium'); delCookie('definitie'); setCookie('definitie','true',365);}
				  break;
				  
case 'imagini':    imagini = getCookie('imagini'); 
				  if (imagini == 'true') 	{ $('#'+id).hide('medium'); delCookie('imagini'); setCookie('imagini','false',365);}
				  else if (imagini == 'false') 	{ $('#'+id).show('medium'); delCookie('imagini'); setCookie('imagini','true',365);}
				  break;

case 'video':	video = getCookie('video'); 
				if (video == 'true') 	{ $('#'+id).hide('video'); delCookie('video'); setCookie('video','false',365);$('#'+MCid).css('min-height','0px');}
				else if (video == 'false') 	{ $('#'+id).show('video'); delCookie('video'); setCookie('video','true',365);$('#'+MCid).css('min-height','400px');}
				break;
				
case 'bibliografie':    bibliografie = getCookie('bibliografie'); 
				  if (bibliografie == 'true') 	{ $('#'+id).hide('medium'); delCookie('bibliografie'); setCookie('bibliografie','false',365);}
				  else if (bibliografie == 'false') 	{ $('#'+id).show('medium'); delCookie('bibliografie'); setCookie('bibliografie','true',365);}
				  break;
				  
case 'documentatie':    documentatie = getCookie('documentatie'); 
				  if (documentatie == 'true') 	{ $('#'+id).hide('medium'); delCookie('documentatie'); setCookie('documentatie','false',365);}
				  else if (documentatie == 'false') 	{ $('#'+id).show('medium'); delCookie('documentatie'); setCookie('documentatie','true',365);}
				  break;

}
}

