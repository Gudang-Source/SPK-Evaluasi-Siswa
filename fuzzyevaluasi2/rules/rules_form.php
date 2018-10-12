<?php 
	$rulesid= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($rulesid) || isset($rulesid)){
	
		$sqlnet="select * from `rules` where rule_id='$rulesid'";
		$hasil=mysql_query($sqlnet)or die('Query rules Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$rulename=$row['rulename']; 
			$prestasi=$row['prestasi']; 
			$kegiatan=$row['kegiatan']; 
			$kehadiran=$row['kehadiran']; 
			$fuzzy_output=$row['fuzzy_output']; 
			$datetime=$row['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="rules_proses.php" method="POST" role="form">
				<legend>Form rules</legend>
				<input type="hidden" name="form" value="rules">
				<input type="hidden" name="rule_id" value="<?php echo (!empty($rule_id)?$rule_id:''); ?>">
				
				<div class="form-group">
					<label for="rulename">rulename</label>
					<input name="rulename" type="text" class="form-control" id="rulename" required placeholder="Masukkan rulename" value="<?php echo (!empty($rulename)?$rulename:''); ?>">
				</div>
				<div class="form-group">
					<label for="prestasi">prestasi</label>
					<input name="prestasi" type="text" class="form-control" id="prestasi" required placeholder="Masukkan prestasi" value="<?php echo (!empty($prestasi)?$prestasi:''); ?>">
				</div>
				<div class="form-group">
					<label for="kegiatan">kegiatan</label>
					<input name="kegiatan" type="text" class="form-control" id="kegiatan" required placeholder="Masukkan kegiatan" value="<?php echo (!empty($kegiatan)?$kegiatan:''); ?>">
				</div>
				<div class="form-group">
					<label for="kehadiran">kehadiran</label>
					<input name="kehadiran" type="text" class="form-control" id="kehadiran" required placeholder="Masukkan kehadiran" value="<?php echo (!empty($kehadiran)?$kehadiran:''); ?>">
				</div>
				<div class="form-group">
					<label for="fuzzy_output">fuzzy_output</label>
					<input name="fuzzy_output" type="text" class="form-control" id="fuzzy_output" required placeholder="Masukkan fuzzy_output" value="<?php echo (!empty($fuzzy_output)?$fuzzy_output:''); ?>">
				</div>
				<div class="form-group">
					<label for="datetime">datetime</label>
					<input name="datetime" type="text" class="form-control" id="datetime" required placeholder="Masukkan datetime" value="<?php echo (!empty($datetime)?$datetime:''); ?>">
				</div>
				<button name="<?php echo !empty($rule_id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="rules.php" class="btn btn-warning">Batal</a>
	
</form>