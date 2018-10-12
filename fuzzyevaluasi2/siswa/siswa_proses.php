<?php 
require('../koneksi.php');
include('../header.php');
include('../functions.php');
?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'siswa':
					$id_siswa= isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
					$nama_siswa=isset($_POST['nama_siswa']) ? clean(htmlspecialchars($_POST['nama_siswa'])) : '';
					$id_kelas=isset($_POST['id_kelas']) ? clean(htmlspecialchars($_POST['id_kelas'])) : '';
					$j_kelamin=isset($_POST['j_kelamin']) ? clean(htmlspecialchars($_POST['j_kelamin'])) : '';
					$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
					$telp=isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
					$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					
					$sql="insert into siswa (nama_siswa,id_kelas,j_kelamin,alamat,telp,datetime,) values ('".$nama_siswa."','".$id_kelas."','".$j_kelamin."','".$alamat."','".$telp."','".$datetime."',)";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data siswa Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','siswa.php');
							
						}else{
							alert('danger','insert','siswa.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'siswa':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_siswa= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('siswa_content.php');
					# code...
					break;
				case 'delete':
					
					delete('siswa','id_siswa',$id_siswa);
					break;
				
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
		case 'siswa':
			$id_siswa= isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
			$nama_siswa=isset($_POST['nama_siswa']) ? clean(htmlspecialchars($_POST['nama_siswa'])) : '';
				$id_kelas=isset($_POST['id_kelas']) ? clean(htmlspecialchars($_POST['id_kelas'])) : '';
				$j_kelamin=isset($_POST['j_kelamin']) ? clean(htmlspecialchars($_POST['j_kelamin'])) : '';
				$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
				$telp=isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
				$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				
			if(isset($id_siswa)):
				$sql="update siswa set nama_siswa='".$nama_siswa."',id_kelas='".$id_kelas."',j_kelamin='".$j_kelamin."',alamat='".$alamat."',telp='".$telp."',datetime='".$datetime."', where id_siswa=".$id_siswa;
					$update=mysql_query($sql)or die('Update Data siswa Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','siswa.php');
						}else{
							alert('danger','update','siswa.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_siswa=isset($id) ? $id : '';
	if(isset($id_siswa)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_siswa;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete siswa ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}

					$nim= isset($_POST['nim']) ? clean(htmlspecialchars($_POST['nim'])) : '';
					$nama_siswa=isset($_POST['nama_siswa']) ? clean(htmlspecialchars($_POST['nama_siswa'])) : '';
					$id_kelas=isset($_POST['id_kelas']) ? clean(htmlspecialchars($_POST['id_kelas'])) : '';
					$j_kelamin=isset($_POST['j_kelamin']) ? clean(htmlspecialchars($_POST['j_kelamin'])) : '';
					$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
					$telp=isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
					$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					
					$sql="insert into siswa (nama_siswa,id_kelas,j_kelamin,alamat,telp,datetime,) values ('".$nama_siswa."','".$id_kelas."','".$j_kelamin."','".$alamat."','".$telp."','".$datetime."',)";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data siswa Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','siswa.php');
							
						}else{
							alert('danger','insert','siswa.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'siswa':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$nim= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('siswa_content.php');
					# code...
					break;
				case 'delete':
					
					delete('siswa','nim',$nim);
					break;
				
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
		case 'siswa':
			$nim= isset($_POST['nim']) ? clean(htmlspecialchars($_POST['nim'])) : '';
			$nama_siswa=isset($_POST['nama_siswa']) ? clean(htmlspecialchars($_POST['nama_siswa'])) : '';
				$id_kelas=isset($_POST['id_kelas']) ? clean(htmlspecialchars($_POST['id_kelas'])) : '';
				$j_kelamin=isset($_POST['j_kelamin']) ? clean(htmlspecialchars($_POST['j_kelamin'])) : '';
				$alamat=isset($_POST['alamat']) ? clean(htmlspecialchars($_POST['alamat'])) : '';
				$telp=isset($_POST['telp']) ? clean(htmlspecialchars($_POST['telp'])) : '';
				$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				
			if(isset($nim)):
				$sql="update siswa set nama_siswa='".$nama_siswa."',id_kelas='".$id_kelas."',j_kelamin='".$j_kelamin."',alamat='".$alamat."',telp='".$telp."',datetime='".$datetime."', where nim=".$nim;
					$update=mysql_query($sql)or die('Update Data siswa Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','siswa.php');
						}else{
							alert('danger','update','siswa.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$nim=isset($id) ? $id : '';
	if(isset($nim)):
		$sqldelete="delete from `".$table."` where ".$field."=".$nim;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete siswa ERROR: ".$sqldelete."-->".mysql_error());
		if($hasil==true){
			alert('success','delete',$table.".php");
		}
	endif;
}

?>


	<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			

			<div class="alert <?php echo $alert ?>">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong><?php echo (!empty($alert_status)?$alert_status:''); ?></strong> <?php echo (!empty($alert_action)?$alert_action:'')." ".(!empty($alert_msg)?$alert_msg:''); ?>
			</div>
			<a href="<?php echo (!empty($url)?$url:'') ?>"  class="btn btn-info">Klik Disini Untuk Kembali </a>
		</div>
	</div>
	</div>
<?php
include('../footer.php');
?>
