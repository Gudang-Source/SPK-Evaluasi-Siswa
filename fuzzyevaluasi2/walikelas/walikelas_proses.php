<?php 
require('../koneksi.php');
include('../header.php');
include('../functions.php');
?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'walikelas':
					$id_walikelas= isset($_POST['id_walikelas']) ? clean(htmlspecialchars($_POST['id_walikelas'])) : '';
					$nik_walikelas=isset($_POST['nik_walikelas']) ? clean(htmlspecialchars($_POST['nik_walikelas'])) : '';
					$nama_walikelas=isset($_POST['nama_walikelas']) ? clean(htmlspecialchars($_POST['nama_walikelas'])) : '';
					$jab_fungsional=isset($_POST['jab_fungsional']) ? clean(htmlspecialchars($_POST['jab_fungsional'])) : '';
					$guru_matpel=isset($_POST['guru_matpel']) ? clean(htmlspecialchars($_POST['guru_matpel'])) : '';
					$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					
					$sql="insert into walikelas (nik_walikelas,nama_walikelas,jab_fungsional,guru_matpel,datetime,) values ('".$nik_walikelas."','".$nama_walikelas."','".$jab_fungsional."','".$guru_matpel."','".$datetime."',)";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data walikelas Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','walikelas.php');
							
						}else{
							alert('danger','insert','walikelas.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'walikelas':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_walikelas= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('walikelas_content.php');
					# code...
					break;
				case 'delete':
					
					delete('walikelas','id_walikelas',$id_walikelas);
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
		case 'walikelas':
			$id_walikelas= isset($_POST['id_walikelas']) ? clean(htmlspecialchars($_POST['id_walikelas'])) : '';
			$nik_walikelas=isset($_POST['nik_walikelas']) ? clean(htmlspecialchars($_POST['nik_walikelas'])) : '';
				$nama_walikelas=isset($_POST['nama_walikelas']) ? clean(htmlspecialchars($_POST['nama_walikelas'])) : '';
				$jab_fungsional=isset($_POST['jab_fungsional']) ? clean(htmlspecialchars($_POST['jab_fungsional'])) : '';
				$guru_matpel=isset($_POST['guru_matpel']) ? clean(htmlspecialchars($_POST['guru_matpel'])) : '';
				$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				
			if(isset($id_walikelas)):
				$sql="update walikelas set nik_walikelas='".$nik_walikelas."',nama_walikelas='".$nama_walikelas."',jab_fungsional='".$jab_fungsional."',guru_matpel='".$guru_matpel."',datetime='".$datetime."', where id_walikelas=".$id_walikelas;
					$update=mysql_query($sql)or die('Update Data walikelas Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','walikelas.php');
						}else{
							alert('danger','update','walikelas.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_walikelas=isset($id) ? $id : '';
	if(isset($id_walikelas)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_walikelas;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete walikelas ERROR: ".$sqldelete."-->".mysql_error());
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
