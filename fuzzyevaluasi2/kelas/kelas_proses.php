<?php 
require('../koneksi.php');
include('../header.php');
include('../functions.php');
?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'kelas':
					$id_kelas= isset($_POST['id_kelas']) ? clean(htmlspecialchars($_POST['id_kelas'])) : '';
					$nama_kelas=isset($_POST['nama_kelas']) ? clean(htmlspecialchars($_POST['nama_kelas'])) : '';
					$tingkatan=isset($_POST['tingkatan']) ? clean(htmlspecialchars($_POST['tingkatan'])) : '';
					$id_walikelas=isset($_POST['id_walikelas']) ? clean(htmlspecialchars($_POST['id_walikelas'])) : '';
					$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					
					$sql="insert into kelas (nama_kelas,tingkatan,id_walikelas,datetime,) values ('".$nama_kelas."','".$tingkatan."','".$id_walikelas."','".$datetime."',)";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data kelas Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','kelas.php');
							
						}else{
							alert('danger','insert','kelas.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'kelas':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id_kelas= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('kelas_content.php');
					# code...
					break;
				case 'delete':
					
					delete('kelas','id_kelas',$id_kelas);
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
		case 'kelas':
			$id_kelas= isset($_POST['id_kelas']) ? clean(htmlspecialchars($_POST['id_kelas'])) : '';
			$nama_kelas=isset($_POST['nama_kelas']) ? clean(htmlspecialchars($_POST['nama_kelas'])) : '';
				$tingkatan=isset($_POST['tingkatan']) ? clean(htmlspecialchars($_POST['tingkatan'])) : '';
				$id_walikelas=isset($_POST['id_walikelas']) ? clean(htmlspecialchars($_POST['id_walikelas'])) : '';
				$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				
			if(isset($id_kelas)):
				$sql="update kelas set nama_kelas='".$nama_kelas."',tingkatan='".$tingkatan."',id_walikelas='".$id_walikelas."',datetime='".$datetime."', where id_kelas=".$id_kelas;
					$update=mysql_query($sql)or die('Update Data kelas Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','kelas.php');
						}else{
							alert('danger','update','kelas.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id_kelas=isset($id) ? $id : '';
	if(isset($id_kelas)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id_kelas;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete kelas ERROR: ".$sqldelete."-->".mysql_error());
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
