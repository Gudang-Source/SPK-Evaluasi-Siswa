<?php 
$evalid= isset($_GET['id']) ? $_GET['id'] : '';
					if(!empty($evalid) || isset($evalid)){
						$sqlnet="select * from evaluasi where id_evaluasi='$evalid'";
						$nets=mysql_query($sqlnet)or die('Query net Error:'.mysql_error());
						while($net=mysql_fetch_array($nets)){
							$idsiswa=$net['id_siswa'];
							
							$evalid=$net['id_evaluasi'];
							$prestasi=$net['prestasi'];
							$aktif=$net['keaktifan'];
							$hadir=$net['kehadiran'];
							
						}
					}
 ?>
<form action="proses.php" method="POST" role="form">
				<legend>Form Evaluasi</legend>
				<input type="hidden" name="form" value="evaluasi">
				<input type="hidden" name="id_evaluasi" value="<?php echo (!empty($evalid)?$evalid:''); ?>">
			
				<?php 
					$bw=array('Sedikit','Sedang','Banyak');
					$cmt=$bw;
					$aktif=array(
						'33.3','66.6','100'); 
				?>
				<div class="form-group"><label for="id_siswa">Siswa</label>
					<div class="input-group">
 		<span class="input-group-btn">
        					<a class="btn btn-success " href="siswa.php"><i class="glyphicon glyphicon-plus"></i></a>

      </span>	
					<select name="id_siswa" id="id_siswa" class="form-control" required="required">
						<option value='0'>Pilih Siswa</option>
						<?php 
						
							$sql="select * from siswa";
							$hasil=mysql_query($sql) or die("Query Error:".$sql);
							if($hasil==true){
								while($row=mysql_fetch_array($hasil)){
									if(empty($idsiswa)){
										echo "<option value='".$row['id_siswa']."'>".$row['nama_siswa']."</option>";
									}elseif(!empty($idsiswa)){
										if($row['id_siswa']==$idsiswa){
									// }elseif($idsiswa==$row['id_siswa']){
									// }else{
										echo "<option value='".$idsiswa."' selected='selected'>".$row['nama_siswa']."</option>";
										$idsiswa='';
										}else{
										echo "<option value='".$idsiswa."'>".$row['nama_siswa'].$idsiswa."</option>";
	
										}

									}
								}
							}
						
						 ?>
						
					</select>
					 
</div>
		
					 
				</div>
				
				<div class="form-group">
					<label for="prestasi">Prestasi Siswa</label>
					<input name="prestasi" type="text" class="form-control" id="prestasi" required placeholder="Masukkan Nilai Prestasi" value="<?php echo (!empty($prestasi)?$prestasi:''); ?>">
				</div>
				<div class="form-group">
					<label for="aktif">Keaktifan</label>
					<select name="aktif" id="aktif" class="form-control" required="required">
						<option value='0'>Pilih Keakifan</option>
						
							<?php if(isset($aktif)): ?>
								<?php if($aktif=='33.3'): ?>
								<option value='33.3' selected='selected'>Pasif </option>
								<option value='66.6'>Sedang </option>
								<option value='100'>Aktif </option>
								<?php elseif($aktif=='66.6'): ?>
								<option value='33.3' >Pasif </option>
								<option value='66.6' selected='selected'>Sedang </option>
								<option value='100'>Aktif </option>
								<?php else: ?>
								<option value='33.3' >Pasif </option>
								<option value='66.6' >Sedang </option>
								<option value='100' selected='selected'>Aktif </option>
								<?php endif; ?>
							<?php else: ?>
							<option value='33.3'>Pasif </option>
							<option value='66.6'>Sedang </option>
							<option value='100'>Aktif </option>
							<?php endif; ?>
							
					
					</select>
				</div>
				<div class="form-group">
					<label for="kehadiran">Prosentase Kehadiran Siswa</label>
					<input name="kehadiran" type="text" class="form-control" id="kehadiran" required placeholder="Masukkan Prosentase Kehadiran Siswa" value="<?php echo (!empty($hadir)?$hadir:''); ?>">
				</div>
				
				
			
				<button name="<?php echo !empty($evalid)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="evaluasi.php" class="btn btn-warning">Batal</a>
			</form>