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
		
		<div class="alert alert-error">
			Les plugins ne sont pas pris en charge avec une version Vanilla pour l'instant! Utilisez Bukkit pour avoir accès aux plugins.
		</div>
		
		<div class="widget span4 m0">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Suggestion</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class="pluginDescription" data-toggle="tooltip" title="" data-original-title="Gérez votre serveur facilement avec des fonctionalités supplémentaires." >Essentials</a></td>
						<td>
							<button type="button" class="btn btn-primary"><i class="icon icon-white icon-download-alt"></i> Installer</button>							
						</td>
					</tr>
					<tr>
						<td><a class="pluginDescription" data-toggle="tooltip" title="" data-original-title="Impôts, salaires, intérêts... Devenez un cafteur capitaliste!" >iConomy</a></td>
						<td>
							<button type="button" class="btn btn-primary"><i class="icon icon-white icon-download-alt"></i> Installer</button>
						</td>
					</tr>
					<tr>
						<td><a class="pluginDescription" data-toggle="tooltip" title="" data-original-title="Permet à chaque joueur de créer sa guilde ou d'en intégrer une." >Factions</a></td>
						<td>
							<button type="button" class="btn btn-primary"><i class="icon icon-white icon-download-alt"></i> Installer</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		
		<div class="widget m1 pull-right">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Plugins Installes</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Essentials</td>
						<td>
							<button type="button" class="btn btn-danger"><i class="icon icon-white icon-trash"></i> Supprimer</button>							
						</td>
					</tr>
					<tr>
						<td>iConomy</td>
						<td>
							<button type="button" class="btn btn-danger"><i class="icon icon-white icon-trash"></i> Supprimer</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
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