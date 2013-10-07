<?php
	require_once("classes/pageLoad.fn.php");
	require_once("../config.php");
	
	require_once("classes/plugins.fn.php");
	
	showHead();
	showTopNav();
?>

<div class="container" style="margin-top: 50px;">
	<?php
		showMenu(getPage());
		showBreadcrumbs(getPage());
		
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