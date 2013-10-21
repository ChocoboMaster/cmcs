<?php include("top.inc.php"); ?>

<?php
	
	include_once "core/mysql_dbconnect.inc.php";

	$data = mysql_query("SELECT version FROM servers_mc WHERE id='1' LIMIT 1");
	$e = mysql_fetch_assoc($data);
	$val = $e['version'];

?>

	<div class="container-fluid span10">
		<div class="row-fluid">
			<div class="place spacer span12">
				<hr/>
				<span style="width: 500px; margin-left:30px;">Accueil > Plugins</span> <span class="pull-right" style="width: 400px; text-align:right; margin-right:30px;">Type de serveur: Minecraft</span>
				<hr/>
			</div>
		</div>

		<?php 

			if(substr($val, 0,-3) !='b'){
				echo '<div class="alert alert-error">
						  Les plugins ne sont pas pris en charge avec une version Vanilla de Minecraft! Utilisez Bukkit pour avoir acc&egrave;s aux plugins.
					</div>';
				$bukkit = FALSE;
			}else{
				$bukkit = TRUE;
			}

		?>

		<div class="row-fluid">
			<div class="auto-plugins span8">
				<div class="widget">
					<div class="head">Auto Plugins</div>
				</div>

				<div class="row-fluid">
					<div class="widget span6">
						<div class="head">Essentials</div>
						<div class="body">
							<div class="small-plugins">
								G&eacute;rez votre serveur facilement avec des fonctionalit&eacute;s suppl&eacute;mentaires.
								<form>
									<input type="button" class="btn btn-primary pull-right <?php if(!$bukkit){echo 'disabled';}?>" value="<?php if(!$bukkit){echo 'Indisponible';}else{echo 'Installer ce plugin';}?>" />
								</form>
							</div>
						</div>	
					</div>

					<div class="widget span6">
						<div class="head">Factions</div>
						<div class="body">
							<div class="small-plugins">
								Permet &agrave; chaque joueur de cr&eacute;er sa guilde ou d'en int&eacute;grer une.
								<form>
									<input type="button" class="btn btn-primary pull-right <?php if(!$bukkit){echo 'disabled';}?>" value="<?php if(!$bukkit){echo 'Indisponible';}else{echo 'Installer ce plugin';}?>"/>
								</form>
							</div>
						</div>	
					</div>
				</div>

				<div class="row-fluid">
					<div class="widget span6">
						<div class="head">GroupManager</div>
						<div class="body">
							<div class="small-plugins">
								Toujours sous Essentials, g&eacute;rez aussi les rangs de vos joueurs.
								<form>
									<input type="button" class="btn btn-primary pull-right <?php if(!$bukkit){echo 'disabled';}?>" value="<?php if(!$bukkit){echo 'Indisponible';}else{echo 'Installer ce plugin';}?>"/>
								</form>
							</div>
						</div>	
					</div>

					<div class="widget span6">
						<div class="head">iConomy</div>
						<div class="body">
							<div class="small-plugins">
								Imp&ocirc;ts, salaires, int&eacute;r&ecirc;ts... Devenez un cafteur capitaliste!
								<form>
									<input type="button" class="btn btn-primary pull-right <?php if(!$bukkit){echo 'disabled';}?>" value="<?php if(!$bukkit){echo 'Indisponible';}else{echo 'Installer ce plugin';}?>"/>
								</form>
							</div>
						</div>	
					</div>
				</div>

				<div class="row-fluid">
					<div class="widget span6">
						<div class="head">Jobs</div>
						<div class="body">
							<div class="small-plugins">
								Donnez de l'argemt pour un travail pr&eacute;cis, avec un syst&egrave;me de classes et d'XP.
								<form>
									<input type="button" class="btn btn-primary pull-right <?php if(!$bukkit){echo 'disabled';}?>" value="<?php if(!$bukkit){echo 'Indisponible';}else{echo 'Installer ce plugin';}?>"/>
								</form>
							</div>
						</div>	
					</div>

					<div class="widget span6">
						<div class="head">Lockette</div>
						<div class="body">
							<div class="small-plugins">
								Permet de s&eacute;curiser les inventaires gr&acirc;ce &agrave; une pancarte.
								<form>
									<input type="button" class="btn btn-primary pull-right <?php if(!$bukkit){echo 'disabled';}?>" value="<?php if(!$bukkit){echo 'Indisponible';}else{echo 'Installer ce plugin';}?>"/>
								</form>
							</div>
						</div>	
					</div>
				</div>
			</div>

			<div class="widget span4">
				<div class="head">Plugins installes <span class="badge badge-success">5</span></div>
				<div class="body">
					<div class="installed-plugins">
						Nom du plugin<hr/>
						Essentials <a class="btn btn-danger pull-right"><i class="icon icon-white icon-trash"></i></a> <hr/>
						Jobs <a class="btn btn-danger pull-right"><i class="icon icon-white icon-trash"></i></a> <hr/>
						Factions <a class="btn btn-danger pull-right"><i class="icon icon-white icon-trash"></i></a> <hr/>
						GroupManager <a class="btn btn-danger pull-right"><i class="icon icon-white icon-trash"></i></a> <hr/>
						iConomy <a class="btn btn-danger pull-right"><i class="icon icon-white icon-trash"></i></a> <hr/>
					</div>
				</div>	
			</div>
		</div>
	</div>


</body></html>