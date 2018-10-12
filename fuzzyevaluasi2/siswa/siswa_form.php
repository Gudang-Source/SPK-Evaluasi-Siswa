<?php 
	$siswaid= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($siswaid) || isset($siswaid)){
	
		$sqlnet="select * from `siswa` where id_siswa='$siswaid'";
		$hasil=mysql_query($sqlnet)or die('Query siswa Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$nama_siswa=$row['nama_siswa']; 
			$id_kelas=$row['id_kelas']; 
			$j_kelamin=$row['j_kelamin']; 
			$alamat=$row['alamat']; 
			$telp=$row['telp']; 
			$datetime=$row['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="siswa_proses.php" method="POST" role="form">
				<legend>Form siswa</legend>
				<input type="hidden" name="form" value="siswa">
				<input type="hidden" name="id_siswa" value="<?php echo (!empty($id_siswa)?$id_siswa:''); ?>">
				
				<div class="form-group">
					<label for="nama_siswa">nama_siswa</label>
					<input name="nama_siswa" type="text" class="form-control" id="nama_siswa" required placeholder="Masukkan nama_siswa" value="<?php echo (!empty($nama_siswa)?$nama_siswa:''); ?>">
				</div>
				<div class="form-group">
					<label for="id_kelas">id_kelas</label>
					<input name="id_kelas" type="text" class="form-control" id="id_kelas" required placeholder="Masukkan id_kelas" value="<?php echo (!empty($id_kelas)?$id_kelas:''); ?>">
				</div>
				<div class="form-group">
					<label for="j_kelamin">j_kelamin</label>
					<input name="j_kelamin" type="text" class="form-control" id="j_kelamin" required placeholder="Masukkan j_kelamin" value="<?php echo (!empty($j_kelamin)?$j_kelamin:''); ?>">
				</div>
				<div class="form-group">
					<label for="alamat">alamat</label>
					<input name="alamat" type="text" class="form-control" id="alamat" required placeholder="Masukkan alamat" value="<?php echo (!empty($alamat)?$alamat:''); ?>">
				</div>
				<div class="form-group">
					<label for="telp">telp</label>
					<input name="telp" type="text" class="form-control" id="telp" required placeholder="Masukkan telp" value="<?php echo (!empty($telp)?$telp:''); ?>">
				</div>
				<div class="form-group">
					<label for="datetime">datetime</label>
					<input name="datetime" type="text" class="form-control" id="datetime" required placeholder="Masukkan datetime" value="<?php echo (!empty($datetime)?$datetime:''); ?>">
				</div>
				<button name="<?php echo !empty($id_siswa)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="siswa.php" class="btn btn-warning">Batal</a>
	
		$sqlnet="select * from `siswa` where nim='$siswaid'";
		$hasil=mysql_query($sqlnet)or die('Query siswa Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$nama_siswa=$row['nama_siswa']; 
			$id_kelas=$row['id_kelas']; 
			$j_kelamin=$row['j_kelamin']; 
			$alamat=$row['alamat']; 
			$telp=$row['telp']; 
			$datetime=$row['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="siswa_proses.php" method="POST" role="form">
				<legend>Form siswa</legend>
				<input type="hidden" name="form" value="siswa">
				<input type="hidden" name="nim" value="<?php echo (!empty($nim)?$nim:''); ?>">
				
				<div class="form-group">
					<label for="nama_siswa">nama_siswa</label>
					<input name="nama_siswa" type="text" class="form-control" id="nama_siswa" required placeholder="Masukkan nama_siswa" value="<?php echo (!empty($nama_siswa)?$nama_siswa:''); ?>">
				</div>
				<div class="form-group">
					<label for="id_kelas">id_kelas</label>
					<input name="id_kelas" type="text" class="form-control" id="id_kelas" required placeholder="Masukkan id_kelas" value="<?php echo (!empty($id_kelas)?$id_kelas:''); ?>">
				</div>
				<div class="form-group">
					<label for="j_kelamin">j_kelamin</label>
					<input name="j_kelamin" type="text" class="form-control" id="j_kelamin" required placeholder="Masukkan j_kelamin" value="<?php echo (!empty($j_kelamin)?$j_kelamin:''); ?>">
				</div>
				<div class="form-group">
					<label for="alamat">alamat</label>
					<input name="alamat" type="text" class="form-control" id="alamat" required placeholder="Masukkan alamat" value="<?php echo (!empty($alamat)?$alamat:''); ?>">
				</div>
				<div class="form-group">
					<label for="telp">telp</label>
					<input name="telp" type="text" class="form-control" id="telp" required placeholder="Masukkan telp" value="<?php echo (!empty($telp)?$telp:''); ?>">
				</div>
				<div class="form-group">
					<label for="datetime">datetime</label>
					<input name="datetime" type="text" class="form-control" id="datetime" required placeholder="Masukkan datetime" value="<?php echo (!empty($datetime)?$datetime:''); ?>">
				</div>
				<button name="<?php echo !empty($nim)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="siswa.php" class="btn btn-warning">Batal</a>
	
</form>