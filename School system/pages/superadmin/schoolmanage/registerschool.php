<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
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
                    <h3 class="box-title">School Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label  >School Name:</label>
                            <input type="input" class="form-control" id="schoolNameTxt" placeholder="Enter School Name">
                        </div>
                        <div class="form-group">
                            <label  >Location :</label>
                            <input type="input" class="form-control" id="schoolLocationTxt" placeholder="Enter School Location">
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        
                    </div><!-- /.box-body -->

                    <div class="box-footer">

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
<script src="../../../firebase models/student.js"></script>
<script>
    var stdFName = document.getElementById("studentFNameTxt").value;
    var stdLName = document.getElementById("studentLNameTxt").value;
    var stdGend = document.querySelector('input[name=gender]:checked').value;
    var stdbd = document.querySelector('date').value;
    var stdReli = document.getElementById("studentReligionTxt").value;
    var stdEmail = document.getElementById("studentEmailTxt").value;
    var stdAdNo = document.getElementById("studentAdmissionNoTxt").value;
    var stdClass = document.getElementById("studentClassTxt").value;
    var stdGrade = document.getElementById("studentGradeTxt").value;
    var stdAddress = document.getElementById("studentAddressTxt").value;
    
    var par = document.querySelector('input[name=parent]:checked').value;
    var parName = document.getElementById("parentNameTxt").value;
    var parOcupation = document.getElementById("parentOcupationTxt").value;
    var parEmail = document.getElementById("parentEmail").value;
    var parAddress = document.getElementById("parentAddressTxt").value;
    var parent={name:parName,parent:par,occupation:parOcupation,email:parEmail};
    var student= [stdAdNo,stdFName,stdLName,contact,stdbd,stdAddress,stdReli,school,stdGrade,stdClass,stdEmail];
    addstudent(student,parent);


</script>

<?php include_once('../admincommon/footer.php'); ?>