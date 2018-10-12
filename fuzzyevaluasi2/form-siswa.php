<?php 
$siswaid= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($siswaid) || isset($siswaid)){
						$sqlnet="select * from siswa where id_siswa='$siswaid'";
						$siswas=mysql_query($sqlnet)or die('Query net Error:'.mysql_error());
						while($siswa=mysql_fetch_array($siswas)){
							$idkelas=$siswa['id_kelas'];
							$nim=$siswa['nim'];
							$nama_siswa=$siswa['nama_siswa'];
							$jkel=$siswa['j_kelamin'];
							$alamat=$siswa['alamat'];
							
						}
					}
 ?>
<form action="proses.php" method="POST" role="form">
				<legend>Form Siswa</legend>
				<input type="hidden" name="form" value="siswa">
				<input type="hidden" name="id_siswa" value="<?php echo (!empty($siswaid)?$siswaid:''); ?>">
			
				<?php 
					$bw=array('Sedikit','Sedang','Banyak');
					$cmt=$bw;
					$ck=array(
						'33.3','66.6','100'); 
				?>
				<div class="form-group"><label for="id_kelas">Kelas</label>
					<div class="input-group">
 		<span class="input-group-btn">
        					<a class="btn btn-success " href="kelas.php"><i class="glyphicon glyphicon-plus"></i></a>

      </span>	
					<select name="id_kelas" id="id_kelas" class="form-control" required="required">
						<option value='0'>Pilih Kelas</option>
						<?php 
						
							$sql="select * from kelas";
							$hasil=mysql_query($sql) or die("Query Error:".$sql);
							if($hasil==true){
								while($row=mysql_fetch_array($hasil)){
									if(empty($idkelas)){
										echo "<option value='".$row['id_kelas']."'>".$row['nama_kelas']."</option>";
									}elseif(!empty($idkelas)){
										if($row['id_kelas']==$idkelas){
									// }elseif($idkelas==$row['id_kelas']){
									// }else{
										echo "<option value='".$idkelas."' selected='selected'>".$row['nama_kelas']."</option>";
										$idkelas='';
										}else{
										echo "<option value='".$idkelas."'>".$row['nama_kelas'].$idkelas."</option>";
	
										}

									}
								}
							}
						
						 ?>
						
					</select>
					 
</div>
		
					 
				</div>
				
				<div class="form-group">
					<label for="nim">NIS</label>
					<input name="nim" type="text" class="form-control" id="nim" required placeholder="Masukkan Nilai Prestasi" value="<?php echo (!empty($nim)?$nim:''); ?>">
				</div>
				<div class="form-group">
					<label for="nama_siswa">Nama Siswa</label>
					<input name="nama_siswa" type="text" class="form-control" id="nama_siswa" required placeholder="Masukkan Nilai Prestasi" value="<?php echo (!empty($nama_siswa)?$nama_siswa:''); ?>">
				</div>
				<div class="form-group">
					<label for="j_kelamin">Jenis Kelamin</label><br/>
					<input name="j_kelamin" type="radio"  id="j_kelamin" required  value="L" <?php if(!empty($jkel)&&$jkel=='L'){ echo "checked='checked'";} ?>> Laki-laki
					<input name="j_kelamin" type="radio"  id="j_kelamin" required  value="P" <?php if(!empty($jkel)&&$jkel=='P'){ echo "checked='checked'";} ?>> Perempuan
				</div>
				
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Siswa"><?php echo (!empty($alamat)?$alamat:''); ?></textarea>
				</div>
				
				<div class="form-group">
					<label for="telp">Telpon</label>
					<input name="telp" type="text" class="form-control" id="telp"  placeholder="Masukkan Nilai Prestasi" value="<?php echo (!empty($telp)?$telp:''); ?>">
				</div>
			
				<button name="<?php echo !empty($siswaid)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="siswa.php" class="btn btn-warning">Batal</a>
			</form>