<?php
include("inc/header.php");
?>
<div id="index">
	<div id="header"><a href="http://www.kmtel.ro/dictionar" class="block">
	<img src="http://www.kmtel.ro/img/kmtel.jpg" alt="" id="logo" />
	<h3>Dictionar Multimedia IT</h3>
	<h4>- Administrare -</h4>
	</a></div>
	
	<table id="control">
	<tr><td>
		<div class="box">
			<a href="select.php">
			<img src="img/select.jpg" class="left" />
			<h3>SELECT</h3>
			<h5>Selectati toate elementele din baza de date in limba care o doriti.</h5>
			</a>
		</div>
	</td></td>
	<td>
		<div class="box">
			<a href="insert.php">
			<img src="img/insert.jpg" class="left" />
			<h3>INSERT</h3>
			<h5>Introduceti in baza de date un nou articol cu imagini, video, bibliografie etc.</h5>
			</a>
		</div>
	</td></tr>
	<tr><td>
		<div class="box">
			<a href="update.php">
			<img src="img/update.jpg" class="left" />
			<h3>UPDATE</h3>
			<h5>Reinoiti un articol cu optiunea update. Refaceti-va baza de date dupa ultimele noutati.</h5>
			</a>
		</div>
	</td></td>
	<td>
		<div class="box">
			<a href="delete.php">
			<img src="img/delete.jpg" class="left" />
			<h3>DELETE</h3>
			<h5>Stergeti din baza de date definitii care sunt gresite sau nu va convin.</h5>
			</a>
		</div>
	</td></tr>
	<tr>
		<td colspan="2" align="center">
		<div class="box">
			<a href="documentatie.php" target="_blank">
			<img src="img/ajutor.jpg" class="left" />
			<h3>AJUTOR</h3>
			<h5>Aici aveti toata documentatia de care aveti nevoie pentru a utiliza aceasta aplicatie.</h5>
			</a>
		</div>
		</td>
	</table>
</div>
<?php
include("inc/footer.php");
?>