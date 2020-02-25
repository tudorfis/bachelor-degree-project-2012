<?php

include('../admin/inc/class.db.php');
include('../admin/inc/includes.php');
include('../inc/variables.php');

//Permalinks
function link2permalink($link){
return str_replace(' ','-',$link);
}
//Permalinks
function permalink2link($link){
return str_replace('-',' ',$link);
}

//Arata fiecare item
function show_item($uid,$item,$lang) {
$denumire = link2permalink($item['denumire']);
switch ($lang) {
case 'ro': $lang_perma = 'romana';break;
case 'en': $lang_perma = 'engleza';break;
case 'de': $lang_perma = 'germana';break;
case 'fr': $lang_perma = 'franceza';break;
}//eof switch
echo '<li><a href="'.ADDRESS.$lang_perma.'/'.$denumire.'/">
				   <img src="'.ADDRESS.'img/flag_'.$lang.'.png" />'.$item['denumire'].'
				</a>
		</li>';
}

//Arata itemurile in celelalte limbi
function show_subitem($uid,$lang,$comp_lang) {
if($lang != $comp_lang){
		if($r=mysql_query("SELECT * FROM definitii_".$comp_lang." WHERE uid=".$uid)) {
			if(mysql_num_rows($r)==1) { 
				$row = mysql_fetch_array($r);
				echo '<div class="subitem">';
				show_item($uid,$row,$comp_lang);
				echo '</div>';
			}//eof if
		}//eof if
	} //eof if lang
}

//Extragem rezultatele
function get_results($search,$lang) {
		$tbl = 'definitii_'.$lang;
		//Get every page title for the site.
		if($suggest_query = mysql_query("SELECT * FROM ".$tbl." WHERE denumire like('".$search."%') ORDER BY denumire")) {
	if (mysql_num_rows($suggest_query) != 0) {
	//Afisam lista
	echo '<ul>';
		while($row = mysql_fetch_array($suggest_query)) {
		//Return each page title seperated by a newline.

		echo '<li class="break">&nbsp;</li>';		
		//SHOW ITEM
		echo '<div class="item">';
		 show_item($row['uid'],$row,$lang);
		echo '</div>';
		 //RO
		show_subitem($row['uid'],$lang,'ro');
		//EN
		show_subitem($row['uid'],$lang,'en');
		//DE
		show_subitem($row['uid'],$lang,'de');
		//FR
		show_subitem($row['uid'],$lang,'fr');
		echo '<li class="break">&nbsp;</li>';
		
		}//eof while
	//eof afisam lista
	echo '</ul>';
	//
	return true;
	}//eof mysql_num_rows($suggest_query)
	else { return false; }
}//eof if

} //eof get_results
	
//Search SUGGEST
function search($search) {
$search = addslashes($search);
	
	//Dam rezultatele
	if(!get_results($search,'ro')){
		if(!get_results($search,'en')) {
			if(!get_results($search,'de')) {
				if(!get_results($search,'fr')) {
					echo '<div class="no_result">Nu sa gasit nici un rezultat</div>'; 
				}
			}
		}
	}

}//eof search


///Make sure that a value was sent.
if (isset($_GET['search']) && $_GET['search'] != '') {

	search($_GET['search']);

}//eof isset search
?>