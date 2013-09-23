<?php

	require_once('../config.php');
	
	function showSettings(){
		readSettings();
		
		
	}
	
	function readSettings(){
		$lines = file(MC_DIR."server.properties");
		
		//Allow-nether (True, False)
		if(mb_substr($lines[3], -6)=="true"){
			echo "<tr>
				<td>Allow-nether</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios2' checked> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios2'> Desactiver</label>
					</div>
				</td>
			</tr>";
		} else {
			echo "<tr>
				<td>Allow-nether</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios2'> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios2' checked> Desactiver</label>
					</div>
				</td>
			</tr>";
		}
		echo mb_substr($lines[3], -6);
	}
?>