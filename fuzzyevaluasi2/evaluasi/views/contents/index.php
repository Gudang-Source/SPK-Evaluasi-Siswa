    <div class="row">
            <div class="tabbable page-tabs">
                <ul class="nav nav-tabs">
                    <li class="daftar active"><a href="#inside" data-toggle="tab"><i class="icon-checkbox-partial"></i> Daftar Evaluasi</a></li>
                    <li class="baru"><a href="#outside" data-toggle="tab"><i class="icon-plus"></i> Tambah Evaluasi Baru</a></li>
                </ul>
                <div class="tab-content">
                    
                    <!-- First tab content -->
                    <div class="tab-pane active fade in" id="inside">
                        <!-- AJAX source -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h6 class="panel-title"><i class="icon-table"></i> Daftar Evaluasi</h6> 
                                <div class="btn-group pull-right">
                                    <a href="#outside" data-toggle="tab" class="btn btn-success"><i class="icon-plus"></i> Tambah Evaluasi Baru</a>
                                </div> 
                            </div>
                            <div class="datatable-ajax-source">
                                <table id="datatables" class="table table-bordered table-condensed table-striped" style="font-size:11px;">
                                    <thead class="">
                                        <tr>
                                                        <th>id_evaluasi</th>
                                                        <th>id_siswa</th>
                                                        <th>prestasi</th>
                                                        <th>keaktifan</th>
                                                        <th>kehadiran</th>
                                                        <th>datetime</th>
                                                        <th>Actions</th>

                                                    </tr>
                                    </thead>

                                    <tbody class="table-bordered">
                                        <tr>
                                            <td colspan="{numfield}" class="dataTables_empty"><img src="<?php echo assets_url('images/loader.gif');  ?>" title="Loading" alt="Loading">&nbsp;&nbsp; Loading data...</td>
                                            
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
                                    <h3 class="panel-title"><i class="icon-table"></i> Form evaluasi</h3>
                                    <div class="btn-group pull-right">
                                        <a href="#inside" data-toggle="tab" class="btn btn-success"><i class="icon-checkbox-partial"></i> Daftar Evaluasi</a>
                                        <a class="btn btn-info reset" href="#" >Reset Form</a>
                                    </div> 
                                </div>
                                <div class="panel-body">
                                    <div class="row clearfix">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 kelola" style="display:none">
                                            <div id="form_input" class="">
                                                <?php echo form_open(base_url().'evaluasi/submit',array('id'=>'addform','role'=>'form','class'=>'form')); ?>
                                            
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <input type="hidden" value='' id="id_evaluasi" name="id_evaluasi">
                                                        

                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('id_siswa : ','id_siswa',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('id_siswa','','id="id_siswa" class="form-control" placeholder="Enter id_siswa"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('prestasi : ','prestasi',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('prestasi','','id="prestasi" class="form-control" placeholder="Enter prestasi"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('keaktifan : ','keaktifan',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('keaktifan','','id="keaktifan" class="form-control" placeholder="Enter keaktifan"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('kehadiran : ','kehadiran',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('kehadiran','','id="kehadiran" class="form-control" placeholder="Enter kehadiran"'); ?>
                                                                </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <?php echo form_label('datetime : ','datetime',array('class'=>'control-label')); ?>
                                                                <div class="controls">
                                                                    <?php echo form_input('datetime','','id="datetime" class="form-control" placeholder="Enter datetime"'); ?>
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
