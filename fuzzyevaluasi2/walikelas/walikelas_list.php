<?php 
// require('koneksi.php');
$sql="select * from walikelas";
$result=mysql_query($sql)or die('Maaf, Query walikelas Salah:'.mysql_error());

function show_fuzzy($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id_walikelas'] ?></td>
					<td><?php echo $row['nik_walikelas'] ?></td>
					<td><?php echo $row['nama_walikelas'] ?></td>
					<td><?php echo $row['jab_fungsional'] ?></td>
					<td><?php echo $row['guru_matpel'] ?></td>
					<td><?php echo $row['datetime'] ?></td>
					
					
						
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="walikelas_proses.php?form=walikelas&a=edit&id=<?php echo $row['id_walikelas'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="walikelas_proses.php?form=walikelas&a=delete&id=<?php echo $row['id_walikelas'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

