<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
<head></head>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/student.js"></script>
<script src="../../../firebase models/admin.js"></script>
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
                                        <button type='button' name='search' id='search-btn' onclick="getstudentsfromreg(document.getElementById('searchTxt').value)" class="btn btn-flat"><i class="fa fa-search"></i></button>
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
                        <button type="button" class="btn btn-primary" onclick="update()" style="width:150px">Update</button>
                    </div>
                </form>
            </div><!-- /.box -->
        </div>
    </div>
    <div>
    </div>
    </section>
</section>
<input type="hidden" value="null" id="schoolid">

<script>
     getschool("schoolid");
function getstudentsfromreg(reg){
    var school=document.getElementById("schoolid").value;
    var output;
    db.collection("students").where("school","==",school).where("regno","==",reg)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            
            document.getElementById("studentFNameTxt").value = output.Fname ;
            document.getElementById("studentLNameTxt").value = output.Lname ;
            document.getElementById("studentMNameTxt").value = output.Mname ;
            //document.getElementById('input[name=gender]:checked').value = ;
            document.getElementById('date').value = output.dob;
            document.getElementById("studentReligionTxt").value = output.religion;
            document.getElementById("studentEmailTxt").value = output.email;
            document.getElementById("studentAdmissionNoTxt").value = output.regno;
            document.getElementById("studentClassTxt").value = output.class;
            document.getElementById("studentGradeTxt").value = output.grade;
            document.getElementById("studentAddressTxt").value = output.address;
            // document.querySelector('input[name=parent]:checked').value = par;
            document.getElementById("parentNameTxt").value = output.parent.name;
            document.getElementById("parentOcupationTxt").value =  output.parent.occupation;
            document.getElementById("parentEmail").value =  output.parent.email;
            document.getElementById("parentAddressTxt").value =  output.parent.name;
           //console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
}


function update() {
    var school=document.getElementById("schoolid").value;    
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
        updatestudent(regno,student,parent);   
}



</script>


?>
