<?php
	require_once("classes/pageLoad.fn.php");
	require_once("../config.php");
	require_once("classes/verificator.fn.php");
	
	require_once("classes/plugins.fn.php");
	
	showHead();
	showTopNav();
?>

<div class="container" style="margin-top: 50px;">
	<?php
		showMenu(getPage());
		showBreadcrumbs(getPage());
		verify();
		Plugins();
	?>
		
	</div>
</div>

<?php
	loadJS();
?>

<script>
	$(function(){
		$(".pluginDescription").tooltip();
	});	
	
</script>

</html>