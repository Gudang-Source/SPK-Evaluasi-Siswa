<?php 
// require('koneksi.php');
$sql="select * from users";
$result=mysql_query($sql)or die('Maaf, Query users Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['ip_address'] ?></td>
					<td><?php echo $row['username'] ?></td>
					<td><?php echo $row['password'] ?></td>
					<td><?php echo $row['salt'] ?></td>
					<td><?php echo $row['email'] ?></td>
					<td><?php echo $row['activation_code'] ?></td>
					<td><?php echo $row['forgotten_password_code'] ?></td>
					<td><?php echo $row['forgotten_password_time'] ?></td>
					<td><?php echo $row['remember_code'] ?></td>
					<td><?php echo $row['created_on'] ?></td>
					<td><?php echo $row['last_login'] ?></td>
					<td><?php echo $row['active'] ?></td>
					<td><?php echo $row['first_name'] ?></td>
					<td><?php echo $row['last_name'] ?></td>
					<td><?php echo $row['company'] ?></td>
					<td><?php echo $row['phone'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="users_proses.php?form=users&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="users_proses.php?form=users&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							<?php
							
							break;
						case 'no-edit':
							?>
								<td></td>
							<?php
						break;
						
					}
				?>
				</tr>
			<?php
		endwhile;
	}
}


?>

