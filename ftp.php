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
			<div class="alert alert-info">
				Cette section n'est pas encore disponible. Revenez plus tard.
			</div>	
		<div>
	</div>
</div>

<?php
	loadJS();
?>


</html>