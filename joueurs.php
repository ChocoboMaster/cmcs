<?php include("top.inc.php"); ?>

	<div class="container-fluid span10">
		<div class="row-fluid">
			<div class="place spacer span12">
				<hr/>
				<span style="width: 500px; margin-left:30px;">Accueil > Joueurs</span> <span class="pull-right" style="width: 400px; text-align:right; margin-right:30px;">Type de serveur: Minecraft</span>
				<hr/>
			</div>
		</div>


		<div class="widget">
			<div class="head">Joueurs</div>
			<div class="body">
				<div class="joueurs">
					<div class="tabbable"> <!-- Only required for left/right tabs -->
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Joueurs en ligne</a></li>
							<li><a href="#tab2" data-toggle="tab">Joueurs Whitelist&eacute;s</a></li>
							<li><a href="#tab3" data-toggle="tab">Joueurs Bannis</a></li>
							<li><a href="#tab4" data-toggle="tab">Op&eacute;rateurs</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<table class="span12"><tr><td>Pseudo</td><td>Actions</td></tr>
									<tr><td>ChocoboMaster</td><td><a class="btn btn-success disabled"><i class="icon icon-white icon-eye-open"></i> Op</a>
											<a class="btn btn-danger"><i class="icon icon-white icon-ban-circle"></i> Ban</a>
											<a class="btn btn-warning"><i class="icon icon-white icon-eject"></i> Kick</a>
											<a class="btn btn-warning"><i class="icon icon-white icon-fire"></i> Kill</a>
											<a class="btn btn-warning"><i class="icon icon-white icon-trash"></i> Inventaire</a>
									</td></tr>
									<tr><td>Admin</td><td><a class="btn btn-success"><i class="icon icon-white icon-eye-open"></i> Op</a>
											<a class="btn btn-danger"><i class="icon icon-white icon-ban-circle"></i> Ban</a>
											<a class="btn btn-warning"><i class="icon icon-white icon-eject"></i> Kick</a>
											<a class="btn btn-warning"><i class="icon icon-white icon-fire"></i> Kill</a>
											<a class="btn btn-warning"><i class="icon icon-white icon-trash"></i> Inventaire</a>
									</td></tr>
								</table>
							</div>
							<div class="tab-pane" id="tab2">
								<table><tr><td>Pseudo</td><td>Actions</td></tr>
									<tr><td>ChocoboMaster</td><td>
											<a class="btn btn-danger"><i class="icon icon-white icon-ban-circle"></i> Enlever</a>
									</td></tr>
									<tr><td>Admin</td><td>
											<a class="btn btn-danger"><i class="icon icon-white icon-ban-circle"></i> Enlever</a>
									</td></tr>
								</table>
							</div>
							<div class="tab-pane" id="tab3">
								<table><tr><td>Pseudo</td><td>Actions</td></tr>
									<tr><td>ChocoboMaster</td><td><a class="btn btn-success"><i class="icon icon-white icon-eye-open"></i> Un-ban</a>
									</td></tr>
									<tr><td>Admin</td><td><a class="btn btn-success"><i class="icon icon-white icon-eye-open"></i> Un-ban</a>
									</td></tr>
								</table>
							</div>
							<div class="tab-pane" id="tab4">
								<table><tr><td>Pseudo</td><td>Actions</td></tr>
									<tr><td>ChocoboMaster</td><td>
											<a class="btn btn-danger"><i class="icon icon-white icon-ban-circle"></i> Enlever</a>
									</td></tr>
									<tr><td>Admin</td><td>
											<a class="btn btn-danger"><i class="icon icon-white icon-ban-circle"></i> Enlever</a>
									</td></tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

</body></html>