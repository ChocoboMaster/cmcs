<?php include("top.inc.php"); ?>

<?php
	
	include_once "core/mysql_dbconnect.inc.php";

	//$data = mysql_query("SELECT max_players,user_id,disk_space,ip,port,version,max_memory FROM servers_mc WHERE id='1' LIMIT 1");
	//$val = mysql_fetch_assoc($data);

?>

			<div class="container-fluid span10">
				<div class="row-fluid">
					<div class="place spacer span12">
						<hr/>
						<span style="width: 500px; margin-left:30px;">Accueil > Dashboard</span> <span class="pull-right" style="width: 400px; text-align:right; margin-right:30px;">Type de serveur: Minecraft</span>
						<hr/>
					</div>
				</div>

				<div class="row-fluid">
					<div class="controls span1">
							<a class="btn"><i class="icon-off"></i><br/>Arr&ecirc;ter</a>
							<a class="btn"><i class="icon-repeat"></i><br/>Red&eacute;marrer</a>
						</div>
						<div id="gauge1" class="200x160px span2" style="width: 200px; height:160px;"></div>
						<div id="gauge2" class="200x160px span2" style="width: 200px; height:160px;"></div>
						<div id="gauge3" class="200x160px span2" style="width: 200px; height:160px;"></div>
						<div id="gauge4" class="200x160px span2" style="width: 200px; height:160px;"></div>
						<div id="gauge5" class="200x160px span2" style="width: 200px; height:160px;"></div>
						<script>
						  var g = new JustGage({
						    id: "gauge1", 
						    value: 0, 
						    min: 0,
							max: 40,
						   // max: <?php echo $val['max_players'];?>,
						    title: "Nombre de joueurs"
						  }); 
						  var h = new JustGage({
						    id: "gauge2", 
						    value: 564, 
						    min: 0,
						    max: 1024,//max: <?php echo $val['max_memory'];?>,
						    title: "Memoire vive"
						  }); 
						  var i = new JustGage({
						    id: "gauge3", 
						    value: 49, 
						    min: 0,
						    max: 100,
						    title: "Utilisation processeur (%)"
						  }); 
						  var j = new JustGage({
						    id: "gauge4", 
						    value: 52, 
						    min: 0,
						    max: 100,
							//max: <?php echo $val['disk_space'];?>,
						    title: "Espace disque (Mb)"
						  }); 
						  var k = new JustGage({
						    id: "gauge5", 
						    value: 67, 
						    min: 0,
						    max: 100,
						    title: "Nombre de bannis"
						  }); 
						</script>
				</div>
			
			
				<div class="row-fluid">
					<div class="widget span12">
						<div class="head">Liens Utiles</div>
						<div class="body utils">
							<div class="row-fluid">
								<a class="btn span2"><i class="icon-user"></i><br/>Joueurs</a>
								<a class="btn span2"><i class="icon-th"></i><br/>Plugins</a>
								<a class="btn span2"><i class="icon-hdd"></i><br/>Backups</a>
								<a class="btn span2"><i class="icon-folder-open"></i><br/>Acc&egrave;s FTP</a>
								<a class="btn span2"><i class="icon-calendar"></i><br/>T&acirc;ches Planifi&eacute;es</a>
								<a class="btn span2"><i class="icon-cog"></i><br/> Propri&eacute;t&eacute;es Serveur</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row-fluid">
					<div class="widget span4">
						<div class="head">Changer de version</div>
						<div class="body">
							<div class="versions">
								<div class="alert">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
								  	Veuillez fermer votre serveur avant d'effectuer un changement de version!
								</div>
								<p>Cette fontion vous permet de changer de version votre serveur:</p>
								<form>
									<select>
										<option>Vanilla - 1.5.2</option>
										<option>Vanilla - 1.5.1</option>
										<option>Vanilla - 1.5.0</option>
										<option>Vanilla - 1.4.7</option>
										<option>Vanilla - 1.4.6</option>
										<option>Vanilla - 1.4.5</option>
										<option>Vanilla - 1.4.4</option>
										<option>Vanilla - 1.4.2</option>
										<option>CraftBukkit - 1.5.2</option>
										<option>CraftBukkit - 1.5.1</option>
										<option>CraftBukkit - 1.5.0</option>
										<option>CraftBukkit - 1.4.7</option>
										<option>CraftBukkit - 1.4.6</option>
										<option>CraftBukkit - 1.4.5</option>
										<option>CraftBukkit - 1.4.4</option>
										<option>CraftBukkit - 1.4.2</option>
									</select>
							</div>
						</div>
									<div class="form-actions">
										<input class="btn btn-primary pull-right" type="submit" value="Changer de version"/>
									</div>
								</form>
						
					</div>
				

					<div class="widget span4">
						<div class="head">Maintenance</div>
						<div class="body">
							<?php

								/**include_once "core/mysql_dbconnect.inc.php";

								$data = mysql_query("SELECT title,text,status FROM maintenances ORDER BY id DESC LIMIT 4");

								while ($row = mysql_fetch_assoc($data)) {
									if($row['status'] == 1){
										echo "<div class='row-fluid'><strong class='span8'>".$row['title']."</strong><span class='badge badge-success pull-right'>Effectu&eacute;</span></div><br/>
											".$row['text']."<hr>";
									}else{
										echo "<div class='row-fluid'><strong class='span8'>".$row['title']."</strong><span class='badge badge-warning pull-right'>En cours</span></div><br/>
											".$row['text']."<hr>";
									}
								}**/

							?>
						</div>
					</div>

					<div class="widget span4">
						<div class="head">Activit&eacute;s</div>
						<div class="body">asd
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body></html>