<!DOCTYPE html>
<html>
<head>
<?php
//Includes
include('admin/inc/class.db.php');
include('inc/variables.php');
include('inc/convert.php');
?>
<meta charset="UTF-8" />
<meta name="title" content="Dictionar Multimedia IT" />
<meta name="description" content="Dictionar Multimedia IT de specialitate. Gasiti toate informatiile de care aveti nevoie ilustrate in imagini si clipuri explicative." />
<meta name="keywords" content="" />
<meta name="author" content="kmtel.ro" />
<meta name="reply-to" content="office@kmtel.ro" />
<link rel="icon" href="<?php echo ADDRESS; ?>img/favicon.ico" type="image/ico" /> 
<link rel="stylesheet" href="<?php echo ADDRESS; ?>css/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo ADDRESS; ?>css/gallery.css" /> 
<link rel="stylesheet" type="text/css" href="<?php echo ADDRESS; ?>css/vtip.css" /> 
<script type="text/javascript" src="<?php echo ADDRESS; ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo ADDRESS; ?>js/facebook.js"></script>
<script type="text/javascript" src="http://hitx.statistics.ro/hitx2.js"></script>
<script type="text/javascript" src="<?php echo ADDRESS; ?>js/vtip.js"></script>
<script type="text/javascript" src="<?php echo ADDRESS; ?>js/gallery.js"></script>
<script type="text/javascript" src="<?php echo ADDRESS; ?>js/movie.js"></script>
<script type="text/javascript" src="<?php echo ADDRESS; ?>js/search.js"></script>
<script type="text/javascript" src="<?php echo ADDRESS; ?>js/various.js"></script>
<title>Dictionar Multimedia IT</title>
<meta property="og:title" content="Dictionar Multimedia IT" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo CURRENT_ADDRESS; ?>" />
<meta property="og:image" content="http://www.kmtel.ro/img/kmtel.jpg" />
<meta property="og:site_name" content="Dictionar Multimedia IT" />
<meta property="fb:admins" content="100002291701840" />
<meta property="fb:app_id" content="154019231376351"/>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31360503-1']);
  _gaq.push(['_setDomainName', 'kmtel.ro']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="fb-root"></div>
<div id="wrapper">
            <div id="head">
                <div id="logo">
                <a href="http://www.kmtel.ro" title="www.kmtel.ro" target="_blank">
                <img src="<?php echo ADDRESS; ?>img/logo.png" alt="Dictionar Tehnic IT" id="logo_img" /></a>
                </div>
                <div id="search">
				<h1>Dictionar Multimedia IT</h1>
				<input type="text" id="txtSearch" name="txtSearch" value="<?php if(isset($_GET['txtSearch'])){echo $_GET['txtSearch'];}?>" onkeyup="searchSuggest(this);" onmouseover="showSuggest();" autocomplete="off" placeholder="Ce doriti sa cautati ?" />
				<div id="search_suggest"></div>
				<div class="fb-like" id="social" data-href="http://www.facebook.com/kmtel" data-width="350" data-show-faces="false"></div>
				</div>
			</div>

<div id="cont" onmouseover="hideSuggest();">          
<?php

//Aratam articolul
///////////////////////
//Stabilim limba de baza
if (isset($_GET['lang']) && $_GET['lang'] != '') { $lang = $_GET['lang']; } else { $lang = 'ro'; }

//Daca este vreo denumire cautata
if(isset($_GET['denumire']) && $_GET['denumire']!='') {

$denumire = permalink2link($_GET['denumire']);
if ($r = mysql_query("SELECT * FROM definitii_".$lang." WHERE denumire like('%".$denumire."%')")) {

if(mysql_num_rows($r) > 0) {
$row = mysql_fetch_array($r);
$uid = $row['uid'];


//if(isset($_GET['uid']) && $_GET['uid']!='') {
//initializam uid
//$uid = $_GET['uid'];



//FUNCTIONS - get content
function get_definitie($uid,$lang,$column){
	//Table
	$tbl = 'definitii_'.$lang ;
	if ($r=mysql_query("SELECT * FROM ".$tbl." WHERE uid=".$uid)) {
		$row = mysql_fetch_array($r);
		if ($column == 'sumar' || $column == 'definitie') { return txt2html($row[$column]); }
		else { return htmlspecialchars($row[$column]); }
		}//eof if	
}//eof func get_denumire

function check_lang($uid,$lang_comp,$lang){
if ($lang_comp != $lang) {
	$r = mysql_query("SELECT * FROM definitii_".$lang." WHERE uid=".$uid);
	if (mysql_num_rows($r) != 0) { return true; }
	else return false;
	}
}

function set_definitie($uid,$lang) {
	$r = mysql_query("SELECT * FROM definitii_".$lang." WHERE uid=".$uid);
	$row = mysql_fetch_array($r);
	return link2permalink($row['denumire']);
}

function get_definitie_lang($uid,$lang) {
	
	$denumire_ro = set_definitie($uid,'ro');
	$denumire_en = set_definitie($uid,'en');
	$denumire_de = set_definitie($uid,'de');
	$denumire_fr = set_definitie($uid,'fr');
	
	//Language
	$content = '';
	if (check_lang($uid,$lang,'ro')) { $content .= '<a href="'.ADDRESS.'romana/'.$denumire_ro.'/" class="lang" title="Romana"><img src="'.ADDRESS.'img/flag_ro.png" alt="Romana" /></a>'; }
	if (check_lang($uid,$lang,'en')) { $content .= '<a href="'.ADDRESS.'engleza/'.$denumire_en.'/" class="lang" title="Engleza"><img src="'.ADDRESS.'img/flag_en.png" alt="Engleza" /></a>'; }
	if (check_lang($uid,$lang,'de')) { $content .= '<a href="'.ADDRESS.'germana/'.$denumire_de.'/" class="lang" title="Germana"><img src="'.ADDRESS.'img/flag_de.png" alt="Germana" /></a>'; }
	if (check_lang($uid,$lang,'fr')) { $content .= '<a href="'.ADDRESS.'franceza/'.$denumire_fr.'/" class="lang" title="Franceza"><img src="'.ADDRESS.'img/flag_fr.png" alt="Franceza" /></a>'; }
	return $content;
	//
}

function get_definitie_img($uid,$lang,$img_folder_main) {
	//Table
	$tbl = 'definitii_'.$lang;
	$tbl_img = 'imagini';
	//denumire
	$r = mysql_query("SELECT * FROM ".$tbl." WHERE uid=".$uid);
	$row = mysql_fetch_array($r);
	//imagini
	$r_img = mysql_query("SELECT * FROM ".$tbl_img." WHERE uid=".$uid);
	$row_img = mysql_fetch_array($r_img);
	//return
	if(mysql_num_rows($r_img)!=0) { 
	echo '<img src="'.$img_folder_main.$uid.'/'.$row_img['img'].'" alt="'.$row['denumire'].'" />';
	}
}

function get_imagini($uid,$img_folder_main) {
	//Table
	$tbl = 'imagini';
	
if ($r=mysql_query("SELECT * FROM ".$tbl." WHERE uid=".$uid)) {
			while ($row = mysql_fetch_array($r)) {
				//folder-ul
				$folder = $uid;
		
				echo	'<li>';
				echo 		'<a href="'.$img_folder_main.$folder.'/'.$row['img'].'" title="'.$row['img'].'">';
				echo			'<img src="'.$img_folder_main.$folder.'/'.$row['img'].'" class="thumb" alt="'.$row['img'].'" />';
				echo		'</a>';
				echo	'</li>';
			}//eof while
}//eof if
	
}//eof func get_imagini

function get_film($uid,$do) {
	//Table
	$tbl = 'video';
	$first = false;
	
	if($do == 'movie') {
	//SHOW default video
	if ($r = mysql_query("SELECT * FROM ".$tbl." WHERE uid=".$uid)) {
		$row= mysql_fetch_array($r);
		//Arata in functie de tip
		if ($row['tip_film']=='youtube') 	{ $src = 'http://www.youtube.com/embed/'.$row['embed']; 	}
		else if ($row['tip_film']=='vimeo') { $src = 'http://player.vimeo.com/video/'.$row['embed'];	}
		//Arata clipul
		echo '<iframe src="'.$src.'"></iframe>';
		}//eof if
	}	
	else if ($do == 'movie-nav') {
	//SHOW movie navigation
	if ($r = mysql_query("SELECT * FROM ".$tbl." WHERE uid=".$uid)) {
		while ($row= mysql_fetch_array($r)) {
		echo	 '<li>';
		echo		'<a href="javascript:void(0)" onclick="change_movie(\''.$row['embed'].'\',\''.$row['tip_film'].'\');">';
		echo			$row['titlu'];
		echo		'</a>';
		echo	 '</li>';
		}//eof while
	}//eof if
	}
}//eof func get_film

function get_documentatie($uid) {
	//Table
	$tbl = 'documentatie';
	//Get din db
	if ($r = mysql_query("SELECT * FROM ".$tbl." WHERE uid=".$uid)) {
		while ($row = mysql_fetch_array($r)) {
			echo '<li>';
			echo	'<a href="'.$row['link'].'" title="'.$row['title'].'">';
			echo		$row['content'];
			echo	'</a>';
			echo '</li>';
		}//eof while
	}//eof if
}//eof func get_documentatie

function get_bibliografie($uid) { 
	//Table
	$tbl = 'bibliografie';
	if ($r = mysql_query("SELECT * FROM ".$tbl." WHERE uid=".$uid)) {
		while ($row = mysql_fetch_array($r)) {
			echo	'<li>';
			echo		'<a href="'.$row['link'].'" title="'.$row['title'].'">';
			echo			$row['content'];
			echo 		'</a>';
			echo	'</li>';
		}//eof while
	}//eof if
}//eof func get_bibliografie


//GET CONTENT
/////////////

?>
        <!-- NUME, DEFINITIE -->  
    	<div class="element">
       		<div class="title">
				<h1 class="red denumire">
					<?php echo get_definitie($uid,$lang,'denumire'); ?>   
						<a href="javascript:void(0)" title="Ce limba doriti ?" class="tooltip"><img src="<?php echo ADDRESS ?>img/tooltip.png" alt="" /></a>
						<?php echo get_definitie_lang($uid,$lang); ?>
				</h1>
			</div>
					<a href="javascript:void(0)" onclick="toggle_id('definitie');" title="show · hide" class="right arrow_denumire">
					<img src="<?php echo ADDRESS ?>img/arrow-down.png" alt="" /></a>
		  <div class="content" id="sumar">
				<?php get_definitie_img($uid,$lang,$img_folder_main); ?>
				<?php echo get_definitie($uid,$lang,'sumar'); ?> 
		 </div>
           <div class="content" id="definitie"> 
				<?php echo get_definitie($uid,$lang,'definitie'); ?>

				<div class="clear"><br /></div>
				<div class="clear"><br /></div>
				<div align="center">
					<div class="fb-like" data-send="true" data-layout="standard" data-href="<?php echo ADDRESS; ?>" data-width="600" data-show-faces="false"></div>
				<div class="clear"></div>
					<div class="fb-comments" data-href="" data-num-posts="5" data-width="600"></div>
				</div>
            </div>           
        </div>
   
        <!-- IMAGINI -->
		<?php
		$query = "SELECT * FROM imagini WHERE uid=".$uid;
		$r = mysql_query($query);		
		if (mysql_num_rows($r) != 0) { //verificam daca avem ceva
		?>
		<div class="element">
       		 <div class="title">
				<h1>IMAGINI 
					<a href="javascript:void(0)" title="Navigati Galeria Foto"><img src="<?php echo ADDRESS ?>img/tooltip.png" alt="" /></a>
				</h1>
			</div>
					<a href="javascript:void(0)" onclick="toggle_id('imagini');" title="show · hide" class="right arrow_imagini">
					<img src="<?php echo ADDRESS ?>img/arrow-down.png" alt="" /></a>
             <div class="content" id="imagini">
                      <div id="gallery" class="ad-gallery">
                         <div class="ad-image-wrapper"></div>
                         <div class="ad-controls"></div>
                  <div class="ad-nav">
                    <div class="ad-thumbs">
                      <ul class="ad-thumb-list">
                      <?php get_imagini($uid,$img_folder_main); ?> 
                      </ul>
                    </div>
                  </div>
                </div>
             </div>             
        </div>
		
		<!-- VIDEO -->
		<?php
		} //eof imagini
		////////////////
		$query = "SELECT * FROM video WHERE uid=".$uid;
		$r = mysql_query($query);		
		if (mysql_num_rows($r) != 0) { //verificam daca avem ceva
		?>
        <div class="element" id="video-container">
       		 <div class="title">
				<h1>VIDEO 
					<a href="javascript:void(0)" title="Vizionati Videouri Explicative"><img src="<?php echo ADDRESS ?>img/tooltip.png" alt="" /></a>
				</h1>
			</div>
					<a href="javascript:void(0)" onclick="toggle_id('video');" title="show · hide" class="right arrow_video" style="margin-right:21px;"><img src="<?php echo ADDRESS ?>img/arrow-down.png" alt="" /></a>
             <div class="content" id="video">
					<div id="video-main" class="left">
                     <?php get_film($uid,'movie'); ?>
                     </div>
                     <div id="video-nav" class="left">
                     	<h3>NAVIGARE</h3>
                     	<ul>
                        	<?php get_film($uid,'movie-nav'); ?>
                       </ul>
                     </div>
             </div>             
        </div>
        
		<!-- DOCUMENTATIE -->
        <?php
		} //eof video
		////////////////
		$query = "SELECT * FROM documentatie WHERE uid=".$uid;
		$r = mysql_query($query);		
		if (mysql_num_rows($r) != 0) { //verificam daca avem ceva
		?>
        <div class="element">
       		 <div class="title">
				<h1>DOCUMENTATIE 
					<a href="javascript:void(0)" title="Cititi Mai Mult"><img src="<?php echo ADDRESS ?>img/tooltip.png" alt="" /></a>
				</h1>
			</div>
				<a href="javascript:void(0)" onclick="toggle_id('documentatie');" title="show · hide" class="right arrow_documentatie" style="margin-top:-15px;">
             <img src="<?php echo ADDRESS ?>img/arrow-down.png" alt="" /></a>
             <div class="content">
                <ul class="documentatie" id="documentatie">
                   <?php get_documentatie($uid); ?>
                </ul>
			</div>
        </div>
        
		<!-- BIBLIOGRAFIE -->
		<?php
		} //eof documentatie
		////////////////
		$query = "SELECT * FROM bibliografie WHERE uid=".$uid;
		$r = mysql_query($query);		
		if (mysql_num_rows($r) != 0) { //verificam daca avem ceva
		?>
        <div class="element">
       		 <div class="title">
				<h1>BIBLIGORAFIE 
					<a href="javascript:void(0)" title="Aflati Sursa De Inspiratie"><img src="<?php echo ADDRESS ?>img/tooltip.png" alt="" /></a>
				</h1>
			</div>
					<a href="javascript:void(0)" onclick="toggle_id('bibliografie');" title="show · hide" class="right arrow_bibliografie"><img src="<?php echo ADDRESS ?>img/arrow-down.png" alt="" /></a>
             <div class="content" id="bibliografie">
             		<ul class="bibliografie">
                       <?php get_bibliografie($uid); ?> 
              	  </ul>	
             </div>
         </div>
		<?php
		} //eof bibliografie
		////////////////
		?>
 
<?php

		} 
		//eof mysql_num_rows = 1
		else { echo '<div style="text-align:center;">Nu sa gasit nici un rezultat</div>';}
	}
}//eof ISSET UID


//ARATAM RECLAMA DE PE PAGINA
/////////////////////////////
else {

//echo '<h1>RECLAMA</h1>';


}
/////////////////////////////


?>          
</div> 
 <div id="footer">
    <ul class="footer_links left">
		<li><a href="http://www.kmtel.ro/#cine-suntem" 	title="Pagina Oficiala" target="_blank"> 			Cine Suntem ? </a></li><li>&#183;</li>
		<li><a href="http://www.kmtel.ro/#stiri" 		title="Stiri IT" target="_blank">	 		 		Stiri IT&C </a></li><li>&#183;</li>
		<li><a href="http://www.kmtel.ro/template/" 	title="Templateuri Gratuite" target="_blank"> 	 	Template-uri Gratuite</a></li><li>&#183;</li>
		<li><a href="http://www.kmtel.ro/#ip" 			title="Unelte Ip" target="_blank">	 				Unelte TCP/IP </a></li><li>&#183;</li>
		<li><a href="http://www.kmtel.ro/#harta" 		title="Harta Lumii" target="_blank">				Harta Lumii </a></li><li>&#183;</li>
		<li><a href="http://www.kmtel.ro"				 title="Muzica Online" target="_blank">				Muzica Gratuita </a></li><li>&#183;</li>
		<li><a href="http://www.kmtel.ro/parteneri/"	 title="Parteneri / Colaboratori" target="_blank">	Parteneri </a></li>
     </ul>
	<div id="go_up">
     <a href="javascript:void(0);" onclick="go_up('body');" title="Sus">
	 <img src="http://www.kmtel.ro/img/go_up.png" alt="" /></a>
     </div>
	  <div class="none">
		<!-- script statistics.ro : V2 : html  -->
		<li><a href="http://www.wta.ro/10456stats_index" target="_blank" title="Vezi ce trafic avem"><img style="border: 0pt none;" src="http://hitx.statistics.ro/10456/0/-/-/-/a-x/-/1152/864/24/en/27/0/-/301.gif" width="80" height="30" alt="" /></a></li>
		<!-- end of script statistics.ro : V2 : html -->
		</div>
	</div> 
</div>
</body>
</html>