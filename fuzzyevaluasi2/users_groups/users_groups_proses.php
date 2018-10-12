<?php 
require('../koneksi.php');
include('../header.php');
include('../functions.php');
?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'users_groups':
					$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
					$user_id=isset($_POST['user_id']) ? clean(htmlspecialchars($_POST['user_id'])) : '';
					$group_id=isset($_POST['group_id']) ? clean(htmlspecialchars($_POST['group_id'])) : '';
					
					$sql="insert into users_groups (user_id,group_id,) values ('".$user_id."','".$group_id."',)";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data users_groups Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','users_groups.php');
							
						}else{
							alert('danger','insert','users_groups.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'users_groups':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('users_groups_content.php');
					# code...
					break;
				case 'delete':
					
					delete('users_groups','id',$id);
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
		case 'users_groups':
			$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
			$user_id=isset($_POST['user_id']) ? clean(htmlspecialchars($_POST['user_id'])) : '';
				$group_id=isset($_POST['group_id']) ? clean(htmlspecialchars($_POST['group_id'])) : '';
				
			if(isset($id)):
				$sql="update users_groups set user_id='".$user_id."',group_id='".$group_id."', where id=".$id;
					$update=mysql_query($sql)or die('Update Data users_groups Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','users_groups.php');
						}else{
							alert('danger','update','users_groups.php');
						}
					endif;
			break;
	}
}
function delete($table=null,$field=null,$id=null){
	$table=isset($table) ? $table : '';
	$field=isset($field) ? $field : '';
	$id=isset($id) ? $id : '';
	if(isset($id)):
		$sqldelete="delete from `".$table."` where ".$field."=".$id;
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete users_groups ERROR: ".$sqldelete."-->".mysql_error());
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
