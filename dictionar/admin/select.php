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
//make
function make($lang,$pages,$from,$ord,$img_folder) {
//var
//lang
//pages
//from
//ord
if ($ord == 'none') { $order_by='';}
else { $order_by = "ORDER BY denumire $ord";}
$table = 'definitii';
$table = $table.'_'.$lang;

$query = "SELECT * FROM $table $order_by LIMIT $from, $pages ";
echo '<div id="query"><b>QUERY:</b> '.$query.'</div>';

if ($r=mysql_query($query)) {

 //Afisarea tabelului
echo '<div class="gallery" onmouseover="$(\'.gallery a.img_go\').lightBox();">';
 echo '<table>';
 echo '<tr><td> UID </td><td> DENUMIRE </td><td> SUMAR </td><td> DEFINITIE </td><td> DATA_CREARII </td><td> DATA_MOD</td><td> UPDATE </td> <td> DELETE </td></tr>';

 while ($row = mysql_fetch_array($r))
  {
	if($r_img = mysql_query("SELECT * FROM imagini WHERE uid=".$row['uid']))
	 { $row_img = mysql_fetch_array($r_img);}

	//Imaginiea
	$img_src = $img_folder.$row['uid'].'/'.$row_img['img'];
	
	echo '<tr>';
		echo '<td>'.$row['uid'].'</td>';
		
		echo '<td><b>'.$row['denumire'].'</b> <br /><br />';
		echo '<a href="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" class="img_go" title="'.$row['sumar'].'" target="_blank">';
		echo '<img src="'.$img_folder.$row['uid'].'/'.$row_img['img'].'" class="img" alt="[NO-IMAGE]" class="denumire_img" />';
		echo '</td>';
		
		echo '<td><textarea>'.$row['sumar'].'</textarea></td>';
		echo '<td><textarea>'.$row['definitie'].'</textarea></td>';
		echo '<td>'.$row['data_crearii'].'</td>';
		echo '<td>'.$row['data_modificarii'].'</td>';
		echo '<td><a onclick="openWin(\'update.php?uid='.$row['uid'].'\',\'1200\',\'800\');"><img src="img/update_small.jpg" /></a> </td>';
		echo '<td><a onclick="openWin(\'delete.php?uid='.$row['uid'].'\',\'1050\',\'350\');"><img src="img/delete_small.jpg" /></a> </td>';
	echo '</tr>';
  }//eof while

  //Sf tabel
  echo '</table></div>';
} 
}//eof make
?>

<!-- TITLU -->
<div id="select">
<h1><img src="img/select_small.jpg" /> SELECT</h1>

<!-- FORMULAR pentru introducere -->
<form action="" method="get">

	<label>&nbsp;</label>
	<a href="javascript:void(0);" onclick="check('ro');"><input type="radio" name="lang" id="ro" value="ro" <?php if(isset($_GET['lang']) && $_GET['lang']=='ro') {echo 'checked="checked"';} else {echo 'checked="checked"';}?> /> <img src="img/ro.png" /> </a>
	<a href="javascript:void(0);" onclick="check('en');"><input type="radio" name="lang" id="en" value="en" <?php if(isset($_GET['lang']) && $_GET['lang']=='en') {echo 'checked="checked"';}?> /> <img src="img/en.png" /></a>
	<a href="javascript:void(0);" onclick="check('de');"><input type="radio" name="lang" id="de" value="de" <?php if(isset($_GET['lang']) && $_GET['lang']=='de') {echo 'checked="checked"';}?> /> <img src="img/de.png" /></a>
	<a href="javascript:void(0);" onclick="check('fr');"><input type="radio" name="lang" id="fr" value="fr" <?php if(isset($_GET['lang']) && $_GET['lang']=='fr') {echo 'checked="checked"';}?> /> <img src="img/fr.png" /></a>

	<label>nr. de elem.</label>
	<select name="pages">
    <?php if (isset($_GET['pages'])) { echo '<option value="'.$_GET['pages'].'">'.$_GET['pages'].'</option>';} ?>
	<?php for($i=10;$i<=500;$i=$i+10){echo '<option value="'.$i.'">'.$i.'</option>';} ?>
	<option value="999999">toate</option>
	</select>

	<label>de la elem.</label>	
	<input type="text" name="from" value="<?php if(isset($_GET['from'])) { echo $_GET['from']; } else { echo '0';} ?>" /> 
 
 
	<label>&nbsp;</label>
	<a href="javascript:void(0);" onclick="check('none');"><input type="radio" name="ord" id="none" value="none" <?php if(isset($_GET['ord']) && $_GET['ord']=='none') {echo 'checked="checked"';} else {echo 'checked="checked"';}?> /> None </a>
	<a href="javascript:void(0);" onclick="check('asc');"><input type="radio" name="ord" id="asc" value="ASC" <?php if(isset($_GET['ord']) && $_GET['ord']=='ASC') {echo 'checked="checked"';} ?> /> Asc </a>
	<a href="javascript:void(0);" onclick="check('desc');"><input type="radio" name="ord" id="desc" value="DESC" <?php if(isset($_GET['ord']) && $_GET['ord']=='DESC') {echo 'checked="checked"';} ?> /> Desc </a>
 
	<label style="margin-left:10px;">&nbsp;</label> 
	<input type="submit" name="submit" value="&#187;" />

</form>
<hr />

<!-- RESULTAT -->
<div id="content">
		<?php
		//if submit
		if (isset($_GET['submit'])) {
		
				//verificarea de errori
				//language
				if (isset($_GET['lang'])) { $lang = $_GET['lang']; }
				else { $error .= "* Selectati tabelul cu limba <br />"; $is_error = true; }
				//Nr. de pagini
				if (isset($_GET['pages'])) { $pages = $_GET['pages']; }
				else { $error .= "* Selectati nr. de pagini <br />"; $is_error = true; }
				//De la elementul
				if (isset($_GET['from'])) { $from = $_GET['from']; }
				else { $error .= "* Selectati de unde sa arate tabelul <br />"; $is_error = true; }
				//Ordinea crescatoare sau descrescatoare
				if (isset($_GET['ord'])) { $ord = $_GET['ord']; }
				else { $error .= "* Selectati de ordinea elementelor <br />"; $is_error = true; }
				
			
				//IF ERRROR
			if (!$is_error) {
				//cod de rulat
				make($lang,$pages,$from,$ord,$img_folder);
			}
			else { 
				//Sa arate mesaj de eraorare
				error($error);
			}
}//eof submit
?>
</div>
<!-- eof content -->


</div>	

<?php
include('inc/footer.php');
?>