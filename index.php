<?php
	require_once("classes/pageLoad.fn.php");
	require_once("../config.php");
	
	require_once("classes/MinecraftQuery.php");
	
	showHead();
	showTopNav();
?>

<div class="container" style="margin-top: 50px;">
	<?php
		showMenu(getPage());
		showBreadcrumbs(getPage());
	?>
		<div class="widget">
			
			<div class="dashboard span2">
				<strong>Nombre de joueurs<br/>
					3 / 10 Joueurs</strong>
				<div class="progress progress-">
					<div class="bar" style="width: 30%;"></div>
				</div>
			</div>

			<div class="dashboard span2">
				<strong>Utilisation disque<br/>
					90 / 100 Mb</strong>
				<div class="progress progress-danger">		
					<div class="bar" style="width: 90%;"></div>
				</div>
			</div>

			<div class="dashboard span2">
				<strong>Memoire utlisee<br/>
					3 / 10 Mb</strong>
				<div class="progress">
					<div class="bar bar-warning" style="width: 30%;"></div>
				</div>
			</div>

			<!--<div class="progress span2">
				<div class="bar" style="width: 10%;"></div>
			</div>
			
			<div class="progress span2">
				<div class="bar" style="width: 70%;"></div>
			</div>
			
			<div class="progress span2">
				<div class="bar" style="width: 70%;"></div>
			</div>
<?php //echo getServerAddress(); echo ":"; echo getServerPort(); ?> 0/<?php //echo getMaxPlayers(); ?>
		-->
		</div>
		
		<div class="widget">
			<h4>Liens Utiles</h4>
			<a class="btn w50" href="joueurs.php"><i class="icon-user"></i><br/>Joueurs</a>
			<a class="btn w50" href="plugins.php"><i class="icon-th"></i><br/>Plugins</a>
			<a class="btn w50" href="backups.php"><i class="icon-hdd"></i><br/>Backups</a>
			<a class="btn w50" href="#"><i class="icon-folder-open"></i><br/>FTP</a>
			<a class="btn w50" href="settings.php"><i class="icon-cog"></i><br/> Propri&eacute;t&eacute;es</a>
			<a class="btn btn-danger w50"><i class="icon-off icon-white"></i><br/>Arr&ecirc;ter</a>
			<a class="btn btn-warning w50"><i class="icon-repeat icon-white"></i><br/>Red&eacute;marrer</a>
		</div>
		
		<div class="widget">
		
		</div>
	</div>
</div>

<?php
	loadJS();
?>

</html>