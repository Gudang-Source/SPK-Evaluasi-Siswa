<?php 
	$usersid= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($usersid) || isset($usersid)){
	
		$sqlnet="select * from `users` where id='$usersid'";
		$hasil=mysql_query($sqlnet)or die('Query users Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$ip_address=$row['ip_address']; 
			$username=$row['username']; 
			$password=$row['password']; 
			$salt=$row['salt']; 
			$email=$row['email']; 
			$activation_code=$row['activation_code']; 
			$forgotten_password_code=$row['forgotten_password_code']; 
			$forgotten_password_time=$row['forgotten_password_time']; 
			$remember_code=$row['remember_code']; 
			$created_on=$row['created_on']; 
			$last_login=$row['last_login']; 
			$active=$row['active']; 
			$first_name=$row['first_name']; 
			$last_name=$row['last_name']; 
			$company=$row['company']; 
			$phone=$row['phone']; 
			
                        
			
		}
		
	} ?> 
<form action="users_proses.php" method="POST" role="form">
				<legend>Form users</legend>
				<input type="hidden" name="form" value="users">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				
				<div class="form-group">
					<label for="ip_address">ip_address</label>
					<input name="ip_address" type="text" class="form-control" id="ip_address" required placeholder="Masukkan ip_address" value="<?php echo (!empty($ip_address)?$ip_address:''); ?>">
				</div>
				<div class="form-group">
					<label for="username">username</label>
					<input name="username" type="text" class="form-control" id="username" required placeholder="Masukkan username" value="<?php echo (!empty($username)?$username:''); ?>">
				</div>
				<div class="form-group">
					<label for="password">password</label>
					<input name="password" type="text" class="form-control" id="password" required placeholder="Masukkan password" value="<?php echo (!empty($password)?$password:''); ?>">
				</div>
				<div class="form-group">
					<label for="salt">salt</label>
					<input name="salt" type="text" class="form-control" id="salt" required placeholder="Masukkan salt" value="<?php echo (!empty($salt)?$salt:''); ?>">
				</div>
				<div class="form-group">
					<label for="email">email</label>
					<input name="email" type="text" class="form-control" id="email" required placeholder="Masukkan email" value="<?php echo (!empty($email)?$email:''); ?>">
				</div>
				<div class="form-group">
					<label for="activation_code">activation_code</label>
					<input name="activation_code" type="text" class="form-control" id="activation_code" required placeholder="Masukkan activation_code" value="<?php echo (!empty($activation_code)?$activation_code:''); ?>">
				</div>
				<div class="form-group">
					<label for="forgotten_password_code">forgotten_password_code</label>
					<input name="forgotten_password_code" type="text" class="form-control" id="forgotten_password_code" required placeholder="Masukkan forgotten_password_code" value="<?php echo (!empty($forgotten_password_code)?$forgotten_password_code:''); ?>">
				</div>
				<div class="form-group">
					<label for="forgotten_password_time">forgotten_password_time</label>
					<input name="forgotten_password_time" type="text" class="form-control" id="forgotten_password_time" required placeholder="Masukkan forgotten_password_time" value="<?php echo (!empty($forgotten_password_time)?$forgotten_password_time:''); ?>">
				</div>
				<div class="form-group">
					<label for="remember_code">remember_code</label>
					<input name="remember_code" type="text" class="form-control" id="remember_code" required placeholder="Masukkan remember_code" value="<?php echo (!empty($remember_code)?$remember_code:''); ?>">
				</div>
				<div class="form-group">
					<label for="created_on">created_on</label>
					<input name="created_on" type="text" class="form-control" id="created_on" required placeholder="Masukkan created_on" value="<?php echo (!empty($created_on)?$created_on:''); ?>">
				</div>
				<div class="form-group">
					<label for="last_login">last_login</label>
					<input name="last_login" type="text" class="form-control" id="last_login" required placeholder="Masukkan last_login" value="<?php echo (!empty($last_login)?$last_login:''); ?>">
				</div>
				<div class="form-group">
					<label for="active">active</label>
					<input name="active" type="text" class="form-control" id="active" required placeholder="Masukkan active" value="<?php echo (!empty($active)?$active:''); ?>">
				</div>
				<div class="form-group">
					<label for="first_name">first_name</label>
					<input name="first_name" type="text" class="form-control" id="first_name" required placeholder="Masukkan first_name" value="<?php echo (!empty($first_name)?$first_name:''); ?>">
				</div>
				<div class="form-group">
					<label for="last_name">last_name</label>
					<input name="last_name" type="text" class="form-control" id="last_name" required placeholder="Masukkan last_name" value="<?php echo (!empty($last_name)?$last_name:''); ?>">
				</div>
				<div class="form-group">
					<label for="company">company</label>
					<input name="company" type="text" class="form-control" id="company" required placeholder="Masukkan company" value="<?php echo (!empty($company)?$company:''); ?>">
				</div>
				<div class="form-group">
					<label for="phone">phone</label>
					<input name="phone" type="text" class="form-control" id="phone" required placeholder="Masukkan phone" value="<?php echo (!empty($phone)?$phone:''); ?>">
				</div>
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="users.php" class="btn btn-warning">Batal</a>
	
</form>