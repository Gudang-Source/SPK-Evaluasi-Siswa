<?php 
require('../koneksi.php');
include('../header.php');
include('../functions.php');
?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'evaluasi':
					$id_evaluasi= isset($_POST['id_evaluasi']) ? clean(htmlspecialchars($_POST['id_evaluasi'])) : '';
					$id_siswa=isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
					$prestasi=isset($_POST['prestasi']) ? clean(htmlspecialchars($_POST['prestasi'])) : '';
					$keaktifan=isset($_POST['keaktifan']) ? clean(htmlspecialchars($_POST['keaktifan'])) : '';
					$kehadiran=isset($_POST['kehadiran']) ? clean(htmlspecialchars($_POST['kehadiran'])) : '';
					$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					
					$sql="insert into evaluasi (id_siswa,prestasi,keaktifan,kehadiran,datetime) values ('".$id_siswa."','".$prestasi."','".$keaktifan."','".$kehadiran."','".$datetime."')";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data evaluasi Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','evaluasi.php');
							
						}else{
							alert('danger','insert','evaluasi.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'evaluasi':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_evaluasi= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('evaluasi_content.php');
					# code...
					break;
				case 'delete':
					
					delete('evaluasi','id_evaluasi',$id_evaluasi);
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
		case 'evaluasi':
			$id_evaluasi= isset($_POST['id_evaluasi']) ? clean(htmlspecialchars($_POST['id_evaluasi'])) : '';
			$id_siswa=isset($_POST['id_siswa']) ? clean(htmlspecialchars($_POST['id_siswa'])) : '';
				$prestasi=isset($_POST['prestasi']) ? clean(htmlspecialchars($_POST['prestasi'])) : '';
				$keaktifan=isset($_POST['keaktifan']) ? clean(htmlspecialchars($_POST['keaktifan'])) : '';
				$kehadiran=isset($_POST['kehadiran']) ? clean(htmlspecialchars($_POST['kehadiran'])) : '';
				$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				
			if(isset($id_evaluasi)):
				$sql="update evaluasi set id_siswa='".$id_siswa."',prestasi='".$prestasi."',keaktifan='".$keaktifan."',kehadiran='".$kehadiran."',datetime='".$datetime."', where id_evaluasi=".$id_evaluasi;
					$update=mysql_query($sql)or die('Update Data evaluasi Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','evaluasi.php');
						}else{
							alert('danger','update','evaluasi.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_evaluasi=isset($id) ? $id : '';
	if(isset($id_evaluasi)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_evaluasi;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete evaluasi ERROR: ".$sqldelete."-->".mysql_error());
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
