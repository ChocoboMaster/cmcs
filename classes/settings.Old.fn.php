<?php

	require_once('../config.php');
	
	function showSettings(){
		$parser = parse_ini_file(MC_DIR."server.properties");
			
		//Allow-flight (True, False)
		if($parser['allow-flight']=="1"){
			echo "<tr>
					<td>Allow-flight</td>
					<td>
						<div class='control-group'> 
							<label class='radio inline'><input type='radio' name='optionsRadios1' checked> Activer</label>
							<label class='radio inline'><input type='radio' name='optionsRadios1'> Desactiver</label>
						</div>
					</td>
				</tr>";
		} else {
			echo "<tr>
					<td>Allow-flight</td>
					<td>
						<div class='control-group'> 
							<label class='radio inline'><input type='radio' name='optionsRadios1'> Activer</label>
							<label class='radio inline'><input type='radio' name='optionsRadios1'checked> Desactiver</label>
						</div>
					</td>
				</tr>";
		}
		
		
		//Allow-nether (True, False)
		if($parser['allow-nether']=="1"){
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
		
		
		//Difficulty (Peaceful, Easy, Nomral, Hard)
		// 0 = Peaceful
		// 1 = Easy 
		// 2 = Normal
		// 3 = Hard
		echo "<tr>
			<td>Difficulty</td>
			<td>
				<select>
					<option "; echo $parser['difficulty']=="0" ? "selected":""; echo ">Peaceful</option>
					<option "; echo $parser['difficulty']=="1" ? "selected":""; echo ">Easy</option>
					<option "; echo $parser['difficulty']=="2" ? "selected":""; echo ">Normal</option>
					<option "; echo $parser['difficulty']=="3" ? "selected":""; echo ">Hard</option>
				</select>
			</td>
		</tr>";
		
		
		
		//Gamemodes (Creative, Survival, Adventure)
		// 0 = Survival
		// 1 = Creative
		// 2 = Adventure
		echo "<tr>
			<td>Gamemodes</td>
			<td>
				<select>
					<option "; echo $parser['difficulty']=="0" ? "selected":""; echo ">Survival</option>
					<option "; echo $parser['difficulty']=="1" ? "selected":""; echo ">Creative</option>
				</select>
			</td>
		</tr>";
		
		
		//grow-trees (True, False)
		if($parser['grow-trees']=="1"){
			echo "<tr>
				<td>Grow-trees</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios2' checked> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios2'> Desactiver</label>
					</div>
				</td>
			</tr>";
		} else {
			echo "<tr>
				<td>Grow-trees</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios2'> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios2' checked> Desactiver</label>
					</div>
				</td>
			</tr>";
		}
		
					
		//level-name
		echo "<tr>
				<td>level-name</td>
				<td>
					<input type='text' placeholder='Level name...' value='".$parser['level-name']."'/>
				</td>
			</tr>";
			
			
		//MOTD			
		echo "<tr>
				<td>MOTD</td>
				<td>
					<input type='text' placeholder='Message of the day...' value='".$parser['motd']."'/>
				</td>
			</tr>";
		
		
		
		//Online-mode (True, False)
		if($parser['online-mode']=="1"){
			echo "<tr>
				<td>Online-mode</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios4' checked> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios4'> Desactiver</label>
					</div>
				</td>
			</tr>";
		} else {
			echo "<tr>
				<td>Online-mode</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios4'> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios4' checked> Desactiver</label>
					</div>
				</td>
			</tr>";
		}
		
		
		//Pvp (True, False)
		if($parser['pvp']=="1"){
			echo "<tr>
				<td>PvP</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios5' checked> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios5'> Desactiver</label>
					</div>
				</td>
			</tr>";
		} else {
			echo "<tr>
				<td>PvP</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios5'> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios5' checked> Desactiver</label>
					</div>
				</td>
			</tr>";
		}
		
		
		//Spawn-animals (True, False)
		if($parser['spawn-animals']=="1"){
			echo "<tr>
				<td>Sapwn-animals</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios6' checked> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios6'> Desactiver</label>
					</div>
				</td>
			</tr>";
		} else {
			echo "<tr>
				<td>Spawn-animals</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios6'> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios6' checked> Desactiver</label>
					</div>
				</td>
			</tr>";
		}
		
		
		//Spawn-monsters (True, False)
		if($parser['spawn-monsters']=="1"){
			echo "<tr>
				<td>Spawn-monsters</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios7' checked> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios7'> Desactiver</label>
					</div>
				</td>
			</tr>";
		} else {
			echo "<tr>
				<td>Spawn-monsters</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios7'> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios7' checked> Desactiver</label>
					</div>
				</td>
			</tr>";
		}
		
		
		//Generate-structure (True, False)
		if($parser['generate-structures']=="1"){
			echo "<tr>
				<td>Generate-structure</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios8' checked> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios8'> Desactiver</label>
					</div>
				</td>
			</tr>";
		} else {
			echo "<tr>
				<td>Generate-structure</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios8'> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios8' checked> Desactiver</label>
					</div>
				</td>
			</tr>";
		}
		
		
		//Whitelist (True, False)
		if($parser['white-list']=="1"){
			echo "<tr>
				<td>Whitelist</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios9' checked> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios9'> Desactiver</label>
					</div>
				</td>
			</tr>";
		} else {
			echo "<tr>
				<td>Whitelist</td>
				<td>
					<div class='control-group'>
						<label class='radio inline'><input type='radio' name='optionsRadios9'> Activer</label>
						<label class='radio inline'><input type='radio' name='optionsRadios9' checked> Desactiver</label>
					</div>
				</td>
			</tr>";
		}
	}
	
?>