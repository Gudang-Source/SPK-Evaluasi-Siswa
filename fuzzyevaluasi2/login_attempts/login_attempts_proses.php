<?php 
require('../koneksi.php');
include('../header.php');
include('../functions.php');
?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'login_attempts':
					$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
					$ip_address=isset($_POST['ip_address']) ? clean(htmlspecialchars($_POST['ip_address'])) : '';
					$login=isset($_POST['login']) ? clean(htmlspecialchars($_POST['login'])) : '';
					$time=isset($_POST['time']) ? clean(htmlspecialchars($_POST['time'])) : '';
					
					$sql="insert into login_attempts (ip_address,login,time,) values ('".$ip_address."','".$login."','".$time."',)";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data login_attempts Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','login_attempts.php');
							
						}else{
							alert('danger','insert','login_attempts.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'login_attempts':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('login_attempts_content.php');
					# code...
					break;
				case 'delete':
					
					delete('login_attempts','id',$id);
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
		case 'login_attempts':
			$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
			$ip_address=isset($_POST['ip_address']) ? clean(htmlspecialchars($_POST['ip_address'])) : '';
				$login=isset($_POST['login']) ? clean(htmlspecialchars($_POST['login'])) : '';
				$time=isset($_POST['time']) ? clean(htmlspecialchars($_POST['time'])) : '';
				
			if(isset($id)):
				$sql="update login_attempts set ip_address='".$ip_address."',login='".$login."',time='".$time."', where id=".$id;
					$update=mysql_query($sql)or die('Update Data login_attempts Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','login_attempts.php');
						}else{
							alert('danger','update','login_attempts.php');
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
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete login_attempts ERROR: ".$sqldelete."-->".mysql_error());
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
