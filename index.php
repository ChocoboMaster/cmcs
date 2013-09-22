<?php
	require_once("classes/pageLoad.fn.php");
	require_once("../config.php");
	
	showHead();
	showTopNav();
?>

<div class="container" style="margin-top: 50px;">
	<?php
		showMenu(getPage());
		showBreadcrumbs(getPage());
	?>
		<div class="widget">
			127.0.0.1:25565 0/64

		</div>
		
		<div class="widget">
			<h4>Liens Utiles</h4>
			<a class="btn w50"><i class="icon-user"></i><br/>Joueurs</a>
			<a class="btn w50"><i class="icon-th"></i><br/>Plugins</a>
			<a class="btn w50"><i class="icon-hdd"></i><br/>Backups</a>
			<a class="btn w50"><i class="icon-folder-open"></i><br/>FTP</a>
			<a class="btn w50"><i class="icon-cog"></i><br/> Propri&eacute;t&eacute;es</a>
			<a class="btn w50"><i class="icon-off"></i><br/>Arr&ecirc;ter</a>
			<a class="btn w50"><i class="icon-repeat"></i><br/>Red&eacute;marrer</a>
		</div>
		
		<div class="widget">
		
		</div>
	</div>
</div>

<?php
	loadJS();
?>

</html>