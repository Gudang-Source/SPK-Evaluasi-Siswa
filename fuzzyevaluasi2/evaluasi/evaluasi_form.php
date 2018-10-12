<?php 
	$evaluasiid= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($evaluasiid) || isset($evaluasiid)){
	
		$sqlnet="select * from `evaluasi` where id_evaluasi='$evaluasiid'";
		$hasil=mysql_query($sqlnet)or die('Query evaluasi Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$id_siswa=$row['id_siswa']; 
			$prestasi=$row['prestasi']; 
			$keaktifan=$row['keaktifan']; 
			$kehadiran=$row['kehadiran']; 
			$datetime=$row['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="evaluasi_proses.php" method="POST" role="form">
				<legend>Form evaluasi</legend>
				<input type="hidden" name="form" value="evaluasi">
				<input type="hidden" name="id_evaluasi" value="<?php echo (!empty($id_evaluasi)?$id_evaluasi:''); ?>">
				
				<div class="form-group">
					<label for="id_siswa">id_siswa</label>
					<input name="id_siswa" type="text" class="form-control" id="id_siswa" required placeholder="Masukkan id_siswa" value="<?php echo (!empty($id_siswa)?$id_siswa:''); ?>">
				</div>
				<div class="form-group">
					<label for="prestasi">prestasi</label>
					<input name="prestasi" type="text" class="form-control" id="prestasi" required placeholder="Masukkan prestasi" value="<?php echo (!empty($prestasi)?$prestasi:''); ?>">
				</div>
				<div class="form-group">
					<label for="keaktifan">keaktifan</label>
					<input name="keaktifan" type="text" class="form-control" id="keaktifan" required placeholder="Masukkan keaktifan" value="<?php echo (!empty($keaktifan)?$keaktifan:''); ?>">
				</div>
				<div class="form-group">
					<label for="kehadiran">kehadiran</label>
					<input name="kehadiran" type="text" class="form-control" id="kehadiran" required placeholder="Masukkan kehadiran" value="<?php echo (!empty($kehadiran)?$kehadiran:''); ?>">
				</div>
				<div class="form-group">
					<label for="datetime">datetime</label>
					<input name="datetime" type="text" class="form-control" id="datetime" required placeholder="Masukkan datetime" value="<?php echo (!empty($datetime)?$datetime:''); ?>">
				</div>
				<button name="<?php echo !empty($id_evaluasi)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="evaluasi.php" class="btn btn-warning">Batal</a>
	
</form>