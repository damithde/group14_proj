<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="firebase models/db.js"></script>
<script src="firebase models/student.js"></script>
<!-- alertify -->    
<script src="plugins/alertify/alertify.min.js"></script>
    <link rel="stylesheet" href="plugins/alertify/css/alertify.min.css" />
    <link rel="stylesheet" href="plugins/alertify/css/themes/default.min.css" />
    <!-- alertify -->
</head>
	<body class="login-page">
    <div class="login-box">
        <div class="form-group">
            <div class="row">
            <div class="col-md-2"></div>
                
                <div class="login-box-body"> 
                        <p>I am a</p> 
                <label class="col-md-5">
                        <input id="up_radio" type="radio" name="optionsRadios" value="student" checked="checked">
                        Student
                    </label>
                    <label class="radio inline">
                        <input id="ov_radio" type="radio" name="optionsRadios" value="teacher">  
                        Teacher
                    </label>
                </div>

                <div id="studentDev" class="login-box-body" >

                    <div class="form-group has-feedback">
                        <input id="admissionNoTxt" type="text" class="form-control" placeholder="Admission No"/>
                        <span class="glyphicon glyphicon-pushpin form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="studentNameTxt" type="text" class="form-control" placeholder="Student Name"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="studentParentNameTxt" type="text" class="form-control" placeholder="Registered Parent Email"/>
                        <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="studentEmailTxt" type="text" class="form-control" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="studentPassword" type="text" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-8">  
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button id="studentBtn" onclick="addstudent()"  class="btn btn-primary btn-block btn-flat">Sign Up</button>
                        </div><!-- /.col -->
                    </div>
                </div>

                <div id="teacherDev" class="login-box-body" style="display:none">
                    <!-- <label class="col-md-5">
                        <input id="up_radio" type="radio" name="optionsRadios" value="student" >
                        Student
                    </label>
                    <label class="radio inline">
                        <input id="ov_radio" type="radio" name="optionsRadios" value="teacher" >  
                        Teacher
                    </label> -->

                    <div class="form-group has-feedback">
                        <input id="teacherRegistrationNoTxt" type="text" class="form-control" placeholder="Registration No"/>
                        <span class="glyphicon glyphicon-pushpin form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="teacherNameTxt" type="text" class="form-control" placeholder="Name"/>
                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="teacherNicTxt" type="text" class="form-control" placeholder="NIC"/>
                        <span class="glyphicon glyphicon-edit form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="teacherEmailTxt" type="text" class="form-control" placeholder="Email"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                        <input id="teacherPassword" type="text" class="form-control" placeholder="Password"/>
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-8">  
                        </div><!-- /.col -->
                        <div class="col-xs-4">
                            <button id="teacherBtn" onclick="addteacher()"  class="btn btn-primary btn-block btn-flat">Sign Up</button>
                        </div><!-- /.col -->
                    </div>
                </div>
            </div>
        </div>
    </div>
		
	<script>

	$('input[name="optionsRadios"]').on('change', function(){
        if ($(this).val()=='student') {
            
            
            document.getElementById("studentDev").style.display = 'block';
            document.getElementById("teacherDev").style.display = 'none';

        } else  {
        
            // $("#cont").text("show Overwritten");
            document.getElementById("studentDev").style.display = 'none';
            document.getElementById("teacherDev").style.display = 'block';
        }
    });
    
</script>

</body>
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<script type="text/javascript">

</script>

<script>
    var stdAdNo = document.getElementById("admissionNoTxt").value;
    var stdName = document.getElementById("studentNameTxt").value;
    var stdParEmail = document.getElementById("studentParentNameTxt").value;
    var stdEmail = document.getElementById("studentEmailTxt").value;
    var tchrRegNo = document.getElementById("teacherRegistrationNoTxt").value;
    var tchrName = document.getElementById("teacherNameTxt").value;
    var tchrNIC = document.getElementById("teacherNicTxt").value;
    var tchrEmail = document.getElementById("teacherEmailTxt").value;
    var type = document.querySelector('input[name=optionsRadios]:checked').value;
    var stdPass = document.getElementById("studentPassword").value;
    var tchrPass = document.getElementById("teacherPassword").value;
    

    function addstudent(){
        verifystudent(stdAdNo,stdName,stdEmail,stdParName,stdPass);
    }
    function addteacher(){
        verifyteacher(tchrRegNo,tchrName,tchrEmail,tchrNIC,tchrPass);
    }

    function verifystudent(stdAdNo,stdName,stdEmail,stdParEmail,stdPass) {
        db.collection("students").where("regno","==",stdAdNo)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                var output=doc.data();
                if((output.email==stdEmail)&&(output.parent.email==stdParEmail)){
                    createuser(email,stdPass,"student",stdAdNo);
                    alertify.alert('Hello student Your Account was created sucessfully,\n Please confirm your email!').setHeader('<em> Almost Done </em> ');
                    window.location.replace("index.php");
                }
                else{
                    alertify.alert('Entered details do not match with our system, please contact ur school admin').setHeader('<em> Oops </em> ');
                }
            
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });    
    }


    function verifyteacher(tchrRegNo,tchrName,tchrEmail,tchrNIC,tchrPass) {
        db.collection("teachers").where("regno","==",tchrRegNo)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                var output=doc.data();
                if((output.email==tchrEmail)&&(output.nic==tchrNIC)){
                    createuser(tchrEmail,tchrPass,"teacher",tchrRegNo);
                    alertify.alert('Hello Teacher Your Account was created sucessfully,\n Please confirm your email!').setHeader('<em> Almost Done </em> ');
                    window.location.replace("index.php");
                }
                else{
                    alertify.alert('Entered details do not match with our system please contact ur school admin').setHeader('<em> Oops </em> ');
                }
            //console.log(doc.id, " => ", doc.data());
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });    
    }


    function getstudentsfromreg(reg){
    let output={};
    db.collection("students").where("regno","==",reg)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
           //console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
    return output;
}


</script>
