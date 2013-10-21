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
		
		showProgressBars();
		showUsefulLinks();
	?>		
		<div class="widget">
		
		</div>
	</div>
</div>

<?php
	loadJS();
?>

</html>