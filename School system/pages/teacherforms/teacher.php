<?php include_once('head.php'); ?>
<?php include_once('header2.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php //include_once('right_panel.php'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <!-- Content Header (Page header) -->
        <div class="row">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Teacher Details</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Teacher Name:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Admission No:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Admission No">
                    </div>
                    <div class="form-group">
                        <label>Birth Day:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="date"/>
                        </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Address:</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label>Phone No:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 9999999"' data-mask/>
                        </div><!-- /.input group -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Check me out
                        </label>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>
    </section>
</div>


<?php include_once('script.php'); ?>