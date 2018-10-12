<?php 
require('../koneksi.php');
include('../header.php');
include('../functions.php');
?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'rules':
					$rule_id= isset($_POST['rule_id']) ? clean(htmlspecialchars($_POST['rule_id'])) : '';
					$rulename=isset($_POST['rulename']) ? clean(htmlspecialchars($_POST['rulename'])) : '';
					$prestasi=isset($_POST['prestasi']) ? clean(htmlspecialchars($_POST['prestasi'])) : '';
					$kegiatan=isset($_POST['kegiatan']) ? clean(htmlspecialchars($_POST['kegiatan'])) : '';
					$kehadiran=isset($_POST['kehadiran']) ? clean(htmlspecialchars($_POST['kehadiran'])) : '';
					$fuzzy_output=isset($_POST['fuzzy_output']) ? clean(htmlspecialchars($_POST['fuzzy_output'])) : '';
					$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
					
					$sql="insert into rules (rulename,prestasi,kegiatan,kehadiran,fuzzy_output,datetime,) values ('".$rulename."','".$prestasi."','".$kegiatan."','".$kehadiran."','".$fuzzy_output."','".$datetime."',)";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data rules Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','rules.php');
							
						}else{
							alert('danger','insert','rules.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'rules':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$rule_id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('rules_content.php');
					# code...
					break;
				case 'delete':
					
					delete('rules','rule_id',$rule_id);
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
		case 'rules':
			$rule_id= isset($_POST['rule_id']) ? clean(htmlspecialchars($_POST['rule_id'])) : '';
			$rulename=isset($_POST['rulename']) ? clean(htmlspecialchars($_POST['rulename'])) : '';
				$prestasi=isset($_POST['prestasi']) ? clean(htmlspecialchars($_POST['prestasi'])) : '';
				$kegiatan=isset($_POST['kegiatan']) ? clean(htmlspecialchars($_POST['kegiatan'])) : '';
				$kehadiran=isset($_POST['kehadiran']) ? clean(htmlspecialchars($_POST['kehadiran'])) : '';
				$fuzzy_output=isset($_POST['fuzzy_output']) ? clean(htmlspecialchars($_POST['fuzzy_output'])) : '';
				$datetime=isset($_POST['datetime']) ? clean(htmlspecialchars($_POST['datetime'])) : '';
				
			if(isset($rule_id)):
				$sql="update rules set rulename='".$rulename."',prestasi='".$prestasi."',kegiatan='".$kegiatan."',kehadiran='".$kehadiran."',fuzzy_output='".$fuzzy_output."',datetime='".$datetime."', where rule_id=".$rule_id;
					$update=mysql_query($sql)or die('Update Data rules Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','rules.php');
						}else{
							alert('danger','update','rules.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$rule_id=isset($id) ? $id : '';
	if(isset($rule_id)):
		$sqldelete="delete from `".$table."` where ".$field."=".$rule_id;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete rules ERROR: ".$sqldelete."-->".mysql_error());
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
