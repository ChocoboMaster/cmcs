<?php include("top.inc.php"); ?>

	<div class="container-fluid span10">
		<div class="row-fluid">
			<div class="place spacer span12">
				<hr/>
				<span style="width: 500px; margin-left:30px;">Accueil > Backups</span> <span class="pull-right" style="width: 400px; text-align:right; margin-right:30px;">Type de serveur: Minecraft</span>
				<hr/>
			</div>
		</div>

		<div class="row-fluid">
			<div class="widget span6">
				<div class="head">Cr&eacute;er un Backup Journalier</div>
				<div class="body">
					Heure : <select class="span2">
								<?php 
									for($i=0;$i<24;$i++){
										$t = $i."h";
										echo "<option>".$t."</option>";
									}
								?>
							</select>
							<select class="span2">
								<?php 
									for($i=0;$i<60;$i++){

										if($i<10){
											$t = "0".$i;
										}else{
											$t = $i;
										}

										echo "<option>".$t."</option>";
									}
								?>
							</select>
				</div>
				<div class="form-actions">
					<input class="btn btn-primary pull-right" type="submit" value="Cr&eacute;er une t&acirc;che planifi&eacute;e"/>
				</div>
			</div>

			<div class="widget span6">
				<div class="head">Mes Backups <span class="badge badge-success">1</span></div>
				<div class="body">
					<div class="installed-plugins">
						Date<hr/>
						12-04-13 a 12:12<a class="btn btn-success"><i class="icon icon-white icon-download"></i> T&eacute;l&eacute;charger</a><a class="btn btn-warning"><i class="icon icon-white icon-forward"></i> Restauration</a> <a class="btn btn-danger"><i class="icon icon-white icon-trash"></i> Supprimer</a> <hr/>
					</div>
				</div>
				<div class="form-actions">
					<input class="btn btn-primary pull-right" type="submit" value="Cr&eacute;er une sauvegarde manuelle"/>
				</div>
			</div>
		</div>
	</div>

</body></html>