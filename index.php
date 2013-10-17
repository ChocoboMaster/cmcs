<?php
	require_once("classes/pageLoad.fn.php");
	require_once("../config.php");
	
	require_once("classes/MinecraftQuery.php");
	require_once("classes/dashboard.fn.php");
	
	showHead();
	showTopNav();
?>

<div class="container" style="margin-top: 50px;">
	<?php
		showMenu(getPage());
		showBreadcrumbs(getPage());
	?>
		<div class="widget">
			<div class="dashboard">
				<div class="dashboardbars">
					<strong>Nombre de joueurs<br/>
						3 / 10 Joueurs</strong>
					<div class="progress progress-info">
						<div class="bar" style="width: 30%;"></div>
					</div>
				</div>

				<div class="dashboardbars">
					<strong>Utilisation disque<br/>
						<?php echo formatBytes(folderSize(MC_DIR)); ?> / 100 MB</strong>
					<div class="progress progress-warning">		
						<div class="bar" style="width: 90%;"></div>
					</div>
				</div>

				<div class="dashboardbars">
					<strong>Memoire utlisee<br/>
						512 / 512 Mb</strong>
					<div class="progress progress-danger">
						<div class="bar" style="width: 100%;"></div>
					</div>
				</div>
			</div>

			<div class='alert alert-info'>
				Attention, il ne vous reste plus beaucoup d'espace disque!
			</div>
			<div class='alert alert-info'>
				Attention, vous utilisez toute votre memoire vive. Pensez a augmenter la memoire de votre serveur!
			</div>
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