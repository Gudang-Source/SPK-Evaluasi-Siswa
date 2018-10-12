<?php 
	$login_attemptsid= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($login_attemptsid) || isset($login_attemptsid)){
	
		$sqlnet="select * from `login_attempts` where id='$login_attemptsid'";
		$hasil=mysql_query($sqlnet)or die('Query login_attempts Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$ip_address=$row['ip_address']; 
			$login=$row['login']; 
			$time=$row['time']; 
			
                        
			
		}
		
	} ?> 
<form action="login_attempts_proses.php" method="POST" role="form">
				<legend>Form login_attempts</legend>
				<input type="hidden" name="form" value="login_attempts">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				
				<div class="form-group">
					<label for="ip_address">ip_address</label>
					<input name="ip_address" type="text" class="form-control" id="ip_address" required placeholder="Masukkan ip_address" value="<?php echo (!empty($ip_address)?$ip_address:''); ?>">
				</div>
				<div class="form-group">
					<label for="login">login</label>
					<input name="login" type="text" class="form-control" id="login" required placeholder="Masukkan login" value="<?php echo (!empty($login)?$login:''); ?>">
				</div>
				<div class="form-group">
					<label for="time">time</label>
					<input name="time" type="text" class="form-control" id="time" required placeholder="Masukkan time" value="<?php echo (!empty($time)?$time:''); ?>">
				</div>
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="login_attempts.php" class="btn btn-warning">Batal</a>
	
</form>