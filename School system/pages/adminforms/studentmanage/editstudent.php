<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
<head></head>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/student.js"></script>

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
                <form role="form" action="registerstudent.php" method="POST">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <!-- search form -->
                                <div class="form-group">
                                    <form action="#" method="get" class="form-group">
                                        <div class="input-group">
                                            <input type="text" id = "searchTxt" name="q" class="form-control" placeholder="Search..."/>
                                            <span class="input-group-btn">
                                        <button type='button' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label  >First Name:</label>
                            <input type="text" class="form-control" id="studentFNameTxt" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label  >Middle Name:</label>
                            <input type="text" class="form-control" id="studentMNameTxt" placeholder="Enter Middle Name">
                        </div>
                        <div class="form-group">
                            <label  >Last Name:</label>
                            <input type="text" class="form-control" id="studentLNameTxt" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label  >Name With Initials:</label>
                            <input type="text" class="form-control" id="studentiNameTxt" placeholder="Enter Name With Initials">
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
                                <input type="date" class="form-control pull-right" id="date"/>
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
                        <div id="studentMediumTxt" class="form-group">
                            <label  >Meadium:</label>
                            <!-- <input type="input" class="form-control" id="studentGradeTxt" placeholder="Enter Grade"> -->
                            <select class="form-control">
                            <option value="sinhala">Sinhala</option>
                            <option value="english">English </option>
                            <option value="tamil">Tamil</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Class:</label>
                            <input type="input" class="form-control" id="studentClassTxt" placeholder="Enter Class">
                        </div>
                        <div id="studentGradeTxt" class="form-group">
                            <label  >Grade:</label>
                            <!-- <input type="input" class="form-control" id="studentGradeTxt" placeholder="Enter Grade"> -->
                            <select class="form-control" >
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
                            <form action="../../fileupload.php" method="post" enctype="multipart/form-data">
                            <label >Select Photo</label>
                            <input type="file" id="myfile" >
                            <input type="button" value="upload" id="upload" >
                            </form>
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
                            <input type="text" class="form-control" id="parentNameTxt" placeholder="Enter Full Name">
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
                        <div class="col-md-8"></div>
                        <button type="button" class="btn btn-primary" style="width:150px">Update</button>
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
    var searchTxt
    var stdFName ="sss";
    var stdLName
    var stdGend
    var stdbd 
    var stdReli
    var stdEmail
    var stdAdNo
    var stdClass
    var stdGrade
    var stdAddress
    var par
    var parName
    var parOcupation
    var parEmail
    var parAddress
 

    document.getElementById("searchTxt").value = searchTxt;
    document.getElementById("studentFNameTxt").value = stdFName;
    document.getElementById("studentLNameTxt").value = stdLName;
    // document.querySelector('input[name=gender]:checked').value = stdGend;
    // document.querySelector('date').value = stdbd;
    document.getElementById("studentReligionTxt").value = stdReli;
    document.getElementById("studentEmailTxt").value = stdEmail;
    document.getElementById("studentAdmissionNoTxt").value = stdAdNo;
    document.getElementById("studentClassTxt").value = stdClass;
    document.getElementById("studentGradeTxt").value = stdGrade;
    document.getElementById("studentAddressTxt").value = stdAddress;
    // document.querySelector('input[name=parent]:checked').value = par;
    document.getElementById("parentNameTxt").value = parName;
    document.getElementById("parentOcupationTxt").value = parOcupation;
    document.getElementById("parentEmail").value = parEmail;
    document.getElementById("parentAddressTxt").value = parAddress;


</script>

<script>
    var studentIdLbl = document.getElementById("searchTxt").value;
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
<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>

<?php include_once('../admincommon/footer.php'); ?>

<?php

$target_dir = "../../dist/img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
    
// if everything is ok, try to upload file
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } 
    else {
        $message = base64_encode(urlencode("Sorry, there was an error uploading your file."));
        // header('Location:vendor-product-add.php?msg=' . $message);
        exit();
    }
}

//Uploading to Database
if (isset($_POST['submit'])){
    
$imageName = $_FILES["fileToUpload"]["name"];
$imageData = $_FILES["fileToUpload"]["tmp_name"];
$imageType = $_FILES["fileToUpload"]["type"];
	
    $productname = $_POST['name'];
    $volume = $_POST['volume'];  
    $price = $_POST['price'];
    checkSession();
    $userID = $_SESSION["userID"];
    
    $insertProduct = "INSERT INTO products (vendorID, name, volume, price, imageName) VALUES ('$userID','$productname', '$volume', '$price', '$imageName')";
    
    if (mysqli_query($connection,$insertProduct) === TRUE) {
                $message = base64_encode(urlencode("Product Added."));
				header('Location:vendor-product-add.php?msg=' . $message);
				exit();
        } 
    else {
        $message = base64_encode(urlencode("SQL Error while Registering"));
        header('Location:vendor-product-add.php?msg=' . $message);
        exit();
        }

 }
?>
