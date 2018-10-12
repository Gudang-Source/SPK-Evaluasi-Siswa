<?php 
require('../koneksi.php');
include('../header.php');
include('../functions.php');
?>


<?php
if(isset($_POST['submit'])){
	$form=isset($_POST['form']) ? $_POST['form'] : '';
		switch ($form) {
			case 'users':
					$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
					$ip_address=isset($_POST['ip_address']) ? clean(htmlspecialchars($_POST['ip_address'])) : '';
					$username=isset($_POST['username']) ? clean(htmlspecialchars($_POST['username'])) : '';
					$password=isset($_POST['password']) ? clean(htmlspecialchars($_POST['password'])) : '';
					$salt=isset($_POST['salt']) ? clean(htmlspecialchars($_POST['salt'])) : '';
					$email=isset($_POST['email']) ? clean(htmlspecialchars($_POST['email'])) : '';
					$activation_code=isset($_POST['activation_code']) ? clean(htmlspecialchars($_POST['activation_code'])) : '';
					$forgotten_password_code=isset($_POST['forgotten_password_code']) ? clean(htmlspecialchars($_POST['forgotten_password_code'])) : '';
					$forgotten_password_time=isset($_POST['forgotten_password_time']) ? clean(htmlspecialchars($_POST['forgotten_password_time'])) : '';
					$remember_code=isset($_POST['remember_code']) ? clean(htmlspecialchars($_POST['remember_code'])) : '';
					$created_on=isset($_POST['created_on']) ? clean(htmlspecialchars($_POST['created_on'])) : '';
					$last_login=isset($_POST['last_login']) ? clean(htmlspecialchars($_POST['last_login'])) : '';
					$active=isset($_POST['active']) ? clean(htmlspecialchars($_POST['active'])) : '';
					$first_name=isset($_POST['first_name']) ? clean(htmlspecialchars($_POST['first_name'])) : '';
					$last_name=isset($_POST['last_name']) ? clean(htmlspecialchars($_POST['last_name'])) : '';
					$company=isset($_POST['company']) ? clean(htmlspecialchars($_POST['company'])) : '';
					$phone=isset($_POST['phone']) ? clean(htmlspecialchars($_POST['phone'])) : '';
					
					$sql="insert into users (ip_address,username,password,salt,email,activation_code,forgotten_password_code,forgotten_password_time,remember_code,created_on,last_login,active,first_name,last_name,company,phone,) values ('".$ip_address."','".$username."','".$password."','".$salt."','".$email."','".$activation_code."','".$forgotten_password_code."','".$forgotten_password_time."','".$remember_code."','".$created_on."','".$last_login."','".$active."','".$first_name."','".$last_name."','".$company."','".$phone."',)";
						// echo $sql;
						$insert=mysql_query($sql)or die('Insert Data users Error:'.mysql_error());
						// $numrows=mysql_num_rows($insert);
						if($insert>0){
							// echo $sql;
							alert('success','insert','users.php');
							
						}else{
							alert('danger','insert','users.php');
						}
				
			break;
		}
}elseif(!isset($_POST['submit'])){
	$form=isset($_GET['form']) ? $_GET['form'] : '';
	switch ($form) {
		case 'users':
			$a= isset($_GET['a']) ? $_GET['a'] : '';
			$id= isset($_GET['id']) ? $_GET['id'] : '';
				switch ($a) {
				case 'edit':
					include('users_content.php');
					# code...
					break;
				case 'delete':
					
					delete('users','id',$id);
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
		case 'users':
			$id= isset($_POST['id']) ? clean(htmlspecialchars($_POST['id'])) : '';
			$ip_address=isset($_POST['ip_address']) ? clean(htmlspecialchars($_POST['ip_address'])) : '';
				$username=isset($_POST['username']) ? clean(htmlspecialchars($_POST['username'])) : '';
				$password=isset($_POST['password']) ? clean(htmlspecialchars($_POST['password'])) : '';
				$salt=isset($_POST['salt']) ? clean(htmlspecialchars($_POST['salt'])) : '';
				$email=isset($_POST['email']) ? clean(htmlspecialchars($_POST['email'])) : '';
				$activation_code=isset($_POST['activation_code']) ? clean(htmlspecialchars($_POST['activation_code'])) : '';
				$forgotten_password_code=isset($_POST['forgotten_password_code']) ? clean(htmlspecialchars($_POST['forgotten_password_code'])) : '';
				$forgotten_password_time=isset($_POST['forgotten_password_time']) ? clean(htmlspecialchars($_POST['forgotten_password_time'])) : '';
				$remember_code=isset($_POST['remember_code']) ? clean(htmlspecialchars($_POST['remember_code'])) : '';
				$created_on=isset($_POST['created_on']) ? clean(htmlspecialchars($_POST['created_on'])) : '';
				$last_login=isset($_POST['last_login']) ? clean(htmlspecialchars($_POST['last_login'])) : '';
				$active=isset($_POST['active']) ? clean(htmlspecialchars($_POST['active'])) : '';
				$first_name=isset($_POST['first_name']) ? clean(htmlspecialchars($_POST['first_name'])) : '';
				$last_name=isset($_POST['last_name']) ? clean(htmlspecialchars($_POST['last_name'])) : '';
				$company=isset($_POST['company']) ? clean(htmlspecialchars($_POST['company'])) : '';
				$phone=isset($_POST['phone']) ? clean(htmlspecialchars($_POST['phone'])) : '';
				
			if(isset($id)):
				$sql="update users set ip_address='".$ip_address."',username='".$username."',password='".$password."',salt='".$salt."',email='".$email."',activation_code='".$activation_code."',forgotten_password_code='".$forgotten_password_code."',forgotten_password_time='".$forgotten_password_time."',remember_code='".$remember_code."',created_on='".$created_on."',last_login='".$last_login."',active='".$active."',first_name='".$first_name."',last_name='".$last_name."',company='".$company."',phone='".$phone."', where id=".$id;
					$update=mysql_query($sql)or die('Update Data users Error:'.mysql_error());
						if($update==true){
							// echo $sql;
							alert('success','update','users.php');
						}else{
							alert('danger','update','users.php');
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
		
		$hasil=mysql_query($sqldelete)or die("SQL Delete users ERROR: ".$sqldelete."-->".mysql_error());
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
