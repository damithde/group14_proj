<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
<html>
<head>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script> 
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>   
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/admin.js"></script>
</head>

<body>
<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
            <div class="col-md-12">
<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Promote Student</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="col-md-4">

                    </div>
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
                                        <div class="form-group">
                                            <label  class="text-muted"> Student List:</label>
                                            <textarea class="form-control" id="studentAddressTxt" rows="3" placeholder="Enter Student Admission Numbers seperated by commas"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                    <label>Select grade to promote to  </label>
                                                    <select class="form-control" id = "grade" style="margin-left: 15px ; width: 100px" onchange="checksub()">
                                                            <option value = "6">Six</option>
                                                            <option value = "7">Seven</option>
                                                            <option value = "8">Eight</option>
                                                            <option value = "9">Nine</option>
                                                            <option value = "10">Ten</option>
                                                            <option value = "11">Eleven</option>
                                                            <option value = "12">Twelve</option>
                                                            <option value = "13">Thirteen</option>
                                                          </select>
                                            </div>
                                            <div class="form-group" >
                                                    <label>Select class to promote to </label>
                                                    <select class="form-control" id = "class" style="margin-left: 15px ; width: 100px">
                                                            <option value = "1">one</option>
                                                            <option value = "2">two</option>
                                                            <option value = "3">three</option>
                                                            <option value = "4">four</option>
                                                          </select>
                                            </div>
                                        </div>
                                        <div class="row"></div>
                                        <button type="button" class="btn btn-block btn-primary btn-lg" style="width:300px; margin-left: 200px">Promote</button>
                                    </div>
                                </div>
                                <div class="col-md-6" id="subjectselection">
                                    <label>fefefe</label>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color:red">
                                    
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                        </div>  
                    </form>
                    <div class="box-footer">

                    </div>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>
</body>
<input type="text" id="schoolid" value="blank" >
</html>
<script>
    getschool("schoolid");
    setTimeout(p ,2000);
    
    function p(){
        var school=document.getElementById("schoolid").value;
        
    
    
    
    }
    function checksub() {
        var grade = document.getElementById("grade").value;

        if (grade==10) {
            //show the div 
            
        }
        else if (grade==12) {
            //show other div
        }
    }


</script>

<?php include_once('../admincommon/footer.php'); ?>
