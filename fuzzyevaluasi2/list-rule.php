<?php 
// require('koneksi.php');
$sql="select * from rules";
$result=mysql_query($sql)or die('Maaf, Query Salah');

function show_rule($show){
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
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="proses.php?form=rules&a=edit&id=<?php echo $row['rule_id'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="proses.php?form=rules&a=delete&id=<?php echo $row['rule_id'] ?>" class="btn btn-xs btn-danger">Delete</a>
							</div></td>
							<?php
							# code...
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

