<?php 
// require('koneksi.php');
$sql="select * from rules";
$result=mysql_query($sql)or die('Maaf, Query rules Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['rule_id'] ?></td>
					<td><?php echo $row['rulename'] ?></td>
					<td><?php echo $row['prestasi'] ?></td>
					<td><?php echo $row['kegiatan'] ?></td>
					<td><?php echo $row['kehadiran'] ?></td>
					<td><?php echo $row['fuzzy_output'] ?></td>
					<td><?php echo $row['datetime'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="rules_proses.php?form=rules&a=edit&id=<?php echo $row['rule_id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="rules_proses.php?form=rules&a=delete&id=<?php echo $row['rule_id'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

