<?php include("top.inc.php"); ?>

	<div class="container-fluid span10">
		<div class="row-fluid">
			<div class="place spacer span12">
				<hr/>
				<span style="width: 500px; margin-left:30px;">Accueil > Propri&eacute;t&eacute;es du serveur</span> <span class="pull-right" style="width: 400px; text-align:right; margin-right:30px;">Type de serveur: Minecraft</span>
				<hr/>
			</div>
		</div>

		<div class="row-fluid">
			<div class="widget span12">
				<div class="head">Propri&eacute;t&eacute;es du serveur</div>
				<div class="body properties">
					<table>
						<tr>
							<td>allow-flight</td><td><input type="radio"/> Activer <input type="radio"/> D&eacute;sactiver</td>
						</tr>
						<tr>
							<td>allow-nether</td><td><input type="radio"/> Activer <input type="radio"/> D&eacute;sactiver</td>
						</tr>
						<tr>
							<td>difficulty</td><td>
								<select>
									<option>Peaceful</option>
									<option>Easy</option>
									<option>Normal</option>
									<option>Hard</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>gamemode</td><td>
								<select>
									<option>Creative</option>
									<option>Survival</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>grow-trees</td><td><input type="radio"/> Activer <input type="radio"/> D&eacute;sactiver</td>
						</tr>
						<tr>
							<td>level-name</td><td><input type="text"/></td>
						</tr>
						<tr>
							<td>level-seed</td><td><input type="text"/></td>
						</tr>
						<tr>
							<td>motd</td><td><input type="text"/></td>
						</tr>
						<tr>
							<td>online-mode</td><td><input type="radio"/> Activer <input type="radio"/> D&eacute;sactiver</td>
						</tr>
						<tr>
							<td>pvp</td><td><input type="radio"/> Activer <input type="radio"/> D&eacute;sactiver</td>
						</tr>
						<tr>
							<td>spawn-animals</td><td><input type="radio"/> Activer <input type="radio"/> D&eacute;sactiver</td>
						</tr>
						<tr>
							<td>spawn-monsters</td><td><input type="radio"/> Activer <input type="radio"/> D&eacute;sactiver</td>
						</tr>
						<tr>
							<td>generate-strucure</td><td><input type="radio"/> Activer <input type="radio"/> D&eacute;sactiver</td>
						</tr>
						<tr>
							<td>white-list</td><td><input type="radio"/> Activer <input type="radio"/> D&eacute;sactiver</td>
						</tr>
					</table>
				</div>
				<div class="form-actions center">
					<a class="btn btn-primary center">Modifier</a>
				</div>
			</div>
		</div>
	</div>
<?php include "core/properties.core.php";
ReadInfo();

?>

</body></html>