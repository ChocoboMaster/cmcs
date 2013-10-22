<?php
	require_once("classes/pageLoad.fn.php");
	require_once("../config.php");
	
	require_once("classes/players.fn.php");
	
	showHead();
	showTopNav();
?>

<div class="container" style="margin-top: 50px;">
	<?php
		showMenu(getPage());
		showBreadcrumbs(getPage());
	?>
		
		<div class="widget">
			<ul class="nav nav-pills">
				<li class="active"><a href="#tab1" data-toggle="tab">Joueurs Actifs</a></li>
				<li><a href="#tab2" data-toggle="tab">Whitelist</a></li>
				<li><a href="#tab3" data-toggle="tab">Opérateurs</a></li>
			</ul>
			
			<div class="tab-content">
				<div class="tab-pane active" id="tab1">
					<div class="alert alert-info">
						Il n'y a presentement personne dans votre serveur.
					</div>	
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Utilisateur</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>ChocoboMaster</td>
									<td>
										<button type="button" class="btn btn-success disabled"><i class="icon icon-white icon-eye-open"></i> Op</button>
										<button type="button" class="btn btn-danger disabled"><i class="icon icon-white icon-ban-circle"></i> Bannir</button>
										
									</td>
								</tr>
								<tr>
									<td>2</td>
									<td>DarkyFace</td>
									<td>
										<button type="button" class="btn btn-success disabled"><i class="icon icon-white icon-eye-open"></i> Op</button>
										<button type="button" class="btn btn-danger disabled"><i class="icon icon-white icon-ban-circle"></i> Bannir</button>
										
									</td>
								</tr>
							</tbody>
						</table>
					
				</div>
				
				<div class="tab-pane" id="tab2">
					<?php showWhitelist(); ?>
					
					<div class="input-group col-md-4 pull-right">
						<input type="text" class="form-control" name='addWhitelist'>				
						<span class="input-group-btn">
							<button class="btn btn-success" d="addWL" type="button">Ajouter</button>
						</span>
					</div>
					
				</div>
				
				<div class="tab-pane" id="tab3">
					<?php showOperators(); ?>

					
					<div class="input-group col-md-4 pull-right">
						<input type="text" class="form-control" name='addOperator'>				
						<span class="input-group-btn">
							<button class="btn btn-success" d="addOp" type="button">Ajouter</button>
						</span>
					</div>
					
					
				</div>
			</div>
		</div>
	</div>
</div>

<?php
	loadJS();
?>


</html>