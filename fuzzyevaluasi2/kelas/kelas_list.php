<?php 
// require('koneksi.php');
$sql="select * from kelas";
$result=mysql_query($sql)or die('Maaf, Query kelas Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id_kelas'] ?></td>
					<td><?php echo $row['nama_kelas'] ?></td>
					<td><?php echo $row['tingkatan'] ?></td>
					<td><?php echo $row['id_walikelas'] ?></td>
					<td><?php echo $row['datetime'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="kelas_proses.php?form=kelas&a=edit&id=<?php echo $row['id_kelas'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="kelas_proses.php?form=kelas&a=delete&id=<?php echo $row['id_kelas'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

