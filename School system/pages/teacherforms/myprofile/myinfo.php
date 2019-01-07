<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>

<head>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/student.js"></script>
<script src="../../../firebase models/admin.js"></script>
<script src="../../../firebase models/exam.js"></script>
<script src="../../../firebase models/login.js"></script>
<script src="../../../firebase models/fileupload.js"></script>
</head>

<body>
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-12">

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Teacher Details</h3>
                    </div><!-- /.box-header -->
                    <form role="form">
                        <div class="box-body">

                        <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <div  class="form-group">
                                        <div class="input-group">
                                            <input id="idSearchTxt" type="text" name="q" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">   
                                                <button onclick="searchTeachers()" type="button" name="search" class="btn btn-flat"><!---class="btn btn-flat"-->
                                                <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>                
                                </div>
                            </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        <!-- Profile picture -->
                                        <div >
                                            <img src="../../../dist/img/user_100x128.png" alt="User Image">
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-2">
                                                <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-edit"></i></a></label>
                                            </div>
                                            <div class="col-md-2">
                                                <label><a href="../teachermanage/registerteacher.php"><i class="fa  fa-print"></i></a></label>
                                            </div>
                                            <div class="col-md-2">
                                                <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-download"></i></a></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!--Lable names-->
                                    <div class="form-group">
                                        <label class="text-muted"  >First Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Middle Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Last Name:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Name with Initials:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Gender:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Date Of Birth:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" >Email:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Admission Date:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Grade:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Class:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Address:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Phone:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"  >Current Status:</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label id = "teacherfNameTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id = "teachermNameTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id = "teacherlNameTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id = "teacheriNameTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id = "teacherGenderTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherBDYTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id ="teacherEmailTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="admissionDateTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherClassTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherGradeTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacheraddressTxt">-</label>
                            </div>
                            <div class="form-group">
                                <label id="teacherTelTxt">-</label>
                            </div>
                            <div class="form-group">
                                <div> 
                                    

                        </div>
                    </div>
                    <div class="box-footer">
                    </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
</body>

<?php include_once('../teachercommon/footer.php'); ?>


<script>
    
    function searchTeachers(){
        var reg = document.getElementById("idSearchTxt").value;
        var school ="abc";
        searchteacher(reg);
        function searchteacher(reg){
            var output;
            db.collection("teachers").where("school","==",school).where("regno","==",reg)
            .get()
            .then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    output=doc.data();
                    document.getElementById("teacherfNameTxt").innerHTML = output.Fname;
                    document.getElementById("teachermNameTxt").innerHTML = output.Mname;
                    document.getElementById("teacherlNameTxt").innerHTML = output.Lname;
                    document.getElementById("teacheriNameTxt").innerHTML = output.Iname;
                    document.getElementById('teacherGenderTxt').innerHTML = output.Gender;
                    document.getElementById('teacherBDYTxt').innerHTML = output.bdy;
                    document.getElementById("teacherEmailTxt").innerHTML = output.email;
                    document.getElementById("admissionDateTxt").innerHTML = output.add;
                    document.getElementById("teacherClassTxt").innerHTML = output.class;
                    document.getElementById("teacherGradeTxt").innerHTML = output.grade;
                    document.getElementById("teacheraddressTxt").innerHTML = output.address;
                    document.getElementById("teacherTelTxt").innerHTML = output.contact;

                //console.log(doc.id, " => ", doc.data());
                });
            })
            .catch(function(error) {
                console.log("Error getting documents: ", error);
            });
        }
    }
</script>