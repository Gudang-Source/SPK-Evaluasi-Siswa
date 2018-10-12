<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('siswa_form.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>nama_siswa</th>
						
						<th>id_kelas</th>
						
						<th>j_kelamin</th>
						
						<th>alamat</th>
						
						<th>telp</th>
						
						<th>datetime</th>
												
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('siswa_list.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
