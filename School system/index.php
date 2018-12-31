<html>
<head>
    <meta charset="UTF-8">
    <title>Futura| Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
    <script src="firebase models/db.js"></script>
    <!-- alertify -->    
    <script src="plugins/alertify/alertify.min.js"></script>
    <link rel="stylesheet" href="plugins/alertify/css/alertify.min.css" />
    <link rel="stylesheet" href="plugins/alertify/css/themes/default.min.css" />
    <!-- alertify -->
    <script src="firebase models/login.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index.php"><b>W</b>elcome</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        
            <div class="form-group has-feedback">
                <input id="uname" type="text" class="form-control" name="uname" placeholder="Email"/>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="pass" type="password" class="form-control" name="pass" placeholder="Password"/>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Remember Me
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button id="sign" onclick="login()" type="submit"  class="btn btn-primary btn-block btn-flat">Sign In</button>
                </div><!-- /.col -->
                
            </div>
            <div class="row" style="margin-left: 1%">
                    <a href="signup.php">Sign Up</a>
                   
                </div><!-- /.col -->
    </div>
    
</div>


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
            increaseArea: '20%' // optional
        });
    });

    

document.getElementById("sign").addEventListener("click",checking);

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    //getuserdata();
  } else {
    // No user is signed in.
  }
});

function test(params) {
    alertify.alert('Welcome!').setHeader('<em> Logged In </em> ');
}


function checking(){
firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
      var loguser=firebase.auth().currentUser;
      if (loguser.emailVerified==false){//make this true
        alertify.alert('Welcome!').setHeader('<em> Logged In </em> ');
        getuserdata();//  a value based on that dirrect to user specific page
      }
      else{
        alertify.alert('please verify ur email before logining in').setHeader('<em> Not Verified </em> ');
      }
    
  } else {
  }

});
}

    
</script>

</html>