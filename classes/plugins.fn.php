<?php
	require_once('../config.php');

	function Plugins(){
		nonBukkitHeader();
		
		showInstalledPlugins();
		showSuggested();
	}
	
	function isBukkit(){
		if(file_exists(MC_DIR."craftbukkit.jar")){
			return true;
		}else{
			return false;
		}
	}
	
	function nonBukkitHeader(){
		if(!isBukkit()){
			echo "<div class='alert alert-error'>
						Les plugins ne sont pas pris en charge avec une 
						version Vanilla pour l'instant! Utilisez Bukkit pour avoir accès aux plugins.
					</div>";
		}
	}
	
	
	function getInstalledPlugins(){
		$dir = MC_DIR."plugins/";
		$plugins = glob($dir."*.jar");
		
		return $plugins;
	}
	
	function showInstalledPlugins(){
		$plugins = getInstalledPlugins();
		$dir = MC_DIR."plugins/";
		$bukkit = isBukkit();
		
		echo "<div class='widget m1 pull-right'>
			<table class='table table-striped'>
				<thead>
					<tr>
						<th>Plugins Installes</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>";
		
		foreach($plugins as $name){
			$name = str_replace($dir, "", $name);
			$name = str_replace(".jar", "", $name);
			
			echo "<tr>
					<td>$name</td>
						<td>
							<button type='button' class='btn btn-danger' "; echo ($bukkit) ? "":"disabled"; echo "><i class='icon icon-white icon-trash'></i> Supprimer</button>
						</td>
					</tr>";			
		}
		
		echo "</tbody></table></div>";
		
		
	}
	
	function showSuggested(){
		echo "<div class='widget span4 m0'>
			<table class='table table-striped'>
				<thead>
					<tr>
						<th>Suggestion</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='Gérez votre serveur facilement avec des fonctionalités supplémentaires.' >Essentials</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>							
						</td>
					</tr>
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='Impôts, salaires, intérêts... Devenez un cafteur capitaliste!' >iConomy</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>
						</td>
					</tr>
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='Permet à chaque joueur de créer sa guilde ou den intégrer une.' >Factions</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>";
	}
	

?>