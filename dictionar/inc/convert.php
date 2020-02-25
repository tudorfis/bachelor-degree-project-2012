<?php
function stri_replace( $find, $replace, $string ) {
// Case-insesitive str_replace()
  $parts = explode( strtolower($find), strtolower($string) );
  $pos = 0;
  foreach( $parts as $key=>$part ){
    $parts[ $key ] = substr($string, $pos, strlen($part));
    $pos += strlen($part) + strlen($find);
  }
  return( join( $replace, $parts ) );
}
function txt2html($txt) {
//transformam txt in html
 //scapa de spatii duble
  while( !( strpos($txt,'  ') === FALSE ) ) $txt = str_replace('  ',' ',$txt);
  $txt = str_replace('>',' >',$txt);
  $txt = str_replace('<','< ',$txt);

  //htmlentities
  $txt = str_replace('&quot;','"',$txt);
  $txt = str_replace('&lt;','<',$txt);
  $txt = str_replace('&gt;','>',$txt);
  $txt = str_replace('&amp;','&',$txt);

  //adjustam linkuri sa deschida in pagina noua
  $txt = stri_replace("<a href=\"http://","<a target=\"_blank\" href=\"http://",$txt);
  $txt = stri_replace("<a href=http://","<a target=\"_blank\" href=http://",$txt);
 
  //punem in paragrafe
  $eol = ( strpos($txt,"\r") === FALSE ) ? "\n" : "\r\n";
  $html = '<p>'.str_replace("$eol$eol","</p><p>",$txt).'</p>';
  $html = str_replace("$eol","<br />\n",$html);
  $html = str_replace("</p>","</p>\n\n",$html);
  $html = str_replace("<p></p>","<p>&nbsp;</p>",$html);

  //scapam de <br />
  $wipebr = Array("table","tr","td","blockquote","ul","ol","li");

  for($x = 0; $x < count($wipebr); $x++) {

    $tag = $wipebr[$x];
    $html = stri_replace("<$tag><br />","<$tag>",$html);
    $html = stri_replace("</$tag><br />","</$tag>",$html);

  }
  return $html;
}
//Permalinks
function link2permalink($link){
return str_replace(' ','-',$link);
}
//Permalink
function permalink2link($link){
return str_replace('-',' ',$link);
}
?>