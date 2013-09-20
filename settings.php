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
		<div class="widget">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Parametre</th>
						<th>Valeur</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Allow-flight</td>
						<td>
							<div class="control-group"> 
								<label class="radio inline"><input type="radio" name="optionsRadios1" checked> Activer</label>
								<label class="radio inline"><input type="radio" name="optionsRadios1"> Desactiver</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Allow-nether</td>
						<td>
							<div class="control-group">
								<label class="radio inline"><input type="radio" name="optionsRadios2" checked> Activer</label>
								<label class="radio inline"><input type="radio" name="optionsRadios2"> Desactiver</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Difficulty</td>
						<td>
							<select>
								<option>Peaceful</option>
								<option>Easy</option>
								<option>Normal</option>
								<option>Hard</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>Gamemode</td>
						<td>
							<select>
								<option>Creative</option>
								<option>Survival</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>grow-trees</td>
						<td>
							<div class="control-group">
								<label class="radio inline"><input type="radio" name="optionsRadios3" checked> Activer</label>
								<label class="radio inline"><input type="radio" name="optionsRadios3"> Desactiver</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>level-name</td>
						<td>
							<input type="text" placeholder="Level name...">
						</td>
					</tr>
					<tr>
						<td>MOTD</td>
						<td>
							<input type="text" placeholder="Message of the day...">
						</td>
					</tr>
					<tr>
						<td>Online-mode</td>
						<td>
							<div class="control-group">
								<label class="radio inline"><input type="radio" name="optionsRadios4" checked> Activer</label>
								<label class="radio inline"><input type="radio" name="optionsRadios4"> Desactiver</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>PvP</td>
						<td>
							<div class="control-group">
								<label class="radio inline"><input type="radio" name="optionsRadios5" checked> Activer</label>
								<label class="radio inline"><input type="radio" name="optionsRadios5"> Desactiver</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Spawn-animals</td>
						<td>
							<div class="control-group">
								<label class="radio inline"><input type="radio" name="optionsRadios6" checked> Activer</label>
								<label class="radio inline"><input type="radio" name="optionsRadios6"> Desactiver</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Spawn-monsters</td>
						<td>
							<div class="control-group">
								<label class="radio inline"><input type="radio" name="optionsRadios7" checked> Activer</label>
								<label class="radio inline"><input type="radio" name="optionsRadios7"> Desactiver</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Generate-structure</td>
						<td>
							<div class="control-group">
								<label class="radio inline"><input type="radio" name="optionsRadios8" checked> Activer</label>
								<label class="radio inline"><input type="radio" name="optionsRadios8"> Desactiver</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>Whitelist</td>
						<td>
							<div class="control-group">
								<label class="radio inline"><input type="radio" name="optionsRadios9" checked> Activer</label>
								<label class="radio inline"><input type="radio" name="optionsRadios9"> Desactiver</label>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Modifier</button>
		</div>
	</div>
	</div>
</div>



</html>