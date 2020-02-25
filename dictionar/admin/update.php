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

<?php
//SEARCH
//Preluma uid
$uid = ''; $is_uid = false;
if(isset($_GET['uid']) && $_GET['uid'] != '') { $uid = $_GET['uid']; }

//Cauta in baza de date articolul 
//Search container - afiseaza toate rezultatele gasite
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
				
				<a href="?uid='.$row['uid'].'">
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
				
				<a href="?uid='.$row['uid'].'">
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
				
				<a href="?uid='.$row['uid'].'">
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
				
				<a href="?uid='.$row['uid'].'">
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
 }
//eof search container
?>

<div id="update">
<!-- PANOU top update -->
<div><h1><img src="img/update_small.jpg" /> UPDATE</h1> <br />
			<a href="update.php?uid=<?php echo $uid; ?>" class="submit">REFRESH</a>
			<a href="update.php?uid=<?php echo $uid-1; ?>" class="submit">PREC.</a>
			<a href="update.php?uid=<?php echo $uid+1; ?>" class="submit">URM.</a>
			<a href="update.php" class="submit"> BACK </a>
<hr />
</div>


<?php
//FORMULAR pt update
if(isset($uid) && ($uid != '')) { 

	//Formular update
	//Extragerea din baza de date
	//definitii_ro
	$query = "SELECT * FROM definitii_ro WHERE uid=".$uid;
	if($r = mysql_query($query)) {	$definitii_ro = mysql_fetch_array($r); } else { echo mysql_error(); }
	
	//definitii_en
	$query = "SELECT * FROM definitii_en WHERE uid=".$uid;
	if($r = mysql_query($query)) {	$definitii_en = mysql_fetch_array($r); } else { echo mysql_error(); }
	
	//definitii_ro
	$query = "SELECT * FROM definitii_de WHERE uid=".$uid;
	if($r = mysql_query($query)) {	$definitii_de = mysql_fetch_array($r); } else { echo mysql_error(); }
	
	//definitii_ro
	$query = "SELECT * FROM definitii_fr WHERE uid=".$uid;
	if($r = mysql_query($query)) {	$definitii_fr = mysql_fetch_array($r); } else { echo mysql_error(); }
	

	?>
	<form action="" method="post" enctype="multipart/form-data">
	<input type="hidden" name="uid" value="'.$uid.'" />
	
	<table>
		<tr>
			<td><img src="img/ro.png" /> Romana</td>
			<td><img src="img/en.png" /> Engleza</td>
			<td><img src="img/de.png" /> Germana</td>
			<td><img src="img/fr.png" /> Franceza</td>
		</tr>
		<tr>
			<td><input type="text" name="denumire_ro" placeholder="Denumire ..." value="<?php if(isset($_POST['denumire_ro'])){echo $_POST['denumire_ro'];} else { echo $definitii_ro['denumire']; }?>" /> </td>
			<td><input type="text" name="denumire_en" placeholder="Denumire ..." value="<?php if(isset($_POST['denumire_en'])){echo $_POST['denumire_en'];} else { echo $definitii_en['denumire']; }?>" /> </td>
			<td><input type="text" name="denumire_de" placeholder="Denumire ..." value="<?php if(isset($_POST['denumire_de'])){echo $_POST['denumire_de'];} else { echo $definitii_de['denumire']; }?>" /> </td>
			<td><input type="text" name="denumire_fr" placeholder="Denumire ..." value="<?php if(isset($_POST['denumire_fr'])){echo $_POST['denumire_fr'];} else { echo $definitii_fr['denumire']; }?>" /> </td>
		</tr>
		<tr>
			<td><textarea name="sumar_ro" placeholder="Sumar ..."><?php if(isset($_POST['sumar_ro'])){echo $_POST['sumar_ro'];} else { echo $definitii_ro['sumar']; }?></textarea> </td>
			<td><textarea name="sumar_en" placeholder="Sumar ..."><?php if(isset($_POST['sumar_en'])){echo $_POST['sumar_en'];} else { echo $definitii_en['sumar']; }?></textarea> </td>
			<td><textarea name="sumar_de" placeholder="Sumar ..."><?php if(isset($_POST['sumar_de'])){echo $_POST['sumar_de'];} else { echo $definitii_de['sumar']; }?></textarea> </td>
			<td><textarea name="sumar_fr" placeholder="Sumar ..."><?php if(isset($_POST['sumar_fr'])){echo $_POST['sumar_fr'];} else { echo $definitii_fr['sumar']; }?></textarea> </td>
		</tr>
		<tr>
			<td><textarea name="definitie_ro" class="definitie" placeholder="Definitie ..."><?php if(isset($_POST['definitie_ro'])){echo $_POST['definitie_ro'];} else { echo $definitii_ro['definitie']; }?></textarea> </td>
			<td><textarea name="definitie_en" class="definitie" placeholder="Definitie ..."><?php if(isset($_POST['definitie_en'])){echo $_POST['definitie_en'];} else { echo $definitii_en['definitie']; }?></textarea> </td>
			<td><textarea name="definitie_de" class="definitie" placeholder="Definitie ..."><?php if(isset($_POST['definitie_de'])){echo $_POST['definitie_de'];} else { echo $definitii_de['definitie']; }?></textarea> </td>
			<td><textarea name="definitie_fr" class="definitie" placeholder="Definitie ..."><?php if(isset($_POST['definitie_fr'])){echo $_POST['definitie_fr'];} else { echo $definitii_fr['definitie']; }?></textarea> </td>
		</tr>
		<tr id="second">	
			<td><img src="img/imagini.jpg" /> 				Imagini </td>
			<td><img src="img/video.jpg" />					 Video</td>
			<td><img src="img/bibliografie.jpg" />			 Bibliografie</td>
			<td><img src="img/documentatie.jpg" />			 Documentatie</td>
		</tr>
		<tr>
			<td>
			<!-- Imagini -->
			<input type="file" name="img[]" id="img" multiple="" /> 
			<p>Selectati multiple imagini </p>
			</td>
			<!-- Video -->
			<td>
					
				<?php 
				//Video
					$query = "SELECT * FROM video WHERE uid=".$uid;
					if($r = mysql_query($query)) {	
					
					//Cate videouri sunt
					$v = mysql_query("SELECT * FROM video WHERE uid=".$uid);
					$video_nr = mysql_num_rows($v);

					echo '<div class="video">';
					$i = 1;
					while ($video = mysql_fetch_array($r)) {
					//
					echo '<input type="text" name="video_titlu_'.$i.'" placeholder="Titlu .." value="';
					if(isset($_POST['video_titlu_'.$i])){echo $_POST['video_titlu_'.$i];} else { echo $video['titlu'];}; echo '" /><br />
					
					<input type="text" name="video_embed_'.$i.'" class="video_embed" placeholder="Embed .." value="';if(isset($_POST['video_embed_'.$i])){echo $_POST['video_embed_'.$i];}  else { echo $video['embed'];} ; echo '" />
					
				<select class="last" name="video_tip_'.$i.'">';
						if(isset($_POST['video_tip_'.$i])) 
						{ echo '<option value="'.$_POST['video_tip_'.$i].'">'.$_POST['video_tip_'.$i].'</option>'; }  
						else { echo '<option value="'.$video['tip_film'].'">'.$video['tip_film'].'</option>'; }					
					echo '<option value="youtube">youtube</option>
						  <option value="vimeo">vimeo</option>
						</select><br />';
					//incrementam
					$i++;
					} //eof while
					
					echo '</div>
							<input type="text" name="video_nr" id="video_nr" value="'; if(isset($_POST['video_nr'])) { echo $_POST['video_nr'];} else { echo $video_nr;}; echo '" class="left" style="width:20px;" />
							<div onclick="put_video();" class="button left"> Total
						</div>';
												} else { echo mysql_error();}
				
				?>
		
			</td>
			<!-- Bibliografie -->
			<td>
			<?php
					//Bibliografie
					$query = "SELECT * FROM bibliografie WHERE uid=".$uid;
					if($r = mysql_query($query)) {	
					//
					//Cate linkuri sunt
					$b = mysql_query("SELECT * FROM bibliografie WHERE uid=".$uid);
					$bibliografie_nr = mysql_num_rows($b);
					
					echo '<div class="bibliografie">';
					$i = 1;
					while ($bibliografie = mysql_fetch_array($r)) {
					//
				    echo '<input type="text" name="bibliografie_link_'.$i.'" placeholder="Link .." value="';
					if(isset($_POST['bibliografie_link_'.$i])){echo $_POST['bibliografie_link_'.$i];} else { echo $bibliografie['link']; } echo '" /><br />
					
					<input type="text" name="bibliografie_content_'.$i.'" placeholder="Content .." value="';
					if(isset($_POST['bibliografie_content_'.$i])){echo $_POST['bibliografie_content_'.$i];} else { echo $bibliografie['content']; } echo '" /><br />
					
					<input type="text" name="bibliografie_title_'.$i.'" class="last" placeholder="Title .." value="';
					if(isset($_POST['bibliografie_title_'.$i])){echo $_POST['bibliografie_title_'.$i];} else { echo $bibliografie['title'];} echo '" /><br />';
					
					$i++;
					} //eof while
					echo '<hr />
						</div>
						<input type="text" name="bibliografie_nr" id="bibliografie_nr" value="';if(isset($_POST['bibliografie_nr'])) { echo $_POST['bibliografie_nr'];} else { echo $bibliografie_nr;}; echo '" class="left" style="width:20px;" />
						<div onclick="put_bibliografie();" class="button left"> Total</div>';
												} //eof if
												else { echo mysql_error();}
			?>
			</td>
			<!-- Documentatie -->
			<td>
			<?php
					//Documentatie 
					$query = "SELECT * FROM documentatie WHERE uid=".$uid;
					if($r = mysql_query($query)) {	
					//
					//Cate linkuri sunt
					$d = mysql_query("SELECT * FROM documentatie WHERE uid=".$uid);
					$documentatie_nr = mysql_num_rows($d);
					
					echo '<div class="documentatie">';
					$i = 1;
					while ($documentatie = mysql_fetch_array($r)) {
					//
					echo '<input type="text" name="documentatie_link_'.$i.'" placeholder="Link .." value="';
					if(isset($_POST['documentatie_link_'.$i])){echo $_POST['documentatie_link_'.$i];} else { echo $documentatie['link']; } echo '" /><br />
					<input type="text" name="documentatie_content_'.$i.'" placeholder="Content .." value="';
					if(isset($_POST['documentatie_content_'.$i])){echo $_POST['documentatie_content_'.$i];} else { echo $documentatie['content'];} echo '" /><br />
					<input type="text" name="documentatie_title_'.$i.'" class="last" placeholder="Title .." value="';
					if(isset($_POST['documentatie_title_'.$i])){echo $_POST['documentatie_title_'.$i];} else { echo $documentatie['title']; } echo '" /><br />';					
					
					$i++;
					} //eof while
					echo '<hr />
							</div>
							<input type="text" name="documentatie_nr" id="documentatie_nr" value="';if(isset($_POST['documentatie_nr'])) { echo $_POST['documentatie_nr'];} else { echo $documentatie_nr;}; echo '" class="left" style="width:20px;" />
							<div onclick="put_documentatie();" class="button left"> Total</div>';
												} //eof if
												else { echo mysql_error();}
			
			?>
			<br /><br /><br />
			<!-- Submit -->
			<input type="submit" name="submit" value="UPDATE" />
			</td>
		</tr>
</form>		
	<tr> <td colspan="4"><hr /></td></tr>

	
	<tr>
		<td colspan="4" align="center">
			<!-- Imagini Delete -->
			<?php
			
			$img_del = mysql_query("SELECT * FROM imagini WHERE uid=".$uid);
			if (mysql_num_rows($img_del) != 0) {
			echo '<form action="" method="post">';
			echo '<input type="hidden" name="nr_img" id="nr_img" value="'.mysql_num_rows($img_del).'" />';
			echo '<div class="gallery" onmouseover="$(\'.gallery a.img\').lightBox();">';
			//Selectam
			$query = "SELECT * FROM imagini WHERE uid=".$uid;
			if ($r=mysql_query($query)) {
				$i=1;
				//
				echo '<table><tr><td>';
				while ($row=mysql_fetch_array($r)) {
				echo '<div class="img_box" onclick="check_box(\'img_'.$i.'\');">';
				echo '<a href="'.$img_folder.$uid.'/'.$row['img'].'" class="img" title="'.$definitii_ro['denumire'].'" target="_blank">
				<img src="'.$img_folder.$uid.'/'.$row['img'].'" /></a>';
				echo '<p><input type="checkbox" name="img_'.$i.'" id="img_'.$i.'" value="checked" ';
				if(isset($_POST['img_'.$i])) {echo 'checked="checked"';}; echo '/> <input type="text" name="img_name_'.$i.'" class="img_delete" value="'.$row['img'].'" /></p>';
				echo '</div>';
				$i++;
				}//eof while
				//
				echo '</td></tr>';
			} //eof if
			else { echo mysql_error(); }
			echo '<tr>
			<td class="right">
			<a class="submit" onclick="checkAll()"> Select All </a>
			<a class="submit" onclick="uncheckAll()"> Deselect </a>
			<input type="submit" name="img_delete" class="img_delete" value="DELETE &#187;" /> </td>
			</tr></table> 
			</div>
			</form>	';
			} //eof daca exista imagini
			?>
		</td>
	</tr>
</table>	
<hr />

			
<!-- REZULTATUL  -->
 <div id="content">
	<?php
	
	//Manipularea formularului
	if (isset($_POST['submit'])) {
	//Manipularea datelor
	//
	//verificarea de errori
				//denumire
				if ($_POST['denumire_ro'] != '') { $denumire_ro 	= $_POST['denumire_ro']; }
				else { $error .= "* Denumirea in romana obligatorie <br />"; $is_error = true; }
				//sumar
				if ($_POST['sumar_ro'] != '') { $sumar_ro = $_POST['sumar_ro']; }
				else { $error .= "* Sumarul definitiei in romana obligatoriu<br />"; $is_error = true; }
				//definitie
				if ($_POST['definitie_ro'] != '') { $definitie_ro = $_POST['definitie_ro']; }
				else { $error .= "* Introduceti definitia <br />"; $is_error = true; }
							
			
				//IF NU-I ERRROR
			if (!$is_error) { 
			// MAKE
			//////////
			
			
			//DEFINITII
			//RO
			//Insert into definitii_ro
			
			$denumire_ro 	= addslashes($_POST['denumire_ro']);
			$sumar_ro 	= addslashes($_POST['sumar_ro']);
			$definitie_ro 	= addslashes($_POST['definitie_ro']);
			
			//Verifica daca s`a introdus vreo denumire
			if ($denumire_ro != '' && $sumar_ro != '') {
			     //Verificam daca exista uid in tabel
		 		mysql_query("SELECT * FROM definitii_ro WHERE uid=".$uid);
				$af_rows = mysql_affected_rows();
				//Daca este in tabel deja
				if ($af_rows != 0) {
					$query = "UPDATE definitii_ro SET denumire='".$denumire_ro."', sumar='".$sumar_ro."', definitie='".$definitie_ro."', data_modificarii=NOW() WHERE uid=".$uid;
					if (!mysql_query($query)) { $error .= "! Eroare la actualizare in tabelul definitii_ro <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
				}
			else {
			//Daca nu este in tabel
			$query = "INSERT INTO definitii_ro (uid, denumire, sumar, definitie) VALUES (".$uid.",'".$denumire_ro."', '".$sumar_ro."','".$definitie_ro."')";
			if (!mysql_query($query)) { $error .= "! Eroare la introducerea in tabelul definitii_ro <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
				  }//eof else daca nu este
											} //eof if
						//Daca se sterge denumirea dintr-o limba
						else {
						$query = "DELETE FROM definitii_ro WHERE uid=".$uid;
						if (!mysql_query($query)) { $error .= "Nu se poate sterge elementul cu uid=".$uid." din definitii_ro<br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }			
						}//eof else
			
			/*$denumire_ro = addslashes($denumire_ro);
			$sumar_ro = addslashes($sumar_ro);
			$definitie_ro = addslashes($definitie_ro);
			
			$query = "UPDATE definitii_ro SET denumire='".$denumire_ro."', sumar='".$sumar_ro."', definitie='".$definitie_ro."', data_modificarii=NOW() WHERE uid=".$uid;
			if (!mysql_query($query)) { $error .= "! Eroare la actualizare in tabelul definitii_ro <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
			*/
			
			
			//EN
			//Insert into definitii_en
			$denumire_en 	= addslashes($_POST['denumire_en']);
			$sumar_en 	 	= addslashes($_POST['sumar_en']);
			$definitie_en 	= addslashes($_POST['definitie_en']);
			
			//Verifica daca s`a introdus vreo denumire
			if ($denumire_en != '' && $sumar_en != '') {
			     //Verificam daca exista uid in tabel
		 		mysql_query("SELECT * FROM definitii_en WHERE uid=".$uid);
				$af_rows = mysql_affected_rows();
				//Daca este in tabel deja
				if ($af_rows != 0) {
					$query = "UPDATE definitii_en SET denumire='".$denumire_en."', sumar='".$sumar_en."', definitie='".$definitie_en."', data_modificarii=NOW() WHERE uid=".$uid;
					if (!mysql_query($query)) { $error .= "! Eroare la actualizare in tabelul definitii_en <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
				}
			else {
			//Daca nu este in tabel
			$query = "INSERT INTO definitii_en (uid, denumire, sumar, definitie) VALUES (".$uid.",'".$denumire_en."', '".$sumar_en."','".$definitie_en."')";
			if (!mysql_query($query)) { $error .= "! Eroare la introducerea in tabelul definitii_en <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
				  }//eof else daca nu este
											} //eof if
						//Daca se sterge denumirea dintr-o limba
						else {
						$query = "DELETE FROM definitii_en WHERE uid=".$uid;
						if (!mysql_query($query)) { $error .= "Nu se poate sterge elementul cu uid=".$uid." din definitii_en<br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }			
						}//eof else
			
			
			
			
			//DE
			//Insert into definitii_de
			$denumire_de 	= addslashes($_POST['denumire_de']);
			$sumar_de 	 	= addslashes($_POST['sumar_de']);
			$definitie_de 	= addslashes($_POST['definitie_de']);
			
			//Verifica daca s`a introdus vreo denumire
			if ($denumire_de != '' && $sumar_de != '') {
				//Verificam daca exista uid in tabel
		 		mysql_query("SELECT * FROM definitii_de WHERE uid=".$uid);
				$af_rows = mysql_affected_rows();
				//Daca este in tabel deja
				if ($af_rows != 0) {
					$query = "UPDATE definitii_de SET denumire='".$denumire_de."', sumar='".$sumar_de."', definitie='".$definitie_de."', data_modificarii=NOW() WHERE uid=".$uid;
					if (!mysql_query($query)) { $error .= "! Eroare la actualizare in tabelul definitii_de <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
				}
			else {
			//Daca nu este in tabel
			$query = "INSERT INTO definitii_de (uid, denumire, sumar, definitie) VALUES (".$uid.",'".$denumire_de."', '".$sumar_de."','".$definitie_de."')";
			if (!mysql_query($query)) { $error .= "! Eroare la introducerea in tabelul definitii_de <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
								  }//eof else daca nu este
										} //eof if
						//Daca se sterge denumirea dintr-o limba
						else {
						$query = "DELETE FROM definitii_de WHERE uid=".$uid;
						if (!mysql_query($query)) { $error .= "Nu se poate sterge elementul cu uid=".$uid." din definitii_de<br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }			
						}//eof else
			
			//Insert into definitii_fr
			$denumire_fr 	= addslashes($_POST['denumire_fr']);
			$sumar_fr 	 	= addslashes($_POST['sumar_fr']);
			$definitie_fr 	= addslashes($_POST['definitie_fr']);
			
			//Verifica daca s`a introdus vreo denumire
			if ($denumire_fr != '' && $sumar_fr != '') {
			//Verificam daca exista uid in tabel
		 		mysql_query("SELECT * FROM definitii_fr WHERE uid=".$uid);
				$af_rows = mysql_affected_rows();
				//Daca este in tabel deja
				if ($af_rows != 0) {
					$query = "UPDATE definitii_fr SET denumire='".$denumire_fr."', sumar='".$sumar_fr."', definitie='".$definitie_fr."', data_modificarii=NOW() WHERE uid=".$uid;
					if (!mysql_query($query)) { $error .= "! Eroare la actualizare in tabelul definitii_fr <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
				}
			else {
			//Daca nu este in tabel
			$query = "INSERT INTO definitii_fr (uid, denumire, sumar, definitie) VALUES (".$uid.",'".$denumire_fr."', '".$sumar_fr."','".$definitie_fr."')";
			if (!mysql_query($query)) { $error .= "! Eroare la introducerea in tabelul definitii_fr <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
							}//eof else daca nu este
													} //eof if
						//Daca se sterge denumirea dintr-o limba
						else {
						$query = "DELETE FROM definitii_fr WHERE uid=".$uid;
						if (!mysql_query($query)) { $error .= "Nu se poate sterge elementul cu uid=".$uid." din definitii_fr<br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }			
						}//eof else
			
			//IMAGINI
			if($_FILES['img']['name'][0]!=''){
			//daca sunt imagini
			$dir = $img_folder;
	
			//Daca exista directorul
			if (!is_dir($dir.$uid)) { 
			//Creeam directorul uid
			if (!mkdir($dir.$uid, 0644)) 
			{ $error .= "! Nu se poate crea directorul <b>".$dir.$uid."</b> <br />"; $is_error = true;  }
			} //daca exista
			
			//se face directorul
			$dir = $dir.$uid.'/';
			
			
			for ($i=0;$i<count($_FILES['img']['name']);$i++) {
			
			//EROARE
			if ($_FILES["img"]["error"][$i] > 0)  { $error .= "(i) A intervenit o eroare la imagine: " . $_FILES["img"]["error"][$i] . "<br />"; $is_error = true;  }
			else
			{
			//Daca fisierul exista deja
			if (file_exists($dir . $_FILES["img"]["name"][$i])) 
			{ $error .= "(i) Fisierul <b>".$_FILES['img']['name'][$i]."</b> exista deja <br />"; $is_error = true;  }
			//Daca este imagine
			else if($_FILES['img']['type'][$i] != 'image/png' && $_FILES['img']['type'][$i] != 'image/jpeg' && $_FILES['img']['type'][$i] != 'image/bmp' && $_FILES['img']['type'][$i] != 'image/gif') 
			{ $error .= "(i) Fisierul <b>".$_FILES['img']['name'][$i]."</b> nu este imagine ! <br />"; $is_error = true;  }
			else 
			//NICI O EROARE 
			{   
				//Mutam fisierul
				if(!move_uploaded_file($_FILES["img"]["tmp_name"][$i], $dir . $_FILES["img"]["name"][$i])) {  
				$error .= "(i) Fisierul <b>".$_FILES['img']['tmp_name'][$i]."</b> nu a putut fii mutat <br />"; $is_error = true; }
				//Punem in baza de date
				$query = "INSERT INTO imagini (uid, img) VALUES (".$uid.", '".$_FILES["img"]["name"][$i]."')";
				if (!mysql_query($query)) { $error .= "(i) Eroare la introducerea in tabelul imagini <br /> QUERY: ".$query."<br />"; $is_error = true; }
				//Done
				}
			}//eof else
}//eof for
} //if isset $_FILES[img]
			
			//VIDEO
			//nr de videouri
			$video_nr = $_POST['video_nr']; 
			
			//Stergem toate videourile puse pentru a introduce cele noi
			$query = "DELETE FROM video WHERE uid=".$uid;
			if (!mysql_query($query)) { $error .= "Nu se poate goli tabelul video de elementele cu uid=".$uid."<br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }		
			
			//Introducem valorile
			for($i=1;$i<=$video_nr;$i++) {
			
			//variabile
			$embed = $_POST['video_embed_'.$i]; 
			$tip_film = $_POST['video_tip_'.$i]; 
			$titlu = $_POST['video_titlu_'.$i];
			
			if ($embed != '' && $titlu != '') {
			//Insert in baza de date
			$query = "INSERT INTO video (uid, embed, tip_film, titlu) VALUES (".$uid.", '".$embed."', '".$tip_film."', '".$titlu."')";
			if (!mysql_query($query)) { $error .= '(!) Nu s`a putut introduce in baza de date video <br /> QUERY: '.$query.'<br />'.mysql_error().'<br />'; $is_error = true;  }
												} //eof daca este ceva in input
			} //eof for
			
			
			//BIBLIOGRAFIE
			//nr de linkuri
			$bibliografie_nr = $_POST['bibliografie_nr']; 
			
			//Stergem toate bibliografie puse pentru a introduce cele noi
			$query = "DELETE FROM bibliografie WHERE uid=".$uid;
			if (!mysql_query($query)) { $error .= "Nu se poate goli tabelul bibliografie de elementele cu uid=".$uid."<br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }	
			
			//Introducem valorile
			for($i=1;$i<=$bibliografie_nr;$i++) {
			
			//variabile
			$link = $_POST['bibliografie_link_'.$i]; 
			$content = $_POST['bibliografie_content_'.$i]; 
			$title = $_POST['bibliografie_title_'.$i];
			
			if (($link != '') && ($content != '')) {
			//Insert in baza de date
			$query = "INSERT INTO bibliografie (uid, link, title, content) VALUES (".$uid.", '".$link."', '".$title."', '".$content."')";
			if (!mysql_query($query)) { $error .= '(!) Nu s`a putut introduce in baza de date bibliografie <br /> QUERY: '.$query.'<br />'.mysql_error().'<br />'; $is_error = true;  }
												} //eof daca este ceva in input
			} //eof for
			
			
			//DOCUMENATIE
			//nr de linkuri
			$documentatie_nr = $_POST['documentatie_nr']; 
			
			//Stergem toate bibliografie puse pentru a introduce cele noi
			$query = "DELETE FROM documentatie WHERE uid=".$uid;
			if (!mysql_query($query)) { $error .= "Nu se poate goli tabelul documentatie de elementele cu uid=".$uid."<br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }	
			
			//Introducem valorile
			for($i=1;$i<=$documentatie_nr;$i++) {
			
			//variabile
			$link = $_POST['documentatie_link_'.$i]; 
			$content = $_POST['documentatie_content_'.$i]; 
			$title = $_POST['documentatie_title_'.$i];
			
			if ($link != '' && $content != '') {
			//Insert in baza de date
			$query = "INSERT INTO documentatie (uid, link, title, content) VALUES (".$uid.", '".$link."', '".$title."', '".$content."')";
			if (!mysql_query($query)) { $error .= '(!) Nu s`a putut introduce in baza de date documentatie <br /> QUERY: '.$query.'<br />'.mysql_error().'<br />'; $is_error = true;  }
												} //eof daca este ceva in input
			} //eof for
				
				
			
			//////////
			//////////
			}
				if ($is_error) {
								
				//Arata mesaj de eroare
				echo '<h1 class="right"> EROARE </h1>';
				error($error);
				
				} //eof error
				else { echo '<div id="succes">
								<h1> SUCCES ! UID - '.$uid.'</h1><br />
								<h3><a href="update.php?uid='.$uid.'" class="submit">REFRESH</a></h3>
							</div>'; }
							//SUCCESSS
	

	}//eof manipularea datelor

	//Manipularea imaginilor care vor fii sterse
	if (isset($_POST['img_delete'])) {
	//
	$nr_img = $_POST['nr_img'];
	//stergem toate imaginile
	for($i=1;$i<=$nr_img;$i++){
		
		//verificam daca este selectata
		if($_POST['img_'.$i]=='checked') {
		$query = "DELETE FROM imagini WHERE uid=".$uid." AND img='".$_POST['img_name_'.$i].'\'';
		if(!mysql_query($query)) { $error .= '(i) Nu sa putut sterge imaginea '.$_POST['img_name_'.$i].' ! <br />
		QUERY: '.$query.' <br />
		'.mysql_error().' <br />'; $is_error=true; }
		//Stergerea imaginii
		else if (!unlink($img_folder.$uid.'/'.$_POST['img_name_'.$i])) { $error .= '(i) Nu sa putut sterge imaginea '.$_POST['img_name_'.$i].' ! ';  }
		} //eof if */
		
	}//eof for	
	
			if ($is_error) {
								
				//Arata mesaj de eroare
				echo '<h1 class="right"> EROARE </h1>';
				error($error);
				
				} //eof error
				else { echo '<div id="succes">
								<h1> SUCCES ! UID - '.$uid.'</h1><br />
								<h3><a href="update.php?uid='.$uid.'" class="submit">REFRESH</a></h3>
							</div>'; }
							//SUCCESSS
	
	}//eof IMG DELETE
	echo '</div>
		  <!-- eof content -->';
	
} //eof isset(uid)


//SEARCH - denumire
//formularul pentru search
else {
echo '<form action="" method="get">
		<p> Introduceti va rog denumirea sau codul unic<br />
		al articolului care doriti sa-l <b>MODIFICATI</b></p>
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