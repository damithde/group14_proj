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
                            <div class="col-md-2">
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
                            <div class="col-md-2">
                                <div id="noOfTermTxt" class="form-group">
                                    <!-- <label  >Grade:</label> -->
                                    <!-- <input type="input" class="form-control" id="studentGradeTxt" placeholder="Enter Grade"> -->
                                    <select>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="schoolTotaldaysTxt" placeholder="No of days">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="term1daysTxt" placeholder="No of days">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="term2daysTxt" placeholder="No of days">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="term3daysTxt" placeholder="No of days">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label  >Start Date:</label>
                                </div>
                                <div class="form-group">
                                    <label  >Start Date:</label>
                                </div>
                                <div class="form-group">
                                    <label  >Start Date:</label>
                                </div>
                                <div class="form-group">
                                    <label  >Start Date:</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div id="studentGradeTxt" class="form-group">
                                    <br>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="schoolStartDate"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="term1StartDate"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="term2StartDate"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="term3StartDate"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <br>
                                </div>
                                <div class="form-group">
                                    <label  >End Date:</label>
                                </div>
                                <div class="form-group">
                                    <label  >End Date:</label>
                                </div>
                                <div class="form-group">
                                    <label  >End Date:</label>
                                </div>
                                <div class="form-group">
                                    <label  >End Date:</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div id="studentGradeTxt" class="form-group">
                                    <br>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="schoolEndDate"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="term1EndDate"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="term2EndDate"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" class="form-control pull-right" id="term3EndDate"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                            
                            </div>

                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">

                    </div>
                </form>
            </div><!-- /.box -->
        </div>

        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Subjects</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="registerstudent.php" method="POST">
                    <div class="box-body">
                        <div class="row">
                            
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

<script>
    var noOfTermTxt = document.querySelector('noOfTermTxt').value;
    var schoolTotaldaysTxt = document.querySelector('schoolTotaldaysTxt').value;
    var term1daysTxt = document.querySelector('term1daysTxt').value;
    var term2daysTxt = document.querySelector('term2daysTxt').value;
    var term3daysTxt = document.querySelector('term3daysTxt').value;
    var schoolStartDate = document.querySelector('schoolStartDate').value;
    var term1StartDate = document.querySelector('term1StartDate').value;
    var term2StartDate = document.querySelector('term2StartDate').value;
    var term3StartDate = document.querySelector('term3StartDate').value;
    var schoolEndDate = document.querySelector('schoolEndDate').value;
    var term1EndDate = document.querySelector('term1EndDate').value;
    var term2EndDate = document.querySelector('term2EndDate').value;
    var term3EndDate = document.querySelector('term3EndDate').value;


</script>
