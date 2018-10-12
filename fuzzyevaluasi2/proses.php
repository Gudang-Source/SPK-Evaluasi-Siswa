<?php 

require('koneksi.php');
include('header.php');
?>


<?php
if(isset($_POST['submit'])){
	$form= isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'evaluasi':
					$idsiswa= isset($_POST['id_siswa']) ? clean($_POST['id_siswa']) : '';
					$prestasi= isset($_POST['prestasi']) ? clean($_POST['prestasi']) : '';
					$aktif= isset($_POST['aktif']) ? clean($_POST['aktif']) : '';
					$hadir= isset($_POST['kehadiran']) ? clean($_POST['kehadiran']) : '';
					
								
						$sql="insert into evaluasi (id_siswa,prestasi,keaktifan,kehadiran) values ('".$idsiswa."','".$prestasi."','".$aktif."','".$hadir."')";
						
						$insert=mysql_query($sql)or die('Insert Data Evaluasi Error:'.mysql_error());
						if($insert==true){
							// echo $sql;
							alert('success','insert','evaluasi.php');
							
						}else{
							alert('danger','insert','evaluasi.php');
						}
					
				break;
			case 'kelas':
					$kelas= isset($_POST['nama_kelas']) ? clean($_POST['nama_kelas']) : '';
					$tingkat= isset($_POST['tingkatan']) ? clean($_POST['tingkatan']) : '';
					$idwali= isset($_POST['id_walikelas']) ? clean($_POST['id_walikelas']) : '';
					$sqlcheck="select * from kelas where nama_kelas='".$kelas."'";
					
					$check=mysql_query($sqlcheck) or die('SQL Check Area Error:'.mysql_error());
					$numcheck=mysql_num_rows($check);

					if($numcheck==0){
						
						
						$sql="insert into kelas (nama_kelas,tingkatan,id_walikelas) values ('".$kelas."','".$tingkat."',".$idwali.")";
						
						$insert=mysql_query($sql)or die('Insert Data Area Error:'.mysql_error());
						if($insert==true){
							// echo $sql;
							alert('success','insert','kelas.php');
							
						}
					}elseif($numcheck>0){
						// echo $sqlcheck;
						alert('danger','insert','kelas.php');
						
					}
				break;
				case 'walikelas':
					$walikelas= isset($_POST['nama_walikelas']) ? clean($_POST['nama_walikelas']) : '';
					$nik= isset($_POST['nik']) ? clean($_POST['nik']) : '';
					$jabfung= isset($_POST['jab_fung']) ? clean($_POST['jab_fung']) : '';
					$matpel= isset($_POST['mat_pel']) ? clean($_POST['mat_pel']) : '';
					$sqlcheck="select * from walikelas where nama_walikelas like '%".$walikelas."%'";
					
					$check=mysql_query($sqlcheck) or die('SQL Check Area Error:'.mysql_error());
					$numcheck=mysql_num_rows($check);

					if($numcheck==0){
						
						
						$sql="insert into walikelas (nama_walikelas,nik_walikelas,jab_fungsional,guru_matpel) values ('".$walikelas."','".$nik."','".$jabfung."','".$matpel."')";
						
						$insert=mysql_query($sql)or die('Insert Data Walikelas Error:'.mysql_error());
						if($insert==true){
							// echo $sql;
							alert('success','insert','walikelas.php');
							
						}
					}elseif($numcheck>0){
						// echo $sqlcheck;
						alert('danger','insert','walikelas.php');
						
					}
				break;
			case 'siswa':
					$idsiswa= isset($_POST['id_siswa']) ? clean($_POST['id_siswa']) : '';
					$idkelas= isset($_POST['id_kelas']) ? clean($_POST['id_kelas']) : '';
					$nim= isset($_POST['nim']) ? clean($_POST['nim']) : '';
					$namasiswa= isset($_POST['nama_siswa']) ? clean($_POST['nama_siswa']) : '';
					$jkel= isset($_POST['j_kelamin']) ? clean($_POST['j_kelamin']) : '';
					$alamat= isset($_POST['alamat']) ? clean($_POST['alamat']) : '';
					$telp= isset($_POST['telp']) ? clean($_POST['telp']) : '';
					$sqlcheck="select * from siswa where id_siswa='".$idsiswa."'";
					
					$check=mysql_query($sqlcheck) or die('SQL Check Siswa Error:'.mysql_error());
					$numcheck=mysql_num_rows($check);

					if($numcheck==0){
						
						
						$sql="insert into siswa (nim,nama_siswa,id_kelas,j_kelamin,alamat,telp) values ('".$nim."','".$namasiswa."',".$idkelas.",'".$jkel."','".$alamat."','".$telp."')";
						
						$insert=mysql_query($sql)or die('Insert Data Siswa Error:'.mysql_error());
						if($insert==true){
							// echo $sql;
							alert('success','insert','siswa.php');
						}
					}elseif($numcheck>0){
						//echo $sqlcheck;
						alert('danger','insert','siswa.php');
					}
			break;
			case 'rules':
					
					$rulename= isset($_POST['rulename']) ? clean($_POST['rulename']) : '';
					$prestasi= isset($_POST['prestasi']) ? clean($_POST['prestasi']) : '';
					$jumlah= isset($_POST['keaktifan']) ? clean($_POST['keaktifan']) : '';
					$hadirice= isset($_POST['kehadiran']) ? clean($_POST['kehadiran']) : '';
					$fuzzy= isset($_POST['fuzzy']) ? clean($_POST['fuzzy']) : '';
					$rid= isset($_POST['rule_id']) ? clean($_POST['rule_id']) : '';
					$sqlcheck="select * from rules where rulename='".$rulename."'";
					// echo $prestasi;

					$check=mysql_query($sqlcheck) or die('SQL Check Rule Error:'.mysql_error());
					$numcheck=mysql_num_rows($check);

					if($numcheck==0){
						
						
						$sql="insert into rules (rulename,trafik_jaringan_b,j_pelanggan_cmt,kualitas_ck,fuzzy_output) values ('".$rulename."','".$prestasi."','".$jumlah."','".$hadirice."','".$fuzzy."')";
						
						$insert=mysql_query($sql)or die('Insert Data Rule Error:'.mysql_error());
						if($insert==true){
							// echo $sql;
							alert('success','insert','rules.php');
						}
					}elseif($numcheck>0){
						// echo $sqlcheck;
						alert('danger','insert','rules.php');
					}
			break;
			default:
				# code...
				break;
		}
					
}
if(isset($_POST['save'])){
	$form= isset($_POST['form']) ? $_POST['form'] : '';
	switch ($form) {
		case 'kelas':
				$kelas= isset($_POST['nama_kelas']) ? clean($_POST['nama_kelas']) : '';
				$tingkat= isset($_POST['tingkatan']) ? clean($_POST['tingkatan']) : '';
				$idkelas= isset($_POST['id_kelas']) ? clean($_POST['id_kelas']) : '';
				$idwali= isset($_POST['id_walikelas']) ? clean($_POST['id_walikelas']) : '';
					

					
					if(isset($idkelas)):
						
							
							
							$sql="update kelas set `nama_kelas`='".$kelas."', `tingkatan`=".$tingkat.",id_walikelas='".$idwali."' where id_kelas=".$idkelas;
							
							$update=mysql_query($sql)or die('Update Data Area Error:'.mysql_error());
							if($update==true){
								// echo $sql;
								alert('success','update','kelas.php');
								
							
						}
					endif;
			# code...
			break;
		case 'siswa':
					$nim= isset($_POST['nim']) ? clean($_POST['nim']) : '';
					$namasiswa= isset($_POST['nama_siswa']) ? clean($_POST['nama_siswa']) : '';
					$idsiswa= isset($_POST['id_siswa']) ? clean($_POST['id_siswa']) : '';
					$idkelas= isset($_POST['id_kelas']) ? clean($_POST['id_kelas']) : '';
					$jkel= isset($_POST['j_kelamin']) ? clean($_POST['j_kelamin']) : '';
					$alamat= isset($_POST['alamat']) ? clean($_POST['alamat']) : '';
					$telp= isset($_POST['telp']) ? clean($_POST['telp']) : '';
					
					
					if(isset($idsiswa)):
						
							
							
							$sql="update siswa set nim='".$nim."',nama_siswa='".$namasiswa."',id_kelas='".$idkelas."',j_kelamin='".$jkel."',alamat='".$alamat."',telp='".$telp."' where id_siswa=".$idsiswa;
							
							$update=mysql_query($sql)or die('Update Data Siswa Error:'.mysql_error());
							if($update==true){
								// echo $sql;
								alert('success','update','siswa.php');
							
						}
					endif;
			break;
		case 'walikelas':
					$idwali= isset($_POST['id_walikelas']) ? clean($_POST['id_walikelas']) : '';
					$walikelas= isset($_POST['nama_walikelas']) ? clean($_POST['nama_walikelas']) : '';
					$nik= isset($_POST['nik']) ? clean($_POST['nik']) : '';
					$jabfung= isset($_POST['jab_fung']) ? clean($_POST['jab_fung']) : '';
					$matpel= isset($_POST['matpel']) ? clean($_POST['matpel']) : '';
					
					
					if(isset($idwali)):
						
							
							
							$sql="update walikelas set nama_walikelas='".$walikelas."',nik_walikelas='".$nik."',jab_fungsional='".$jabfung."',guru_matpel='".$matpel."' where id_walikelas=".$idwali;
							
							$update=mysql_query($sql)or die('Update Data Jurusan Error:'.mysql_error());
							if($update==true){
								// echo $sql;
								alert('success','update','walikelas.php');
							
						}
					endif;
			break;
		case 'rules':
					$rid= isset($_POST['rule_id']) ? clean($_POST['rule_id']) : '';
					$rulename= isset($_POST['rulename']) ? clean($_POST['rulename']) : '';
					$prestasi= isset($_POST['prestasi']) ? clean($_POST['prestasi']) : '';
					$jumlah= isset($_POST['keaktifan']) ? clean($_POST['keaktifan']) : '';
					$hadirice= isset($_POST['kehadiran']) ? clean($_POST['kehadiran']) : '';
					$fuzzy= isset($_POST['fuzzy']) ? clean($_POST['fuzzy']) : '';
					
					if(isset($rid)):
						
							
							
							$sql="update rules set rulename='".$rulename."',trafik_jaringan_b='".$prestasi."',j_pelanggan_cmt='".$jumlah."',kualitas_ck='".$hadirice."',fuzzy_output='".$fuzzy."' where rule_id=".$rid;
							
							$update=mysql_query($sql)or die('Update Data Rule Error:'.mysql_error());
							if($update==true){
								// echo $sql;
								alert('success','update','rules.php');
							
						}
					endif;
		break;
		case 'evaluasi':
					$ideval= isset($_POST['id_evaluasi']) ? clean($_POST['id_evaluasi']) : '';
					$idsiswa= isset($_POST['id_siswa']) ? clean($_POST['id_siswa']) : '';
					$prestasi= isset($_POST['prestasi']) ? clean($_POST['prestasi']) : '';
					$aktif= isset($_POST['aktif']) ? clean($_POST['aktif']) : '';
					$hadir= isset($_POST['kehadiran']) ? clean($_POST['kehadiran']) : '';
					
					
					if(isset($ideval)):
						
							
							
							$sql="update evaluasi set id_siswa='".$idsiswa."',prestasi='".$prestasi."',keaktifan='".$aktif."',kehadiran='".$hadir."' where id_evaluasi=".$ideval;
							
							$update=mysql_query($sql)or die('Update Data Evaluasi Error:'.mysql_error());
							if($update==true){
								// echo $sql;
								alert('success','update','evaluasi.php');
								
							
						}
					endif;
		break;
		default:
			# code...
			break;
	}
					
}
if(!isset($_POST['submit'])){
	$form= isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'kelas':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$idkelas= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-kelas.php');


					# code...
					break;
				case 'delete':
					
					delete('kelas','id_kelas',$idkelas);
					break;
				default:
					# code...
					break;
			}
			# code...
			break;
		case 'walikelas':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-walikelas.php');


					# code...
					break;
				case 'delete':
					
					delete('walikelas','id_walikelas',$id);
					break;
				default:
					# code...
					break;
			}
			break;
		case 'siswa':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$idsiswa= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-siswa.php');


					# code...
					break;
				case 'delete':
					
					delete('siswa','id_siswa',$idsiswa);
					break;
				default:
					# code...
					break;
			}
		break;
		case 'rules':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$rid= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-rules.php');


					# code...
					break;
				case 'delete':
					
					delete('rules','rule_id',$rid);
					break;
				default:
					# code...
					break;
			}
		break;
		case 'evaluasi':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$nid= isset($_GET['id']) ? $_GET['id'] : '';
			switch ($a) {
				case 'edit':
					
					include('content-evaluasi.php');


					# code...
					break;
				case 'delete':
					
					delete('evaluasi','net_id',$nid);
					break;
				default:
					# code...
					break;
			}
		break;
		default:
			# code...
			break;
	}
	
	?>
	
	<?php
}	
?>


<?php
function alert($type=null,$action=null,$url=null){
	switch ($type) {
		case 'success':
			$alert_msg='berhasil...';
			$alert='alert-success';
			$alert_status='Sukses:';
			# code...
			break;
		case 'warning':
			$alert_msg='harus diperhatikan...';
			$alert='alert-warning';
			$alert_status='Perhatian!:';
			# code...
			break;
		case 'danger':
			$alert_msg='gagal dilakukan...';
			$alert='alert-danger';
			$alert_status='Kesalahan:';
			# code...
			break;
		
		default:
			# code...
			break;
	}
	switch ($action) {
		case 'insert':
		$alert_action='Input Data Baru';
		
			# code...
			break;
		case 'update':
			$alert_action='Update Data';
			# code...
			break;
		case 'delete':
			$alert_action='Hapus Data';
			# code...
			break;
		
		default:
			# code...
			break;
	}
	?>
	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			

			<div class="alert <?php echo $alert ?>">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong><?php echo $alert_status; ?></strong> <?php echo $alert_action." ".$alert_msg; ?>
			</div>
			<a href="<?php echo $url ?>"  class="btn btn-info">Klik Disini Untuk Kembali </a>
		</div>
	</div>
</div>
						
	<?php

}


function clean($value){
   return mysql_real_escape_string($value);
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$idsiswa=isset($id) ? $id : '';
	if(isset($idsiswa)):
						$sqldelete="delete from `".$table."` where ".$field."=".$idsiswa;
						// $sqldelete="delete from `kelas` where id_siswa=".$idsiswa;
						$hasil=mysql_query($sqldelete)or die("SQL Delete ERROR:".$sqldelete."-->".mysql_error());
						if($hasil==true){
							alert('success','delete',$table.".php");
						}
					endif;
}
include('footer.php');
 ?>
