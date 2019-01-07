<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/teacher.js"></script>
<script src="../../../firebase models/admin.js"></script>
<script src="../../../firebase models/fileupload.js"></script>
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
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name:</label>
                                <input  onkeyup="prvName()"  class="form-control" id="teacherFNameTxt" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Middle Name:</label>
                                <input  onkeyup="prvName()"  class="form-control" id="teacherMNameTxt" placeholder="Enter Middle Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Last Name:</label>
                                <input  onkeyup="prvName()"  class="form-control" id="teacherLNameTxt" placeholder="Enter Last Name">
                            </div>
                            
                            <div class="form-group">
                                <label >Gender:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input onkeyup="prvGender()" type="radio"   id="gm" class="form-check-input" value="Male" checked > Male
                                    </div>
                                    <div class="col-md-4">
                                        <input onkeyup="prvGender()" type="radio"  id="gf" class="form-check-input" value="Female">  Female
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Birth Day:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" class="form-control pull-right" id="date"/>
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
                                <label for="exampleInputEmail1">Grade:</label>
                                <select onkeyup="prvGrade()" id="teacherGradeText" class="form-control">
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Class:</label>
                                <select onkeyup="prvClass()" id="teacherClassText" class="form-control">
                                <option value="6">A</option>
                                <option value="7">B</option>
                                <option value="8">C</option>
                                <option value="9">D</option>
                                <option value="10">E</option>
                                <option value="11">F</option>
                                <option value="12">G</option>
                                <option value="12">H</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address:</label>
                                <textarea onkeyup="prvaddress()" class="form-control" id="teacherAddressTxt" rows="3" placeholder="Enter Address"></textarea>
                            </div>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input onkeyup="prvPhoneNo()" id="teacherTelNoTxt" type="text" class="form-control" >
                                </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Select Photo</label>
                                <progress id="uploader" value="0" max="100">0%</progress>
                                <input type="file" id="myfile">
                                <img width="100px" height="100px" src="" alt="waiting for upload" id="propic">
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
                                                <label class="text-muted" >School:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Grade:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Class:</label>
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
                                        <label id="previewSchool">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="previewGrade">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="previewClass">-</label>
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
                                        <button type="button" onclick="regiteacher()" class="btn btn-primary">Register</button>
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
            <input type="hidden" id="schoolid" value="">
        </div>
    </section>
</section>
<script>
    uploadstudentpic("teachers")
    getschool("tchrschool");
function regiteacher(){
    var tchrFName = document.getElementById("teacherFNameTxt").value;
    var tchrMName = document.getElementById("teacherMNameTxt").value;
    var tchrLName = document.getElementById("teacherLNameTxt").value;
    if(document.getElementById('gm').checked){
            var tchrGend = document.getElementById('gm').value;
        }else{
            var tchrGend = document.getElementById('gf').value;
        }
    var tchrbd = document.getElementById('date').value;
    var tchrEmail = document.getElementById("teacherEmailText").value;
    var tchrSchool = document.getElementById("tchrschool").value;
    var tchrGrade = document.getElementById("teacherGradeText").value;
    var tchrClass = document.getElementById("teacherClassText").value;
    var tchrAdNo = document.getElementById("teacherRegNoTxt").value;
    var tchrContact = document.getElementById("teacherTelNoTxt").value;
    var tchrAdd = document.getElementById("teacherAddressTxt").value;
    var teacher=[tchrFName,tchrMName,tchrLName,tchrGend,tchrbd,tchrEmail,tchrSchool,tchrGrade,tchrClass,tchrAdNo,tchrContact,tchrAdd]
    addteacher(teacher);
}

    // function prvUpdate() {
    //     //var tchrName = document.getElementById("teacherNameTxt").value;
    //     document.getElementById('previewName').innerHTML = tchrName;
    // // alert("You pre   ssed a key inside the input field");
    // }



</script>
<script>
    function prvName() {
        var tchrName = document.getElementById("teacherFNameTxt").value;
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
        if (tchrGender === "") {
            document.getElementById('previewGender').innerHTML = "-";
        }else{
            document.getElementById('previewGender').innerHTML = tchrGender;
        }
    }
</script>
<script>
    function prvDOB() {
        var tchrDOB = document.getElementById("teacherDOBTxt").value;
        if (tchrDOB === "") {
            document.getElementById('previewDOB').innerHTML = "-";
        }else{
            document.getElementById('previewDOB').innerHTML = tchrDOB;
        }
    }
</script>
<script>
    function prvEmail() {
        var tchrEmail = document.getElementById("teacherEmailText").value;
        if (tchrEmail === "") {
            document.getElementById('previewEmail').innerHTML = "-";
        }else{
            document.getElementById('previewEmail').innerHTML = tchrEmail;
        }
    }
</script>
<script>
    function prvSchool() {
        var tchrSchool = document.getElementById("teacherSchoolText").value;
        if (tchrSchool === "") {
            document.getElementById('previewSchool').innerHTML = "-";
        }else{
            document.getElementById('previewSchool').innerHTML = tchrSchool;
        }
    }
</script>
<script>
    function prvGrade() {
        var tchrGrade = document.getElementById("teacherGradeText").value;
        if (tchrGrade === "") {
            document.getElementById('previewGrade').innerHTML = "-";
        }else{
            document.getElementById('previewGrade').innerHTML = tchrGrade;
        }
    }
</script>
<script>
    function prvClass() {
        var tchrClass = document.getElementById("teacherClassText").value;
        if (tchrClass === "") {
            document.getElementById('previewClass').innerHTML = "-";
        }else{
            document.getElementById('previewClass').innerHTML = tchrClass;
        }
    }
</script>
<script>
    function prvRegNo() {
        var tchrReg = document.getElementById("teacherRegNoTxt").value;
        if (tchrReg === "") {
            document.getElementById('previewRegNo').innerHTML = "-";
        }else{
            document.getElementById('previewRegNo').innerHTML = tchrReg;
        }
    }
</script>
<script>
    function prvAddress() {
        var tchrAddress = document.getElementById("teacherAddressTxt").value;
        if (tchrAddress === "") {
            document.getElementById('previewAddress').innerHTML = "-";
        }else{
            document.getElementById('previewAddress').innerHTML = tchrAddress;
        } 
    }
</script>
<script>
    function prvPhoneNo() {
        var tchrTel = document.getElementById("teacherTelNoTxt").value;
        if (tchrTel === "") {
            document.getElementById('previewPhoneNo').innerHTML = "-";
        }else{
            document.getElementById('previewPhoneNo').innerHTML = tchrTel;
        } 
    }
</script>



<?php include_once('../admincommon/footer.php'); ?>



