<?php 
// require('koneksi.php');
$sql="select * from login_attempts";
$result=mysql_query($sql)or die('Maaf, Query login_attempts Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['ip_address'] ?></td>
					<td><?php echo $row['login'] ?></td>
					<td><?php echo $row['time'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="login_attempts_proses.php?form=login_attempts&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="login_attempts_proses.php?form=login_attempts&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

