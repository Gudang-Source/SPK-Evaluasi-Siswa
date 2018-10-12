<?php 
// require('koneksi.php');
$sql="select * from evaluasi a left join siswa b on a.id_siswa=b.id_siswa";

$result=mysql_query($sql)or die('Maaf, Query Salah');

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id_evaluasi'] ?></td>
					<td><?php echo $row['nama_siswa'] ?></td>
					<td><?php echo $row['prestasi'] ?></td>
					<td><?php echo $row['keaktifan'] ?></td>
					<td><?php echo $row['kehadiran'] ?></td>
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="proses.php?form=evaluasi&a=edit&id=<?php echo $row['id_evaluasi'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="proses.php?form=evaluasi&a=delete&id=<?php echo $row['id_evaluasi'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

