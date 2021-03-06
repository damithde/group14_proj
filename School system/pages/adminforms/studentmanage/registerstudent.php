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
<script src="../../../firebase models/login.js"></script>
<script src="../../../firebase models/fileupload.js"></script>
</head>
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
                        <div class="form-group">
                            <label  >Student ID:</label>
                            <label  id="studentIdLbl" class="text-muted">2016/ws/rk/52667</label>
                        </div>
                        <div class="form-group">
                            <label  >First Name:</label>
                            <input type="text" class="form-control" id="studentFNameTxt" placeholder="Enter First Name" >
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
                                    <input type="radio" id="gm" name="gender" class="form-check-input" value="Male" checked> Male
                                </div>
                                <div class="col-md-4">
                                    <input type="radio" id="gf" name="gender" class="form-check-input" value="Female">  Female
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Birth Day:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control pull-right" id="bdate"/>
                            </div><!-- /.input group -->
                        </div>

                        <div class="form-group">
                            <label  >Religion:</label>
                            <input type="text" class="form-control" id="studentReligionTxt" placeholder="Enter Religion">
                        </div>
                        <div class="form-group">
                            <label  >Email:</label>
                            <input type="email" class="form-control" id="studentEmailTxt" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label  >Admission No:</label>
                            <input type="text" class="form-control" id="studentAdmissionNoTxt" placeholder="Enter Admission No">
                        </div>
                        <div class="form-group">
                            <label >School:</label>
                            <input type="text" class="form-control" id="stuschool"  disabled>
                        </div>
                        <div class="form-group">
                            <label  >Medium:</label>
                            <!-- <input type="input" class="form-control" id="studentGradeTxt" placeholder="Enter Grade"> -->
                            <select class="form-control"  id="studentMediumTxt" onchange="loadgrades()">
                            <option value="sinhala">Sinhala</option>
                            <option value="english">English </option>
                            <option value="tamil">Tamil</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label  >Grade:</label>
                            <!-- <input type="input" class="form-control" id="studentGradeTxt" placeholder="Enter Grade"> -->
                            <select class="form-control" id="studentGradeTxt" onchange="loadclasses()" >
                  
                            </select>
                        </div>
                        <div class="form-group">
                                <label >Class:</label>
                                <select type="text" class="form-control" id="studentClassTxt" ></select>
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
                                <input type="text" id="contact" class="form-control" />
                            </div><!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label >Select Photo</label>
                            <input type="file" id="myfile">
                            <progress id="uploader" value="0" max="100">0%</progress>
                            <img width="100px" height="100px" src="" alt="waiting for upload" id="propic">

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
                                    <input type="radio"  name="parent"   class="form-check-input" value="Father" id="p1" checked> Father
                                </div>
                                <div class="col-md-4">
                                    <input type="radio"  name="parent"  class="form-check-input" value="Mother" id="p2">  Mother
                                </div>
                                <div class="col-md-4">
                                    <input type="radio"  name="parent"  class="form-check-input" value="Guardian" id="p2">  Guardian
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
                                <input type="text" id="gaurdiancontact" class="form-control" />
                            </div><!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label  >Address:</label>
                            <textarea class="form-control" id="parentAddressTxt" rows="3" placeholder="Enter Address"></textarea>
                        </div>


                    <div class="box-footer">
                        <button type="button" class="btn btn-primary" onclick="datasubmission()" >Register</button>
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
    getschool("stuschool");
    uploadstudentpic("students");
    

function loadclasses() {
    var school=document.getElementById("stuschool").value;
    var grade = document.getElementById("studentGradeTxt").value;
    db.collection("schools").where("id","==",school)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                db.collection("schools").doc(doc.id).collection("grades").where("grade","==",grade)
                .get()
                .then(function(querySnapshot) {
                    querySnapshot.forEach(function(doc) {
                        var classes=doc.data().classes;
                        classes.forEach(function(cls){
                            var sel = document.getElementById("studentClassTxt");
                            var opt = document.createElement("option");
                            opt.value = cls;
                            opt.text = cls;
                            sel.add(opt);
                                
                        })
                        console.log(doc.id, " => ", classes);
                })
            })
        })
    })
}


function loadgrades() {
    var school=document.getElementById("stuschool").value;
    console.log(school);
    
    db.collection("schools").where("id","==",school)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                db.collection("schools").doc(doc.id).collection("grades")
                .get()
                .then(function(querySnapshot) {
                    querySnapshot.forEach(function(doc) {
                        var classes=doc.data().grade;
                            var sel = document.getElementById("studentGradeTxt");
                            var opt = document.createElement("option");
                            opt.value = classes;
                            opt.text = classes;
                            sel.add(opt);    
        
                        console.log(doc.id, " => ", classes);
                })
            })
        })
    })
}



    function datasubmission(){
        var school=document.getElementById("stuschool").value;    
        //set auto generated student id
       // document.getElementById("studentIdLbl").innerHTML = studentIdLbl;
        var stdFName = document.getElementById("studentFNameTxt").value;
        var stdMName = document.getElementById("studentMNameTxt").value;
        var stdLName = document.getElementById("studentLNameTxt").value;
        if(document.getElementById('gm').checked){
            var stdGend = document.getElementById('gm').value;
        }else{
            var stdGend = document.getElementById('gf').value;
        }
        //var stdGend = document.querySelector('input[name=gender]:checked').value;
        var stdbd = document.getElementById('bdate').value;
        var stdReli = document.getElementById("studentReligionTxt").value;
        var profileimg=document.getElementById("propic").src;
        var stdEmail = document.getElementById("studentEmailTxt").value;
        var stdAdNo = document.getElementById("studentAdmissionNoTxt").value;
        var stdClass = document.getElementById("studentClassTxt").value;
        var stdGrade = document.getElementById("studentGradeTxt").value;
        var contact=document.getElementById("contact").value;
        var stdAddress = document.getElementById("studentAddressTxt").value;
        var stdmedium = document.getElementById("studentMediumTxt").value;
        //var par = document.querySelector('input[name=parent]:checked').value;
        if(document.getElementById('p1').checked){
            var par = document.getElementById('p1').value;
        }else if(document.getElementById('p2').checked){
            var par = document.getElementById('p2').value;
        }else{
            var par = document.getElementById('p3').value;
        }
        var parName = document.getElementById("parentNameTxt").value;
        var parOcupation = document.getElementById("parentOcupationTxt").value;
        var parEmail = document.getElementById("parentEmail").value;
        var parAddress = document.getElementById("parentAddressTxt").value;
        var parContact = document.getElementById("gaurdiancontact").value;
        var studentId =school+stdAdNo;
        var parent={name:parName,parent:par,occupation:parOcupation,email:parEmail,Econtact:parContact};
        var student= [stdAdNo,stdFName,stdLName,contact,stdbd,stdAddress,stdReli,school,stdGrade,stdClass,stdEmail,profileimg,studentId,stdFName,stdmedium];
        addstudent(student,parent);
    }





</script>
<script>
// $(document).ready( function() {
//     	$(document).on('change', '.btn-file :file', function() {
// 		var input = $(this),
// 			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
// 		input.trigger('fileselect', [label]);
// 		});

// 		$('.btn-file :file').on('fileselect', function(event, label) {
		    
// 		    var input = $(this).parents('.input-group').find(':text'),
// 		        log = label;
		    
// 		    if( input.length ) {
// 		        input.val(log);
// 		    } else {
// 		        if( log ) alert(log);
// 		    }
	    
// 		});
// 		function readURL(input) {
// 		    if (input.files && input.files[0]) {
// 		        var reader = new FileReader();
		        
// 		        reader.onload = function (e) {
// 		            $('#img-upload').attr('src', e.target.result);
// 		        }
		        
// 		        reader.readAsDataURL(input.files[0]);
// 		    }
// 		}

// 		$("#imgInp").change(function(){
// 		    readURL(this);
// 		}); 	
// 	});
</script>

<?php include_once('../admincommon/footer.php'); ?>


