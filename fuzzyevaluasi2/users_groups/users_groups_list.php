<?php 
// require('koneksi.php');
$sql="select * from users_groups";
$result=mysql_query($sql)or die('Maaf, Query users_groups Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['user_id'] ?></td>
					<td><?php echo $row['group_id'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="users_groups_proses.php?form=users_groups&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="users_groups_proses.php?form=users_groups&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

