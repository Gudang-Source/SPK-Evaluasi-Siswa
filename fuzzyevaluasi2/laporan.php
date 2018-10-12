<?php 
require('koneksi.php'); //dibutuhkan file koneksi.php untuk koneksi ke database

include('header.php'); //termasuk file header.php
?>
<div class="container">
	<div class="row" style="margin-bottom:10px;">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<h3>SPK Evaluasi Siswa</h3>
			<h4>Menggunakan Metode Fuzzy Sugeno</h4>
			<hr>
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<button type="button" class="print pull-right btn-lg btn btn-info no-print"><i class="glyphicon glyphicon-print"></i> Cetak</button>

		</div>
	</div>
	<?php 
	$sql="select * from `08-view-fuzzy-sugeno`";
	$hasil=mysql_query($sql)or die('Query Fuzzy Sugeno Error:'.mysql_error());
	?>
	<table class="table table-hover table-bordered table-striped table-condensed">
		<thead>
			<tr>
				<th>No.</th>
				<th>NIS</th>
				<th>Nama Siswa</th>
				<th>Nilai Prestasi</th>
				<th>Keaktifan</th>
				<th>Prosentase Kehadiran</th>
				<th>Hasil Fuzzy</th>
				<th>Rank</th>
				<th class="no-print">Aksi</th>
			</tr>
		</thead>
		<tbody>
			
		
	<?php
	if($hasil!=null){
		$i=1;
		while($row=mysql_fetch_array($hasil)){
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row['nim']."</td>";
			echo "<td>".$row['nama_siswa']."</td>";
			echo "<td>".$row['prestasi']."</td>";
			echo "<td>".$row['keaktifan']."</td>";
			echo "<td>".$row['kehadiran']."</td>";
			echo "<td>".$row['fuzzy_output']." <span class='label label-info'>(".$row['defuzz'].") </span>"."</td>";
			echo "<td>".$i."</td>";
			echo "<td class='no-print'><div class='btn-group'><a class='btn btn-xs btn-success' href='proses.php?form=evaluasi&a=edit&id=".$row['id_evaluasi']."'><i class='glyphicon glyphicon-pencil'></i> Edit</a>
			<a class='btn btn-danger btn-xs' href='proses.php?form=evaluasi&a=delete&id=".$row['id_evaluasi']."'><i class='glyphicon glyphicon-remove'></i> Hapus</a></td>";
			echo "</tr>";
			$i++;
		}
	}
	?>
		</tbody>
	</table>


<?php
include('footer.php');

 ?>		
