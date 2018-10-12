<?php 
$ruleid= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($ruleid) || isset($ruleid)){
						$sqlrule="select * from rules where rule_id='$ruleid'";
						$rules=mysql_query($sqlrule)or die('Query Rule Error:'.mysql_error());
						while($rule=mysql_fetch_array($rules)){
							$rulename=$rule['rulename'];
							$ruleid=$rule['rule_id'];
							$prestasi=$rule['prestasi'];
							$kegiatan=$rule['kegiatan'];
							$kehadiran=$rule['kehadiran'];
							$fuzzy=$rule['fuzzy_output'];
						}
					}
 ?>
<form action="proses.php" method="POST" role="form">
				<legend>Form Rules</legend>
				<input type="hidden" name="form" value="rules">
				<input type="hidden" name="rule_id" value="<?php echo (!empty($ruleid)?$ruleid:''); ?>">
				<div class="form-group">
					<label for="rulename">Nama Rule</label>
					<input name="rulename" type="text" class="form-control" id="" placeholder="Masukkan Nama Rule" value="<?php echo (!empty($rulename)?$rulename:''); ?>">
				</div>
				<?php 
					$array_prestasi=array('Buruk','Sedang','Baik');
					$array_aktif=array('Pasif','Sedang','Aktif');
					$array_hadir=array('Sering Bolos','Sedang','Rajin'); 
				?>
				<div class="form-group">
					<label for="prestasi">Prestasi Siswa</label>
					<select name="prestasi" id="prestasi" class="form-control" required="required">
						<option value='0' selected>Pilih Prestasi Siswa</option>
						<?php 
						foreach($array_prestasi as $row){
							if(!empty($prestasi)){
								if($prestasi==$row){
								echo "<option value='".$row."' selected>".$row."</option>";
									}else{
								echo "<option value='".$row."' >$row</option>";
									$row='';
								}
							}else{
								echo "<option value='".$row."' >$row</option>";
									// $row='';
							}
							
						}
						 ?>
						
					</select>
				</div>
				<div class="form-group">
					<label for="kegiatan">Partisipasi Kegiatan</label>
					<select name="kegiatan" id="kegiatan" class="form-control" required="required">
						<option value='0' selected>Pilih Partisipasi Kegiatan</option>
						<?php 
						foreach($array_aktif as $row){
							if(!empty($kegiatan)){
								if($kegiatan==$row){
								echo "<option value='".$row."' selected>".$row."</option>";
									}else{
								echo "<option value='".$row."' >$row</option>";
									$row='';
								}
							}else{
								echo "<option value='".$row."' >$row</option>";
									// $row='';
							}
							
						}
						 ?>
						
					</select>
				</div>
				<div class="form-group">
					<label for="kehadiran">Intensitas Kehadiran</label>
					<select name="kehadiran" id="kehadiran" class="form-control" required="required">
						<option value='0' selected>Pilih Kehadiran</option>
						<?php 
						foreach($array_hadir as $row){
							if(!empty($kehadiran)){
								if($kehadiran==$row){
								echo "<option value='".$row."' selected>".$row."</option>";
									}else{
								echo "<option value='".$row."' >$row</option>";
									$row='';
								}
							}else{
								echo "<option value='".$row."' >$row</option>";
									// $row='';
							}
							
						}
						 ?>
						
					</select>
				</div>
			<div class="form-group">
					<label for="fuzzy">Fuzzy Output</label>
					<input name="fuzzy" type="text" class="form-control" id="fuzzy" placeholder="Fuzzy Output" value="<?php echo (!empty($fuzzy)?$fuzzy:''); ?>">
				</div>
				
			
				<button name="<?php echo !empty($ruleid)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="rules.php" class="btn btn-warning">Batal</a>
			</form>