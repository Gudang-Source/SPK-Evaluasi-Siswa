<div class="container">
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('form-walikelas.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
							
							
							<th>NIP</th>
							<th>Nama Wali Kelas</th>
							<th>Jabatan Fungsional</th>
							<th>Guru Matpel</th>
							<th>Aksi</th>
					</tr>
				</thead>
				<?php include('list-walikelas.php');
					show_walikelas('all');
				 ?>
			</table>
		</div>
	</div>

</div>