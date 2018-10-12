<?php 
// require('koneksi.php');
$sql="select * from siswa";
$result=mysql_query($sql)or die('Maaf, Query siswa Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id_siswa'] ?></td>
					<td><?php echo $row['nama_siswa'] ?></td>
					<td><?php echo $row['id_kelas'] ?></td>
					<td><?php echo $row['j_kelamin'] ?></td>
					<td><?php echo $row['alamat'] ?></td>
					<td><?php echo $row['telp'] ?></td>
					<td><?php echo $row['datetime'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="siswa_proses.php?form=siswa&a=edit&id=<?php echo $row['id_siswa'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="siswa_proses.php?form=siswa&a=delete&id=<?php echo $row['id_siswa'] ?>" class="btn btn-xs btn-danger">Delete</a>
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
 echo $row['nim'] ?></td>
					<td><?php echo $row['nama_siswa'] ?></td>
					<td><?php echo $row['id_kelas'] ?></td>
					<td><?php echo $row['j_kelamin'] ?></td>
					<td><?php echo $row['alamat'] ?></td>
					<td><?php echo $row['telp'] ?></td>
					<td><?php echo $row['datetime'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="siswa_proses.php?form=siswa&a=edit&id=<?php echo $row['nim'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="siswa_proses.php?form=siswa&a=delete&id=<?php echo $row['nim'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

