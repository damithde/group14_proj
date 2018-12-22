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
                    <h3 class="box-title">Student Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label  >First Name:</label>
                            <input type="input" class="form-control" id="studentFNameTxt" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label  >Last Name:</label>
                            <input type="input" class="form-control" id="studentLNameTxt" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label >Gender:</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio"  name="gender" class="form-check-input" value="Male" > Male
                                </div>
                                <div class="col-md-4">
                                    <input type="radio"  name="gender" class="form-check-input" value="Female">  Female
                                </div>
                            </div>
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
                            <label  >Religion:</label>
                            <input type="input" class="form-control" id="studentReligionTxt" placeholder="Enter Religion">
                        </div>
                        <div class="form-group">
                            <label  >Email:</label>
                            <input type="email" class="form-control" id="studentEmailTxt" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label  >Admission No:</label>
                            <input type="input" class="form-control" id="studentAdmissionNoTxt" placeholder="Enter Admission No">
                        </div>
                        <div class="form-group">
                            <label >Class:</label>
                            <input type="input" class="form-control" id="studentClassTxt" placeholder="Enter Class">
                        </div>
                        <div class="form-group">
                            <label  >Section:</label>
                            <input type="input" class="form-control" id="studentSectionTxt" placeholder="Enter Section">
                        </div>
                        <div class="form-group">
                            <label  >Address:</label>
                            <textarea class="form-control" id="studentAddressTxt" rows="3" placeholder="Enter Address"></textarea>
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
                            <label >Select Photo</label>
                            <input type="file" id="exampleInputFile">
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">

                    </div>
                </form>
            </div><!-- /.box -->
        </div>

<!--        parent details-->
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Guardian's Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label >Guardian type:</label>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="radio"  name="parent"   class="form-check-input" value="Father" > Father
                                </div>
                                <div class="col-md-4">
                                    <input type="radio"  name="parent"  class="form-check-input" value="Mother">  Mother
                                </div>
                                <div class="col-md-4">
                                    <input type="radio"  name="parent"  class="form-check-input" value="Guardian">  Guardian
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  >Full Name:</label>
                            <input type="input" class="form-control" id="parentNameTxt" placeholder="Enter Full Name">
                        </div>
                        <div class="form-group">
                            <label for="InputOccupation">Occupation:</label>
                            <input type="text" class="form-control" id="parentOcupationTxt" placeholder="Enter Occupation">
                        </div>
                        <div class="form-group">
                            <label for="InputEmail1">Email:</label>
                            <input type="Email" class="form-control" id="parentEmail" placeholder="Enter Email">
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
                            <label  >Address:</label>
                            <textarea class="form-control" id="parentAddressTxt" rows="3" placeholder="Enter Address"></textarea>
                        </div>


                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Register</button>
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
    var stdReli = document.getElementById("studentReligionTxt").value;
    var stdEmail = document.getElementById("studentEmailTxt").value;
    var stdAdNo = document.getElementById("studentAdmissionNoTxt").value;
    var stdClass = document.getElementById("studentClassTxt").value;
    var stdGrade = document.getElementById("studentSectionTxt").value;
    var stdAddress = document.getElementById("studentAddressTxt").value;
    var par = document.querySelector('input[name=parent]:checked').value;
    var parName = document.getElementById("parentNameTxt").value;
    var parOcupation = document.getElementById("parentOcupationTxt").value;
    var parEmail = document.getElementById("parentEmail").value;
    var parAddress = document.getElementById("parentAddressTxt").value;
    var parent={name:parName,parent:par,occupation:parOcupation,email:parEmail};
    var student= [stdAdNo,stdFName,stdLName,contact,dob,stdAddress,stdReli,school,stdGrade,stdClass,stdEmail];
    addstudent(student,parent);


</script>

<?php include_once('../admincommon/footer.php'); ?>