<div class="container">
	
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			<?php include('users_form.php'); ?>
		</div>
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			<table class="table table-hover table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>No.</th>
						
						<th>ip_address</th>
						
						<th>username</th>
						
						<th>password</th>
						
						<th>salt</th>
						
						<th>email</th>
						
						<th>activation_code</th>
						
						<th>forgotten_password_code</th>
						
						<th>forgotten_password_time</th>
						
						<th>remember_code</th>
						
						<th>created_on</th>
						
						<th>last_login</th>
						
						<th>active</th>
						
						<th>first_name</th>
						
						<th>last_name</th>
						
						<th>company</th>
						
						<th>phone</th>
												
						<th>Aksi</th>
					</tr>
				</thead>
				<?php include('users_list.php'); 
					show_fuzzy('all');
					//rule_fuzzy();
				?>
			</table>
		</div>
	</div>

</div>
