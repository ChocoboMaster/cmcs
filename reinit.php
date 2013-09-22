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
			<div class="alert alert-danger">
				Après avoir réinitialisé votre serveur, il sera impossible de revenir a votre ancienne configuration.
			</div>	
			<center>Êtes-vous sûr de vouloir réinitialiser votre serveur?
			<div class="form-actions">
				<button type="submit" class="btn btn-danger">Réinitialiser</button>
				<button type="button" class="btn">Retour</button>
			</div>
			</center>
			
		</div>
	</div>
</div>

<?php
	loadJS();
?>


</html>