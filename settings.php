<?php
	require_once("classes/pageLoad.fn.php");
	require_once("../config.php");
	
	require_once("classes/settings.simplified.fn.php");
	
	showHead();
	showTopNav();
?>

<div class="container" style="margin-top: 50px;">
	<?php
		showMenu(getPage());
		showBreadcrumbs(getPage());
	?>
		<div class='widget'>
			<table class='table table-striped'>
				<thead>
					<tr>
						<th>Parametre</th>
						<th>Valeur</th>
					</tr>
				</thead>
				<tbody>
					<?php
						showSettings();
					?>
				</tbody>
			</table>
		<div class='form-actions'>
			<button type='submit' class='btn btn-primary' disabled>Modifier</button>
		</div>
	</div>
	</div>
</div>

<?php
	loadJS();
?>


</html>