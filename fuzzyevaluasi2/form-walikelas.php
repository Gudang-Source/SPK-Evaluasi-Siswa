<?php //require('koneksi.php') ?>
<?php 
$idwalikelas= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($idwalikelas) || isset($idwalikelas)){
						$sqlfak="select * from walikelas where id_walikelas='$idwalikelas'";
						$faks=mysql_query($sqlfak)or die('Query Area Error:'.mysql_error());
						while($fak=mysql_fetch_array($faks)){
							$jab_fung=$fak['jab_fungsional'];
							$nik=$fak['nik_walikelas'];
							$idwalikelas=$fak['id_walikelas'];
							$nama_walikelas=$fak['nama_walikelas'];
							$matpel=$fak['guru_matpel'];
						}
					}
 ?>

	<form action="proses.php" method="POST" role="form">
				<legend>Form Wali Kelas</legend>
				<input type="hidden" name="form" value="walikelas">
				<input type="hidden" name="id_walikelas" value="<?php echo (!empty($idwalikelas)?$idwalikelas:''); ?>">
				<?php 
				// echo isset($idwalikelas)?$idwalikelas:'kosong';

				 ?>
				<div class="form-group">
					<label for="nik">NIP Wali Kelas</label>
					<input name="nik" type="text" class="form-control" id="nik" required="required" placeholder="Masukkan Wali Kelas" value="<?php echo (!empty($nik)?$nik:''); ?>">
					
				</div>
				<div class="form-group">
					<label for="nama_walikelas">Nama Wali Kelas</label>
					<input name="nama_walikelas" type="text" class="form-control" id="nama" required="required" placeholder="Masukkan Wali Kelas" value="<?php echo (!empty($nama_walikelas)?$nama_walikelas:''); ?>">
					
				</div>
				<div class="form-group">
					<label for="jab_fung">Jabatan Fungsional</label>
					<input name="jab_fung" type="text" class="form-control" id="jabfung" required="required" placeholder="Masukkan Wali Kelas" value="<?php echo (!empty($jab_fung)?$jab_fung:''); ?>">
					
				</div>
				<div class="form-group">
					<label for="matpel">Guru Mata Pelajaran</label>
					<input name="matpel" type="text" class="form-control" id="guru" required="required" placeholder="Masukkan Wali Kelas" value="<?php echo (!empty($matpel)?$matpel:''); ?>">
					
				</div>
				
				
				
				

			
				<button name="<?php echo !empty($idwalikelas)?'save':'submit'; ?>" type="submit" class="btn btn-primary"><?php echo !empty($idwalikelas)?'Simpan':'Tambah Data'; ?></button>
				<a href="walikelas.php" class="btn btn-warning">Batal</a>
			</form>
