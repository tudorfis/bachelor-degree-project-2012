<?php
include("inc/header.php");
?>
<?php
include("inc/top_header.php");
?>		
<?php
include('inc/class.db.php');
include("inc/includes.php");
?>

<div id="delete">
<h1><img src="img/delete_small.jpg" />  DELETE</h1>

<?php
//SEARCH
//UID - initializam
$uid = '';
$is_uid = false;
if(isset($_GET['uid']) && $_GET['uid'] != '') { $uid = $_GET['uid']; }

//STERGEREA, daca sa dat DA
if(isset($_GET['delete_uid_true'])) { 
				//Sterge ce-o pus in baza de date
				$uid = $_GET['uid'];
				mysql_query("DELETE FROM `definitii_ro` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `definitii_en` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `definitii_fr` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `definitii_de` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `imagini` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `video` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `bibliografie` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `documentatie` WHERE `uid`=	".$uid);
				 header("Location: delete.php");
}
//Revine daca sa dat NU
else if (isset($_GET['delete_uid_false'])) { header("Location: delete.php");}

//Cauta in baza de date articolul
else if (isset($_GET['denumire']) && ($_GET['denumire'] != '')) {
		echo '<div class="search_container">';
		//
		//RO
		// 
		if ($is_uid == false) {
		echo '<div class="gallery" onmouseover="$(\'.gallery a.img\').lightBox();">';
		$query = "SELECT * FROM definitii_ro WHERE denumire LIKE '%".$_GET['denumire']."%'";
		if ($r = mysql_query($query)) {
		if (mysql_num_rows($r) > 1) {
			while ($row=mysql_fetch_array($r)) {
				//Luam imaginea
				if ($r_img = mysql_query("SELECT * FROM imagini WHERE uid=".$row['uid'])) {	$row_img = mysql_fetch_array($r_img); }
				//
				echo '<div class="search_result">
				<p> <a href="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" class="img left" title="'.$row['denumire'].'">
				<img src="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" alt="[NO-IMAGE]" /></a>
				
				<a onclick="openWin(\'delete.php?uid='.$row['uid'].'\',\'1050\',\'350\');">
				<b><img src="img/ro.png" class="flag" /> '.$row['denumire'].'</b></p>
				<p>'.$row['sumar'].'</p>';
				echo '</a></div>';
			}//eof while
			$is_uid = true;
		}//eof >1
		else if (mysql_num_rows($r) == 0) { $is_uid = false;}
		else { $row = mysql_fetch_array($r); $uid = $row['uid']; $is_uid = true;}
		} 
		echo '</div>';
		} //eof if uid 
		//
		//EN
		//
		if ($is_uid == false) {
		echo '<div class="gallery" onmouseover="$(\'.gallery a.img\').lightBox();">';
		$query = "SELECT * FROM definitii_en WHERE denumire LIKE '%".$_GET['denumire']."%'";
		if ($r = mysql_query($query)) {
		if (mysql_num_rows($r) > 1) {
			while ($row=mysql_fetch_array($r)) {
				//Luam imaginea
				if ($r_img = mysql_query("SELECT * FROM imagini WHERE uid=".$row['uid'])) {	$row_img = mysql_fetch_array($r_img); }
				//
				echo '<div class="search_result">
				<p> <a href="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" class="img left" title="'.$row['denumire'].'">
				<img src="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" alt="[NO-IMAGE]" /></a>
				
				<a onclick="openWin(\'delete.php?uid='.$row['uid'].'\',\'1050\',\'350\');">
				<b><img src="img/en.png" class="flag"  /> '.$row['denumire'].'</b></p>
				<p>'.$row['sumar'].'</p>';
				echo '</a></div>';
			}//eof while
			$is_uid = true;
		}//eof >1
		else if (mysql_num_rows($r) == 0) { $is_uid = false;}
		else { $row = mysql_fetch_array($r); $uid = $row['uid']; $is_uid = true;}
		} 
		echo '</div>';
		} //eof if uid//
		//
		//DE
		//
		if ($is_uid == false) {
		echo '<div class="gallery" onmouseover="$(\'.gallery a.img\').lightBox();">';
		$query = "SELECT * FROM definitii_de WHERE denumire LIKE '%".$_GET['denumire']."%'";
		if ($r = mysql_query($query)) {
		if (mysql_num_rows($r) > 1) {
			while ($row=mysql_fetch_array($r)) {
				//Luam imaginea
				if ($r_img = mysql_query("SELECT * FROM imagini WHERE uid=".$row['uid'])) {	$row_img = mysql_fetch_array($r_img); }
				//
				echo '<div class="search_result">
				<p> <a href="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" class="img left" title="'.$row['denumire'].'">
				<img src="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" alt="[NO-IMAGE]" /></a>
				
				<a onclick="openWin(\'delete.php?uid='.$row['uid'].'\',\'1050\',\'350\');">
				<b><img src="img/de.png" class="flag" /> '.$row['denumire'].'</b></p>
				<p>'.$row['sumar'].'</p>';
				echo '</a></div>';
			}//eof while
			$is_uid = true;
		}//eof >1
		else if (mysql_num_rows($r) == 0) { $is_uid = false;}
		else { $row = mysql_fetch_array($r); $uid = $row['uid']; $is_uid = true;}
		} 
		echo '</div>';
		} //eof if uid//
		//FR
		//
		if ($is_uid == false) {
		echo '<div class="gallery" onmouseover="$(\'.gallery a.img\').lightBox();">';
		$query = "SELECT * FROM definitii_fr WHERE denumire LIKE '%".$_GET['denumire']."%'";
		if ($r = mysql_query($query)) {
		if (mysql_num_rows($r) > 1) {
			while ($row=mysql_fetch_array($r)) {
				//Luam imaginea
				if ($r_img = mysql_query("SELECT * FROM imagini WHERE uid=".$row['uid'])) {	$row_img = mysql_fetch_array($r_img); }
				//
				echo '<div class="search_result">
				<p> <a href="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" class="img left" title="'.$row['denumire'].'">
				<img src="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" alt="[NO-IMAGE]" /></a>
				
				<a onclick="openWin(\'delete.php?uid='.$row['uid'].'\',\'1050\',\'350\');">
				<b><img src="img/fr.png" class="flag" /> '.$row['denumire'].'</b></p>
				<p>'.$row['sumar'].'</p>';
				echo '</a></div>';
			}//eof while
			$is_uid = true;
		}//eof >1
		else if (mysql_num_rows($r) == 0) { $is_uid = false;}
		else { $row = mysql_fetch_array($r); $uid = $row['uid']; $is_uid = true;}
		} 
		echo '</div>';
		} //eof if uid
		//
		//Caz ca nu sa gasit nimic
		if ($is_uid == false) {
		echo '<br /><h1> Nu sa gasit nici un rezultat, mai cautati </h1>';
		}
		//
		//
		//
		echo '</div>';
		echo '<div class="clear"></div>';
}//eof search container
?>

<?php
//Intreaba daca se doreste stergerea
if(isset($uid) && ($uid != '')) { 

echo '<form action="" method="get">
	  <input type="hidden" name="uid" value="'.$uid.'" />
	  <br />
	  <h3> Sunteti siguri ca doriti sa stergeti elementul <b>'.$uid.'</b> ? </h3>
	  <input type="submit" name="delete_uid_true" value="DA" /> 
	  <input type="submit" name="delete_uid_false" value="NU" />
	  </form>';

//
}

//Formular pentru cautare elemente
else {
echo '<form action="" method="get">
		<p> Introduceti va rog denumirea sau codul unic<br />
		al articolului care doriti sa-l <b>STERGETI</b></p>
		<input type="text" name="denumire" value="'; if(isset($_GET['denumire'])) {echo $_GET['denumire'];}; echo '" placeholder="SEARCH .." /><br />
		<input type="text" name="uid" value="" placeholder="UID .." />
		<input type="submit" class="uid" value="&#187;" />
		</form>';
}
?>

</div>	
	
<?php
include('inc/footer.php');
?>