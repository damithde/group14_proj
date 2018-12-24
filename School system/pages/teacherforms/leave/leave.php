<?php include_once('leavehead.php'); ?>
<?php include_once('leaveheader.php'); ?>
<?php include_once('leavesidebar.php'); ?>
<?php include_once('leavescript.php'); ?>
<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
            <div class="col-md-12">

<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Application For Leave </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">School ID:1101</label>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name:</label>
                                <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Teacher ID:</label>
                                <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter Name">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Number Of Leave days:</label>
                                <input type="email" class="form-control" id="parentNameTxt" placeholder="Enter No Of days">
                            </div>
                            <div class="form-group">
                                <label>Date Of Commencing leave:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="date"/>
                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label>Date Of Assuming duties:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="date"/>
                                </div><!-- /.input group -->
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>

                    </form>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>
<?php include_once('../leave/leavefooter.php'); ?>
