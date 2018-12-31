<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>
<head></head>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<section class="content-wrapper">
    <section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Report</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label  >Admission Number:</label>
                            <input type="input" class="form-control" id="studentAdmissionNoTxt" placeholder="Enter Admission Number">
                        </div>
                        <div class="form-group">
                            <label  >Name:</label>
                            <input type="input" class="form-control" id="studentLNameTxt" placeholder="Enter  Name">

                        </div>
                        <div class="form-group">
                            <label  >Class:</label>
                            <input type="input" class="form-control" id="studentClassTxt" placeholder="Enter Class">
                        </div>
                        <div class="form-group">
                            <label  >Term Test:</label>
                            <input type="email" class="form-control" id="studentTestNoTxt" placeholder="Enter Test No">
                        </div>
                        <div class="form-group">
                            <label  >Year:</label>
                            <input type="input" class="form-control" id="studentYearTxt" placeholder="Enter Year">
                        </div>
                        <div class="form-group">
                            <label >Position:</label>
                            <input type="input" class="form-control" id="studentPositionTxt" placeholder="Enter Position">
                        </div>

                        <div class="form-group">
                            <label  >Subject1:</label>
                            <input type="input" class="form-control" id="studentSubject1Txt" placeholder="Enter Sub1">
                        </div>
                        <div class="form-group">
                            <label  >Subject2:</label>
                            <input type="input" class="form-control" id="studentSubject2Txt" placeholder="Enter Sub2">
                        </div>
                        <div class="form-group">
                            <label  >Subject3:</label>
                            <input type="input" class="form-control" id="studentSubject3Txt" placeholder="Enter Sub3">
                        </div>
                        <div class="form-group">
                            <label  >Subject4:</label>
                            <input type="input" class="form-control" id="studentSubject4Txt" placeholder="Enter Sub4">
                            </div>
                        <div class="form-group">
                            <label  >Subject5:</label>
                            <input type="input" class="form-control" id="studentSubject5Txt" placeholder="Enter Sub5">
                        </div>
                        <div class="form-group">
                            <label  >Subject6:</label>
                            <input type="input" class="form-control" id="studentSubject6Txt" placeholder="Enter Sub6">
                        </div>

                        <div class="form-group">
                            <label  >Subject7:</label>
                            <input type="input" class="form-control" id="studentSubject7Txt" placeholder="Enter Sub7">
                        </div>
                        <div class="form-group">
                            <label  >Subject8:</label>
                            <input type="input" class="form-control" id="studentSubject8Txt" placeholder="Enter Sub8">
                        </div>
                        <div class="form-group">
                            <label  >Subject9:</label>
                            <input type="input" class="form-control" id="studentSubject9Txt" placeholder="Enter Sub9">
                        </div>



                    <div class="box-footer">

                    </div>
                </form>
            </div><!-- /.box -->
        </div>

<!--        parent details-->


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


<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/reports.js"></script>
<script>
    var stdAdmissionNo = document.getElementById("studentAdmissionNoTxt").value;
    var stdName = document.getElementById("studentLNameTxt").value;
    var stdClass = document.getElementById("studentClassTxt").value;
    var stdTestNo = document.getElementById("studentTestNoTxt").value;
    var stdAdNo = document.getElementById("studentAdmissionNoTxt").value;
    var stdYear = document.getElementById("studentYearTxt").value;
    var stdPosition = document.getElementById("studentPositionTxt").value;
    var stdSub1 = document.getElementById("studentSubject1Txt").value;
    var stdSub2 = document.getElementById("studentSubject2Txt").value;
    var stdSub3 = document.getElementById("studentSubject3Txt").value;
    var stdSub4 = document.getElementById("studentSubject4Txt").value;
    var stdSub5 = document.getElementById("studentSubject5Txt").value;
    var stdSub6 = document.getElementById("studentSubject6Txt").value;
    var stdSub7 = document.getElementById("studentSubject7Txt").value;
    var stdSub8 = document.getElementById("studentSubject8Txt").value;
    var stdSub9 = document.getElementById("studentSubject9Txt").value;

    var report= [stdAdmissionNo,stdName,stdClass,stdTestNo,stdAdNo,stdYear,stdPosition,stdSub1,stdSub2,stdSub3,stdSub4,stdSub5,stdSub6,stdSub7,stdSub8,stdSub9];
    addreport(report);


</script>

<?php include_once('../teachercommon/footer.php'); ?>