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

<div id="insert">
<h1><img src="img/insert_small.jpg" />  INSERT</h1>

<hr />

<!-- FORMULAR pt introducere date -->
<form action="" method="post" enctype="multipart/form-data">
	<table>
		<tr>
			<td><img src="img/ro.png" /> Romana</td>
			<td><img src="img/en.png" /> Engleza</td>
			<td><img src="img/de.png" /> Germana</td>
			<td><img src="img/fr.png" /> Franceza</td>
		</tr>
		<tr>
			<td><input type="text" name="denumire_ro" placeholder="Denumire ..." value="<?php if(isset($_POST['denumire_ro'])){echo $_POST['denumire_ro'];}?>" /> </td>
			<td><input type="text" name="denumire_en" placeholder="Denumire ..." value="<?php if(isset($_POST['denumire_en'])){echo $_POST['denumire_en'];}?>" /> </td>
			<td><input type="text" name="denumire_de" placeholder="Denumire ..." value="<?php if(isset($_POST['denumire_de'])){echo $_POST['denumire_de'];}?>" /> </td>
			<td><input type="text" name="denumire_fr" placeholder="Denumire ..." value="<?php if(isset($_POST['denumire_fr'])){echo $_POST['denumire_fr'];}?>" /> </td>
		</tr>
		<tr>
			<td><textarea name="sumar_ro" placeholder="Sumar ..."><?php if(isset($_POST['sumar_ro'])){echo $_POST['sumar_ro'];}?></textarea> </td>
			<td><textarea name="sumar_en" placeholder="Sumar ..."><?php if(isset($_POST['sumar_en'])){echo $_POST['sumar_en'];}?></textarea> </td>
			<td><textarea name="sumar_de" placeholder="Sumar ..."><?php if(isset($_POST['sumar_de'])){echo $_POST['sumar_de'];}?></textarea> </td>
			<td><textarea name="sumar_fr" placeholder="Sumar ..."><?php if(isset($_POST['sumar_fr'])){echo $_POST['sumar_fr'];}?></textarea> </td>
		</tr>
		<tr>
			<td><textarea name="definitie_ro" class="definitie" placeholder="Definitie ..."><?php if(isset($_POST['definitie_ro'])){echo $_POST['definitie_ro'];}?></textarea> </td>
			<td><textarea name="definitie_en" class="definitie" placeholder="Definitie ..."><?php if(isset($_POST['definitie_en'])){echo $_POST['definitie_en'];}?></textarea> </td>
			<td><textarea name="definitie_de" class="definitie" placeholder="Definitie ..."><?php if(isset($_POST['definitie_de'])){echo $_POST['definitie_de'];}?></textarea> </td>
			<td><textarea name="definitie_fr" class="definitie" placeholder="Definitie ..."><?php if(isset($_POST['definitie_fr'])){echo $_POST['definitie_fr'];}?></textarea> </td>
		</tr>
		<tr id="second">
			<td><img src="img/imagini.jpg" /> 		 Imagini</td>
			<td><img src="img/video.jpg" />			 Video</td>
			<td><img src="img/bibliografie.jpg" />	 Bibliografie</td>
			<td><img src="img/documentatie.jpg" />	 Documentatie</td>
		</tr>
		<tr>
			<!-- Imagini -->
			<td>
			<input type="file" name="img[]" id="img" multiple="" /> 
			<p>Selectati imagini multiple </p>
			</td>
			<!-- Video -->
			<td>
			<div class="video">
				<input type="text" name="video_titlu_1" placeholder="Titlu .." value="<?php if(isset($_POST['video_titlu_1'])){echo $_POST['video_titlu_1'];}?>" /><br />
				<input type="text" name="video_embed_1" class="video_embed" placeholder="Embed .." value="<?php if(isset($_POST['video_embed_1'])){echo $_POST['video_embed_1'];}?>" />
				<select name="video_tip_1">
					<?php if(isset($_POST['video_tip_1'])) { echo '<option value="'.$_POST['video_tip_1'].'">'.$_POST['video_tip_1'].'</option>'; } ?>
					<option value="youtube">youtube</option>
					<option value="vimeo">vimeo</option>
				</select><br />
			</div>
			<input type="text" name="video_nr" id="video_nr" value="1" class="left" style="width:20px;" />
			<div onclick="put_video();" class="button left"> Total</div>			
			</td>
			<!-- Bibliografie -->
			<td>
			<div class="bibliografie">
				<input type="text" name="bibliografie_link_1" placeholder="Link .." value="<?php if(isset($_POST['bibliografie_link_1'])){echo $_POST['bibliografie_link_1'];}?>" /><br />
				<input type="text" name="bibliografie_content_1" placeholder="Content .." value="<?php if(isset($_POST['bibliografie_content_1'])){echo $_POST['bibliografie_content_1'];}?>" /><br />
				<input type="text" name="bibliografie_title_1" placeholder="Title .." value="<?php if(isset($_POST['bibliografie_title_1'])){echo $_POST['bibliografie_title_1'];}?>" /><br />
				<hr />
			</div>
			<input type="text" name="bibliografie_nr" id="bibliografie_nr" value="1" class="left" style="width:20px;" />
			<div onclick="put_bibliografie();" class="button left"> Total</div>		
			</td>
			<!-- Documentatie -->
			<td>
			<div class="documentatie">
				<input type="text" name="documentatie_link_1" placeholder="Link .." value="<?php if(isset($_POST['documentatie_link_1'])){echo $_POST['documentatie_link_1'];}?>" /><br />
				<input type="text" name="documentatie_content_1" placeholder="Content .." value="<?php if(isset($_POST['documentatie_content_1'])){echo $_POST['documentatie_content_1'];}?>" /><br />
				<input type="text" name="documentatie_title_1" placeholder="Title .." value="<?php if(isset($_POST['documentatie_title_1'])){echo $_POST['documentatie_title_1'];}?>" /><br />
				<hr />
			</div>
			<input type="text" name="documentatie_nr" id="documentatie_nr" value="1" class="left" style="width:20px;" />
			<div onclick="put_documentatie();" class="button left"> Total</div>			
			</td>
		</tr>
		<tr>
			<td colspan="4" class="submit">
			<br />
			<input type="submit" name="submit" value="INSERT" />
			</td>
		</tr>
	</table>
</form>
<hr />


<!-- RESULTATUL -->
<div id="content">
		<?php
		//if submit
		if (isset($_POST['submit'])) {
			
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
			
			//Do uid
			$query = "SELECT * FROM definitii_ro";
			$r = mysql_query($query);
			$uid =  mysql_num_rows($r) + 1;
			
			//DEFINITII
			//Insert into definitii_ro
			$denumire_ro = addslashes($denumire_ro);
			$sumar_ro = addslashes($sumar_ro);
			$definitie_ro = addslashes($definitie_ro);
			
			$query = "INSERT INTO definitii_ro (uid, denumire, sumar, definitie) VALUES (".$uid.",'".$denumire_ro."', '".$sumar_ro."','".$definitie_ro."')";
			if (!mysql_query($query)) { $error .= "! Eroare la introducerea in tabelul definitii_ro <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
			
			//Insert into definitii_en
			$denumire_en 	= addslashes($_POST['denumire_en']);
			$sumar_en 	 	= addslashes($_POST['sumar_en']);
			$definitie_en 	= addslashes($_POST['definitie_en']);
			//Verifica daca s`a introdus vreo denumire
			if ($denumire_en != '' && $sumar_en != '') {
			$query = "INSERT INTO definitii_en (uid, denumire, sumar, definitie) VALUES (".$uid.",'".$denumire_en."', '".$sumar_en."','".$definitie_en."')";
			if (!mysql_query($query)) { $error .= "! Eroare la introducerea in tabelul definitii_en <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
													 } //eof if
			
			//Insert into definitii_de
			$denumire_de 	= addslashes($_POST['denumire_de']);
			$sumar_de 	 	= addslashes($_POST['sumar_de']);
			$definitie_de 	= addslashes($_POST['definitie_de']);
			
			//Verifica daca s`a introdus vreo denumire
			if ($denumire_de != '' && $sumar_de != '') {
			$query = "INSERT INTO definitii_de (uid, denumire, sumar, definitie) VALUES (".$uid.",'".$denumire_de."', '".$sumar_de."','".$definitie_de."')";
			if (!mysql_query($query)) { $error .= "! Eroare la introducerea in tabelul definitii_de <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
														} //eof if
			
			//Insert into definitii_fr
			$denumire_fr 	= addslashes($_POST['denumire_fr']);
			$sumar_fr 	 	= addslashes($_POST['sumar_fr']);
			$definitie_fr 	= addslashes($_POST['definitie_fr']);
			
			//Verifica daca s`a introdus vreo denumire
			if ($denumire_fr != '' && $sumar_fr != '') {
			$query = "INSERT INTO definitii_fr (uid, denumire, sumar, definitie) VALUES (".$uid.",'".$denumire_fr."', '".$sumar_fr."','".$definitie_fr."')";
			if (!mysql_query($query)) { $error .= "! Eroare la introducerea in tabelul definitii_fr <br /> QUERY: ".$query."<br />".mysql_error()."<br />"; $is_error = true; }
														} //eof if
			
			//IMAGINI
			if($_FILES['img']['name'][0]!=''){
			//daca sunt imagini
			$dir = $img_folder;
			
			//Creeam directorul uid
			if (!is_dir($dir.$uid)) { 
			//Creeam directorul uid
			if (!mkdir($dir.$uid, 0644)) 
			{ $error .= "! Nu se poate crea directorul <b>".$dir.$uid."</b> <br />"; $is_error = true;  }
			} //daca exista
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
} // eof if isset($_FILES[imagini])
			
			//VIDEO
			//nr de videouri
			$video_nr = $_POST['video_nr']; 
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
			for($i=1;$i<=$bibliografie_nr;$i++) {
			
			//variabile
			$link = $_POST['bibliografie_link_'.$i]; 
			$content = $_POST['bibliografie_content_'.$i]; 
			$title = $_POST['bibliografie_title_'.$i];
			
			if ($link != '' && $content != '') {
			//Insert in baza de date
			$query = "INSERT INTO bibliografie (uid, link, title, content) VALUES (".$uid.", '".$link."', '".$title."', '".$content."')";
			if (!mysql_query($query)) { $error .= '(!) Nu s`a putut introduce in baza de date bibliografie <br /> QUERY: '.$query.'<br />'.mysql_error().'<br />'; $is_error = true;  }
												} //eof daca este ceva in input
			} //eof for
			
			
			//DOCUMENATIE
			//nr de linkuri
			$documentatie_nr = $_POST['documentatie_nr']; 
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
				//Sterge ce-o pus in baza de date
				mysql_query("DELETE FROM `definitii_ro` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `definitii_en` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `definitii_fr` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `definitii_de` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `imagini` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `video` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `bibliografie` WHERE `uid`=".$uid);
				mysql_query("DELETE FROM `documentatie` WHERE `uid`=	".$uid);			
				
				//Arata mesaj de eroare
				echo '<h1 class="right"> EROARE </h1>';
				error($error);
				
				} //eof error
				else { echo '<div id="succes">
								<h1> SUCCES !</h1>
								<h3>UID - '.$uid.'</h3>
							</div>'; }
							//SUCCESSS
	} //eof submit
?>
		
</div>
<!-- eof content-->
</div>	
<!-- eof Insert -->	
<?php
include('inc/footer.php');
?>