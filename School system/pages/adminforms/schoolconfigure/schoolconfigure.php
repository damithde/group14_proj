<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
<head>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/student.js"></script>
<script src="../../../firebase models/admin.js"></script>
<script src="../../../firebase models/fileupload.js"></script>
</head>
<section class="content-wrapper">
    <section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Term details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="registerstudent.php" method="POST">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label  >No of terms:</label>
                                </div>
                                <div class="form-group">
                                    <label  >Total no of days:</label>
                                </div>
                                <div class="form-group">
                                    <label  >Term 1 no of days:</label>
                                </div>
                                <div class="form-group">
                                    <label  >Term 2 no of days:</label>
                                </div>
                                <div class="form-group">
                                    <label  >Term 3 no of days:</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="studentFNameTxt" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="studentFNameTxt" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="studentFNameTxt" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="studentFNameTxt" placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="studentFNameTxt" placeholder="Enter First Name">
                                </div>
                            </div>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">

                    </div>
                </form>
            </div><!-- /.box -->
        </div>
    </div>
    </section>
</section>
