<?php
	require_once('../config.php');
	require_once("classes/verificator.fn.php");
	
	function Plugins(){
		nonBukkitHeader();
		
		showInstalledPlugins();
		showSuggested();
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
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='Protégez vos portes et vos coffres contre les voleurs avec Lockette.' >Lockette</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>
						</td>
					</tr>
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='Gerer les groupes dutilisateurs en toute simplicitée!' >GroupManager</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>
						</td>
					</tr>
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='Travailler et gagner de largent avec votre nouvel emploi!' >MineJobs</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>
						</td>
					</tr>
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='Fini les tricheurs dans votre serveur! Empeche de voler, de se téléporter, de tuer ses enemis en un coup et encore plus!' >NoCheatPlus</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>
						</td>
					</tr>
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='Empechez vos utilisateurs dutiliser un X-RAY en leur blocant la vue avec des miliers de blocs!' >Orebfuscator</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>
						</td>
					</tr>
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='Promenez-vous dans plusieurs maps et mondes très simplement' >Multiverse</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>
						</td>
					</tr>
					<tr>
						<td><a class='pluginDescription' data-toggle='tooltip' title='' data-original-title='WorldEdit permet de modifier votre map comme vous le voulez. Créer des spheres, des cylindres, déplacer des objets, et encore plus!' >WorldEdit</a></td>
						<td>
							<button type='button' class='btn btn-primary' disabled><i class='icon icon-white icon-download-alt'></i> Installer</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>";
	}
	
	

?>