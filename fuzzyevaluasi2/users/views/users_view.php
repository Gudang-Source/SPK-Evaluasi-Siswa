    <div class="row">
            <div class="tabbable page-tabs">
                <ul class="nav nav-tabs">
                    <li class="daftar active"><a href="#inside" data-toggle="tab"><i class="icon-checkbox-partial"></i> Daftar Users</a></li>
                    <li class="baru"><a href="#outside" data-toggle="tab"><i class="icon-plus"></i> Tambah Users Baru</a></li>
                </ul>
                <div class="tab-content">
                    
                    <!-- First tab content -->
                    <div class="tab-pane active fade in" id="inside">
                        <!-- AJAX source -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title"><i class="icon-table"></i> Daftar Users</h6> 
                                <div class="btn-group pull-right">
                                    <a href="#outside" data-toggle="tab" class="btn btn-success"><i class="icon-plus"></i> Tambah Users Baru</a>
                                </div> 
                            </div>
                            <div class="datatable-ajax-source">
                                <table id="datatables" class="table table-bordered table-condensed table-striped" style="font-size:11px;">
                                    <thead class="">
                                        <tr>
                                                        <th>id</th>
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
                                                        <th>Actions</th>

                                                    </tr>
                                    </thead>

                                    <tbody class="table-bordered">
                                        <tr>
                                            <td colspan="18" class="dataTables_empty"><img src="<?php echo assets_url('images/loader.gif');  ?>" title="Loading" alt="Loading">&nbsp;&nbsp; Loading data...</td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /saving state -->

                    </div>
                    <!-- /first tab content -->


                    <!-- Second tab content -->
                    <div class="tab-pane fade" id="outside">
                        <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><i class="icon-table"></i> Form users</h3>
                                    <div class="btn-group pull-right">
                                        <a href="#inside" data-toggle="tab" class="btn btn-success"><i class="icon-checkbox-partial"></i> Daftar Users</a>
                                        <a class="btn btn-info reset" href="#" >Reset Form</a>
                                    </div> 
                                </div>
                                <div class="panel-body">
                                    <div class="row clearfix">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 kelola" style="display:none">
                                            <div id="form_input" class="">
                                                <?php echo form_open(base_url().'users/submit',array('id'=>'addform','role'=>'form','class'=>'form')); ?>
                                            
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="hidden" value='' id="id" name="id">
                                                        

                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('ip_address : ','ip_address',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('ip_address','','id="ip_address" class="form-control" placeholder="Enter ip_address"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('username : ','username',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('username','','id="username" class="form-control" placeholder="Enter username"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('password : ','password',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('password','','id="password" class="form-control" placeholder="Enter password"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('salt : ','salt',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('salt','','id="salt" class="form-control" placeholder="Enter salt"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('email : ','email',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('email','','id="email" class="form-control" placeholder="Enter email"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('activation_code : ','activation_code',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('activation_code','','id="activation_code" class="form-control" placeholder="Enter activation_code"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('forgotten_password_code : ','forgotten_password_code',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('forgotten_password_code','','id="forgotten_password_code" class="form-control" placeholder="Enter forgotten_password_code"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('forgotten_password_time : ','forgotten_password_time',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('forgotten_password_time','','id="forgotten_password_time" class="form-control" placeholder="Enter forgotten_password_time"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('remember_code : ','remember_code',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('remember_code','','id="remember_code" class="form-control" placeholder="Enter remember_code"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('created_on : ','created_on',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('created_on','','id="created_on" class="form-control" placeholder="Enter created_on"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('last_login : ','last_login',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('last_login','','id="last_login" class="form-control" placeholder="Enter last_login"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('active : ','active',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('active','','id="active" class="form-control" placeholder="Enter active"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('first_name : ','first_name',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('first_name','','id="first_name" class="form-control" placeholder="Enter first_name"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('last_name : ','last_name',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('last_name','','id="last_name" class="form-control" placeholder="Enter last_name"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('company : ','company',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('company','','id="company" class="form-control" placeholder="Enter company"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('phone : ','phone',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('phone','','id="phone" class="form-control" placeholder="Enter phone"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <button id="save" type="submit" class="btn btn-md btn-success"><icon class="fa fa-floppy-o"></icon> Simpan</button>
                                                        <button id="save_edit" type="submit" class="btn btn-md btn-primary" style="display:none;"><icon class="fa fa-refresh"></icon> Perbaiki</button>
                                                        <a href="#" id="cancel_edit" class="btn btn-md btn-danger batal" style=""><i class="glyphicon glyphicon-remove"></i> Batal</a>
                                                    </div>
                                                </div>
                                                <?php echo form_close();?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <!-- /second tab content -->
                    </div>

            </div>
    </div>
</div>


        <div class="row clearfix">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

               
                
            
            </div>
        </div>
        
<!--     </div>
</div> -->
