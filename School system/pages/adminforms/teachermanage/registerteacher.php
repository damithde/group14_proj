<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/teacher.js"></script>
<script src="../../../firebase models/admin.js"></script>
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Teacher Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label  >Teacher ID:</label>
                                <label  id="studentIdLbl" class="text-muted">2016/ws/rk/52667</label>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name:</label>
                                <input  onkeyup="prvName()"  class="form-control" id="teacherNameTxt" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label >Gender:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input onkeyup="prvGender()" type="radio"  name="parent"  id="father" class="form-check-input" value="Father" > Male
                                    </div>
                                    <div class="col-md-4">
                                        <input onkeyup="prvGender()" type="radio"  name="parent" id="mother" class="form-check-input" value="Mother">  Female
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
                                <label for="exampleInputEmail1">Email:</label>
                                <input onkeyup="prvEmail()"  class="form-control" id="teacherEmailText" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Registration No:</label>
                                <input onkeyup="prvRegNo()" type="email" class="form-control" id="teacherRegNoTxt" placeholder="Enter Registration No">
                            </div>
                            <div class="form-group">
                            <label >School:</label>
                            <input type="text" class="form-control" id="tchrschool"  disabled>
                        </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address:</label>
                                <textarea onkeyup="prvaddress()" class="form-control" id="teacherAddressTxt" rows="3" placeholder="Enter Address"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Phone No:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input onkeyup="prvPhoneNo()" type="text" id="teacherTelNoTxt" class="form-control" data-inputmask='"mask": "(999) 9999999"' data-mask/>
                                </div><!-- /.input group -->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Select Photo</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">

                        </div>
                    </form>
                </div><!-- /.box -->
            </div>

            <div class="col-md-6">
                <!--                teacher details-->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Preview</h3>
                    </div><!-- /.box-header -->
                    <br>
                    <div class="row">
                    <div class="col-md-4"></div>
                        <div class="col-md-4">
                        <div class="col-md-6">
                                            <!-- Profile picture -->
                                            <div >
                                                <img src="../../../dist/img/user_100x128.png" alt="User Image">
                                            </div>
                                            
                                        </div>
                        </div>
                        
                    </div>
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <!--Lable field-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <!--  -->
                                        </div>
                                        <div class="col-md-9">
                                            <!--Lable names-->
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Date Of Birth:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Registration No:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Address:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Phone:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="previewName">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="previewGender">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="previewDOB">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="previewEmail">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="previewRegNo">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="previewAddress">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="previewPhoneNo">-</label>
                                    </div>
                                    <div >
                                        <button type="submit" class="btn btn-primary">Register</button>
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
        <div>
        </div>
    </section>
</section>
<script>
    getschool(tchrschool);

    var tchrName = document.getElementById("teacherNameTxt").value;
    var tchrGend = document.querySelector('input[name=gender]:checked').value;
    var tchrbd = document.querySelector('date').value;
    var tchrEmail = document.getElementById("teacherEmailText").value;
    var tchrAdNo = document.getElementById("teacherRegNoTxt").value;
    var tchrClass = document.getElementById("teacherAddressTxt").value;
    var tchrGrade = document.getElementById("teacherTelNoTxt").value;

    

    // function prvUpdate() {
    //     //var tchrName = document.getElementById("teacherNameTxt").value;
    //     document.getElementById('previewName').innerHTML = tchrName;
    // // alert("You pre   ssed a key inside the input field");
    // }



</script>
<script>
    function prvName() {
        var tchrName = document.getElementById("teacherNameTxt").value;
        if (tchrName === "") {
            document.getElementById('previewName').innerHTML = "-";
        }else{
            document.getElementById('previewName').innerHTML = tchrName;
        }
        
    }
</script>
<script>
    function prvGender() {
        var tchrGender = document.getElementById("input[name=parent]:checked").value;
        if (tchrName === "") {
            document.getElementById('previewGender').innerHTML = "-";
        }else{
            document.getElementById('previewGender').innerHTML = tchrGender;
        }
    }
</script>
<script>
    function prvDOB() {
        var tchrDOB = document.getElementById("teacherDOBTxt").value;
        if (tchrName === "") {
            document.getElementById('previewDOB').innerHTML = "-";
        }else{
            document.getElementById('previewDOB').innerHTML = tchrDOB;
        }
    }
</script>
<script>
    function prvEmail() {
        var tchrEmail = document.getElementById("teacherEmailText").value;
        if (tchrName === "") {
            document.getElementById('previewEmail').innerHTML = "-";
        }else{
            document.getElementById('previewEmail').innerHTML = tchrEmail;
        }
    }
</script>
<script>
    function prvRegNo() {
        var tchrReg = document.getElementById("teacherRegNoTxt").value;
        if (tchrName === "") {
            document.getElementById('previewRegNo').innerHTML = "-";
        }else{
            document.getElementById('previewRegNo').innerHTML = tchrReg;
        }
    }
</script>
<script>
    function prvAddress() {
        var tchrAddress = document.getElementById("teacherAddressTxt").value;
        if (tchrName === "") {
            document.getElementById('previewAddress').innerHTML = "-";
        }else{
            document.getElementById('previewAddress').innerHTML = tchrAddress;
        } 
    }
</script>
<script>
    function prvPhoneNo() {
        var tchrTel = document.getElementById("teacherTelNoTxt").value;
        if (tchrName === "") {
            document.getElementById('previewPhoneNo').innerHTML = "-";
        }else{
            document.getElementById('previewPhoneNo').innerHTML = tchrTel;
        } 
    }
</script>



<?php include_once('../admincommon/footer.php'); ?>



