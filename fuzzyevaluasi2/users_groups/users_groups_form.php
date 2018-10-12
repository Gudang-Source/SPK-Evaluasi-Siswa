<?php 
	$users_groupsid= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($users_groupsid) || isset($users_groupsid)){
	
		$sqlnet="select * from `users_groups` where id='$users_groupsid'";
		$hasil=mysql_query($sqlnet)or die('Query users_groups Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$user_id=$row['user_id']; 
			$group_id=$row['group_id']; 
			
                        
			
		}
		
	} ?> 
<form action="users_groups_proses.php" method="POST" role="form">
				<legend>Form users_groups</legend>
				<input type="hidden" name="form" value="users_groups">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				
				<div class="form-group">
					<label for="user_id">user_id</label>
					<input name="user_id" type="text" class="form-control" id="user_id" required placeholder="Masukkan user_id" value="<?php echo (!empty($user_id)?$user_id:''); ?>">
				</div>
				<div class="form-group">
					<label for="group_id">group_id</label>
					<input name="group_id" type="text" class="form-control" id="group_id" required placeholder="Masukkan group_id" value="<?php echo (!empty($group_id)?$group_id:''); ?>">
				</div>
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="users_groups.php" class="btn btn-warning">Batal</a>
	
</form>