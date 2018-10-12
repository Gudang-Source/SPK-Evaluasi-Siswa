<?php 
// require('koneksi.php');
$sql="select * from groups";
$result=mysql_query($sql)or die('Maaf, Query groups Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td><?php echo $row['name'] ?></td>
					<td><?php echo $row['description'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="groups_proses.php?form=groups&a=edit&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="groups_proses.php?form=groups&a=delete&id=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

