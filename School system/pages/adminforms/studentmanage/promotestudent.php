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
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label ><h3>Generally Promote Student:</h3></label>
                                        <div class="form-group">
                                            <label  class="text-muted">Unqualified Student List:</label>
                                            <textarea class="form-control" id="studentAddressTxt" rows="3" placeholder="Enter Student Admission Numbers"></textarea>
                                        </div>
                                        <button type="button" class="btn btn-block btn-primary btn-lg">Promote</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color:red">
                                        Please manually promote grade 9 students to grade 10.<br>
                                        **Sybject combinations are available
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
