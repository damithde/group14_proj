<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>


<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
            <div class="col-md-12">
<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Promote Student</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="col-md-4">

                    </div>
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
                                        <div class="form-group">
                                            <label  class="text-muted"> Student List:</label>
                                            <textarea class="form-control" id="studentAddressTxt" rows="3" placeholder="Enter Student Admission Numbers seperated by commas"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                    <label>Select grade to promote to  </label>
                                                    <select class="form-control" id = "grade" style="margin-left: 15px ; width: 100px">
                                                            <option value = "1">one</option>
                                                            <option value = "2">two</option>
                                                            <option value = "3">three</option>
                                                            <option value = "4">four</option>
                                                          </select>
                                            </div>
                                            <div class="form-group" >
                                                    <label>Select class to promote to </label>
                                                    <select class="form-control" id = "class" style="margin-left: 15px ; width: 100px">
                                                            <option value = "1">one</option>
                                                            <option value = "2">two</option>
                                                            <option value = "3">three</option>
                                                            <option value = "4">four</option>
                                                          </select>
                                            </div>
                                        </div>
                                        <div class="row"></div>
                                        <button type="button" class="btn btn-block btn-primary btn-lg" style="width:300px; margin-left: 200px">Promote</button>
                                    </div>
                                </div>
                                <div class="col-md-6">


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color:red">
                                    
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                        </div>  
                    </form>
                    <div class="box-footer">

                    </div>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<script>
    var stdFName = document.getElementById("studentIdText").value;
    var stdLName = document.getElementById("studentNameTxt").value;
    var stdLName = document.getElementById("messageTxt").value;
</script>

<?php include_once('../admincommon/footer.php'); ?>
