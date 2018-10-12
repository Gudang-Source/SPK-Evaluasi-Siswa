<?php //require('koneksi.php') ?>
<?php 
$idkelas= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($idkelas) || isset($idkelas)){
						$sqlkelas="select * from kelas a left join walikelas b on a.id_walikelas=b.id_walikelas where id_kelas='$idkelas'";
						$kelass=mysql_query($sqlkelas)or die('Query Kelas Error:'.mysql_error());
						while($kelas=mysql_fetch_array($kelass)){
							$kelasname=$kelas['nama_kelas'];
							$idwalikelas=$kelas['id_walikelas'];
							$nama_walikelas=$kelas['nama_walikelas'];
							$tingkatan=$kelas['tingkatan'];
						}
					}
 ?>

	<form action="proses.php" method="POST" role="form">
				<legend>Form Kelas</legend>
				<input type="hidden" name="form" value="kelas">
				<input type="hidden" name="id_kelas" value="<?php echo (!empty($idkelas)?$idkelas:''); ?>">
				<?php 
				// echo isset($idkelas)?$idkelas:'kosong';

				 ?>
				<div class="form-group">
					<label for="kelas">Kelas</label>
					<input name="nama_kelas" type="text" class="form-control" id="kelas" required="required" placeholder="Masukkan Kelas" value="<?php echo (!empty($kelasname)?$kelasname:''); ?>">
					
				</div>
				<div class="form-group">
					<label for="tingkatan">Tingkatan</label>
					<input name="tingkatan" type="text" class="form-control" id="tingkatan" required="required" placeholder="Masukkan Tingkatan" value="<?php echo (!empty($tingkatan)?$tingkatan:''); ?>">
					
				</div>
				<div class="form-group">
					<label for="id_walikelas">Wali Kelas</label>
					<div class="input-group">
 					<span class="input-group-btn">
        					<a class="btn btn-success " href="walikelas.php"><i class="glyphicon glyphicon-plus"></i></a>

      </span>	
					<select name="id_walikelas" id="walikelas" class="form-control" required="required">
						<option value='0' selected>Pilih Wali Kelas</option>
						<?php 
						
							$sql="select * from walikelas";
							$hasil=mysql_query($sql) or die("Query Error:".$sql);
							if($hasil==true){
								while($row=mysql_fetch_array($hasil)){
									if(empty($idwalikelas)){
										echo "<option value='".$row['id_walikelas']."'>".$row['nama_walikelas']."</option>";
									}else{
										echo "<option value='".$idwalikelas."'' selected>$nama_walikelas</option>";
										$idwalikelas='';
									}
								}
							}
						
						 ?>
						
					</select>
				</div>
				</div>
				
				

			
				<button name="<?php echo !empty($idkelas)?'save':'submit'; ?>" type="submit" class="btn btn-primary"><?php echo !empty($idkelas)?'Simpan':'Tambah Data'; ?></button>
				<a href="kelas.php" class="btn btn-warning">Batal</a>
			</form>
