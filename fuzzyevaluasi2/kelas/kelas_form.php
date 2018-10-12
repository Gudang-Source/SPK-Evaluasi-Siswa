<?php 
	$kelasid= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($kelasid) || isset($kelasid)){
	
		$sqlnet="select * from `kelas` where id_kelas='$kelasid'";
		$hasil=mysql_query($sqlnet)or die('Query kelas Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$nama_kelas=$row['nama_kelas']; 
			$tingkatan=$row['tingkatan']; 
			$id_walikelas=$row['id_walikelas']; 
			$datetime=$row['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="kelas_proses.php" method="POST" role="form">
				<legend>Form kelas</legend>
				<input type="hidden" name="form" value="kelas">
				<input type="hidden" name="id_kelas" value="<?php echo (!empty($id_kelas)?$id_kelas:''); ?>">
				
				<div class="form-group">
					<label for="nama_kelas">nama_kelas</label>
					<input name="nama_kelas" type="text" class="form-control" id="nama_kelas" required placeholder="Masukkan nama_kelas" value="<?php echo (!empty($nama_kelas)?$nama_kelas:''); ?>">
				</div>
				<div class="form-group">
					<label for="tingkatan">tingkatan</label>
					<input name="tingkatan" type="text" class="form-control" id="tingkatan" required placeholder="Masukkan tingkatan" value="<?php echo (!empty($tingkatan)?$tingkatan:''); ?>">
				</div>
				<div class="form-group">
					<label for="id_walikelas">id_walikelas</label>
					<input name="id_walikelas" type="text" class="form-control" id="id_walikelas" required placeholder="Masukkan id_walikelas" value="<?php echo (!empty($id_walikelas)?$id_walikelas:''); ?>">
				</div>
				<div class="form-group">
					<label for="datetime">datetime</label>
					<input name="datetime" type="text" class="form-control" id="datetime" required placeholder="Masukkan datetime" value="<?php echo (!empty($datetime)?$datetime:''); ?>">
				</div>
				<button name="<?php echo !empty($id_kelas)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="kelas.php" class="btn btn-warning">Batal</a>
	
</form>