<?php 
	$groupsid= isset($_GET['id']) ? $_GET['id'] : '';
	if(!empty($groupsid) || isset($groupsid)){
	
		$sqlnet="select * from `groups` where id='$groupsid'";
		$hasil=mysql_query($sqlnet)or die('Query groups Error:'.mysql_error());
		while($row=mysql_fetch_array($hasil)){
			$name=$row['name']; 
			$description=$row['description']; 
			
                        
			
		}
		
	} ?> 
<form action="groups_proses.php" method="POST" role="form">
				<legend>Form groups</legend>
				<input type="hidden" name="form" value="groups">
				<input type="hidden" name="id" value="<?php echo (!empty($id)?$id:''); ?>">
				
				<div class="form-group">
					<label for="name">name</label>
					<input name="name" type="text" class="form-control" id="name" required placeholder="Masukkan name" value="<?php echo (!empty($name)?$name:''); ?>">
				</div>
				<div class="form-group">
					<label for="description">description</label>
					<input name="description" type="text" class="form-control" id="description" required placeholder="Masukkan description" value="<?php echo (!empty($description)?$description:''); ?>">
				</div>
				<button name="<?php echo !empty($id)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
				<a href="groups.php" class="btn btn-warning">Batal</a>
	
</form>