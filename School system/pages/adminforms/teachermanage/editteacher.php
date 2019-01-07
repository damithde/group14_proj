<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

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
                        <h3 class="box-title">Teacher Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <div class="row">
                                <div class="col-md-8">
                                    <div  class="form-group">
                                        <div class="input-group">
                                            <input id="idSearchTxt" type="text" name="q" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">   
                                                <button onclick="searchTeacher()" type="button" name="search" class="btn btn-flat"><!---class="btn btn-flat"-->
                                                <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>                
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">First Name:</label>
                                <input  onkeyup="prvName()"  class="form-control" id="teacherNameTxt" placeholder="Enter First Name">
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
                                <label for="exampleInputEmail1">Name With Initials:</label>
                                <input  onkeyup="prvName()"  class="form-control" id="teacherINameTxt" placeholder="Enter Name With Initials">
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
                                        <button type="button" class="btn btn-primary">Register</button>
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
    var teacherNameTxt
    var teacherGender
    var teacherBDYTxt
    var teacherEmailText
    var teacherRegNoTxt
    var teacherAddressTxt
    var teacherTelNoTxt

    document.getElementById("teacherNameTxt").value=teacherNameTxt;
    // document.querySelector('input[name=gender]:checked').value;
    // document.querySelector('date').value=date;
    document.getElementById("teacherEmailText").value=teacherEmailText;
    document.getElementById("teacherRegNoTxt").value=teacherRegNoTxt;
    document.getElementById("teacherAddressTxt").value=teacherAddressTxt;
    document.getElementById("teacherTelNoTxt").value=teacherTelNoTxt;
</script>

<script>
    var tchrName = document.getElementById("teacherNameTxt").value;
    var tchrGend = document.querySelector('input[name=gender]:checked').value;
    var tchrbd = document.querySelector('date').value;
    var tchrEmail = document.getElementById("teacherEmailText").value;
    var tchrAdNo = document.getElementById("teacherRegNoTxt").value;
    var tchrClass = document.getElementById("teacherAddressTxt").value;
    var tchrGrade = document.getElementById("teacherTelNoTxt").value;

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


<?php
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>
