<?php 
	$walikelasid= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($walikelasid) || isset($walikelasid)){
	
		$sqlnet="select * from `walikelas` where id_walikelas='$walikelasid'";
		$hasil=mysql_query($sqlnet)or die('Query walikelas Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$nik_walikelas=$row['nik_walikelas']; 
			$nama_walikelas=$row['nama_walikelas']; 
			$jab_fungsional=$row['jab_fungsional']; 
			$guru_matpel=$row['guru_matpel']; 
			$datetime=$row['datetime']; 
			
                        
			
		}
		
	} ?> 
<form action="walikelas_proses.php" method="POST" role="form">
				<legend>Form walikelas</legend>
				<input type="hidden" name="form" value="walikelas">
				<input type="hidden" name="id_walikelas" value="<?php echo (!empty($id_walikelas)?$id_walikelas:''); ?>">
				
				<div class="form-group">
					<label for="nik_walikelas">nik_walikelas</label>
					<input name="nik_walikelas" type="text" class="form-control" id="nik_walikelas" required placeholder="Masukkan nik_walikelas" value="<?php echo (!empty($nik_walikelas)?$nik_walikelas:''); ?>">
				</div>
				<div class="form-group">
					<label for="nama_walikelas">nama_walikelas</label>
					<input name="nama_walikelas" type="text" class="form-control" id="nama_walikelas" required placeholder="Masukkan nama_walikelas" value="<?php echo (!empty($nama_walikelas)?$nama_walikelas:''); ?>">
				</div>
				<div class="form-group">
					<label for="jab_fungsional">jab_fungsional</label>
					<input name="jab_fungsional" type="text" class="form-control" id="jab_fungsional" required placeholder="Masukkan jab_fungsional" value="<?php echo (!empty($jab_fungsional)?$jab_fungsional:''); ?>">
				</div>
				<div class="form-group">
					<label for="guru_matpel">guru_matpel</label>
					<input name="guru_matpel" type="text" class="form-control" id="guru_matpel" required placeholder="Masukkan guru_matpel" value="<?php echo (!empty($guru_matpel)?$guru_matpel:''); ?>">
				</div>
				<div class="form-group">
					<label for="datetime">datetime</label>
					<input name="datetime" type="text" class="form-control" id="datetime" required placeholder="Masukkan datetime" value="<?php echo (!empty($datetime)?$datetime:''); ?>">
				</div>
				<button name="<?php echo !empty($id_walikelas)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="walikelas.php" class="btn btn-warning">Batal</a>
	
</form>