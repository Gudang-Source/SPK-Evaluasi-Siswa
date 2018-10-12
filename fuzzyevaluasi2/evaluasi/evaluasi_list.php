<?php 
// require('koneksi.php');
$sql="select * from evaluasi";
$result=mysql_query($sql)or die('Maaf, Query evaluasi Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id_evaluasi'] ?></td>
					<td><?php echo $row['id_siswa'] ?></td>
					<td><?php echo $row['prestasi'] ?></td>
					<td><?php echo $row['keaktifan'] ?></td>
					<td><?php echo $row['kehadiran'] ?></td>
					<td><?php echo $row['datetime'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="evaluasi_proses.php?form=evaluasi&a=edit&id=<?php echo $row['id_evaluasi'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="evaluasi_proses.php?form=evaluasi&a=delete&id=<?php echo $row['id_evaluasi'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

