<head>
    <meta charset="UTF-8">
    <title>Student SingUp</title>
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
</head> 

<form  method="post">
<body class="login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="../../index.php"><b>S</b>ing Up</a>
        </div><!-- /.login-logo -->
        <div class="login-box-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <input type="radio"  name="user" id="student" class="form-check-input" value="student" >Student
                    </div>
                    <div class="col-md-5">
                        <input type="radio"  name="user" id="teacher" class="form-check-input" value="teacher">  Teacher
                    </div>
                    <div><br/></div>
                    <div id="cont" class="login-box-body">
                        <div class="form-group has-feedback">
                            <input id="registrationNoTxt" type="text" class="form-control" placeholder="Registration No"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input id="studentNameTxt" type="text" class="form-control" placeholder="Student Name"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input id="studentParentNameTxt" type="text" class="form-control" placeholder="Registered Parent Name"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input id="studentEmailTxt" type="text" class="form-control" placeholder="Email"/>
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-8">  
                            </div><!-- /.col -->
                            <div class="col-xs-4">
                                <button id="test" onclick="addstudent1()"  class="btn btn-primary btn-block btn-flat">Sign Up</button>
                            </div><!-- /.col -->
                        </div>
                    </div>


                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-8">  
                </div><!-- /.col -->
            </div>
        </div>
    </div>
    
    <script>
        $('input[name="user"]').on('change', function(){
            if ($(this).val()=='student') {
                
                //change to "show update"
                $("#cont").text("show update");
                
            } else  {
            
                $("#cont").text("show Overwritten");
            }
        });
    </script>

</body>
</form>
<!-- jQuery 2.1.3 -->
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '50%' // optional
        });
    }); 
</script>

<?php 
    if(isset($_POST['student'])){
        header("Location:singupStudent.php");
        exit;
    }
    if(isset($_POST['teacher'])){
        header("Location:singupTeacher.php");
        exit;
    }
?>

