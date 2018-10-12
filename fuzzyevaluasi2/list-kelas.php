<?php 

$sql="select a.id_kelas,a.nama_kelas,a.tingkatan,b.nama_walikelas as walikelas from kelas a left join walikelas b on a.id_walikelas=b.id_walikelas";
$result=mysql_query($sql)or die('Maaf, Query Salah');

function show_rule($show){
	global $result;

	if($result==true){
		while($row=mysql_fetch_array($result)):
			?>
				<tr>
					<td><?php echo $row['id_kelas'] ?></td>
					<td><?php echo $row['nama_kelas'] ?></td>
					<td><?php echo $row['tingkatan'] ?></td>
					<td><?php echo $row['walikelas'] ?></td>
					
					
					
				<?php
					switch ($show) {
						case 'all':
							?>
							<td><div class="btn-group">
								<a href="proses.php?form=kelas&a=edit&id=<?php echo $row['id_kelas'] ?>" class="btn btn-xs btn-success">Edit</a>
								<a href="proses.php?form=kelas&a=delete&id=<?php echo $row['id_kelas'] ?>" class="btn btn-xs btn-danger">Delete</a>
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

