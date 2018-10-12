<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('evaluasi_form.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>id_siswa</th>
						
						<th>prestasi</th>
						
						<th>keaktifan</th>
						
						<th>kehadiran</th>
						
						<th>datetime</th>
												
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('evaluasi_list.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
