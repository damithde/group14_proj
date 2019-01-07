
<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>


<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/reports.js"></script>
<script src="../../../firebase models/admin.js"></script>

<script src="../../../firebase models/login.js"></script>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-6 ">
                <div>

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Student Report</h3>
                        </div><!-- /.box-header -->

                        <br>

                        <form role="form">
                            <div class="box-body">
                                <!--Lable field-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                        </div>

                                        <div class="form-group">





                                                <div class="col-md-16">
                                                        <div  class="form-group">
                                                            <div class="input-group">
                                                                <input id="idSearchTxt" type="text" name="q" class="form-control" placeholder="Search...">
                                                                <span class="input-group-btn">
                                                <button onclick=" searchreport()" type="button" name="search" class="btn btn-flat"><!---class="btn btn-flat"-->
                                                <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>







                                    <div class="col-md-6">

                                        <div class="col-md-6">

                                            <!--Lable names-->


                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Name:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">School:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Grade:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Class:</label>
                                                </div>

                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Year:</label>
                                                </div>

                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Test No:</label>
                                                </div>



                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Subject1:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Subject2:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Subject3:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Subject4:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Subject5:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Subject6:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Subject7:</label>
                                                </div>

                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Subject8:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Subject9:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Total Marks:</label>
                                                </div>
                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Position:</label>
                                                </div>
                                            </div>
                                        </div>






                                    </div>









<div class="col-md-6">


                                        <div class="form-group">
                                            <label id="stuNameLbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="stuSchoolLbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="stuGradeLbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="stuClassLbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentYearLbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentTermTestNoLbl">-</label>
                                        </div>



                                        <div class="form-group">
                                            <label id="studentSubject1Lbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentSubject2Lbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentSubject3Lbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentSubject4Lbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentSubject5Lbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentSubject6Lbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentSubject7Lbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentSubject8Lbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentSubject9Lbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentTotalMarksLbl">-</label>
                                        </div>
                                        <div class="form-group">
                                            <label id="studentPositionLbl">-</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
    </section>
</section>








                            <!-- /.box-body -->
                            <div class="box-footer">
                            </div>
                        </form>
                    </div><!-- /.box -->
                    <script>
                        function searchreport(){
                            var regno = document.getElementById("idSearchTxt").value;
                            var school ="abc";
                            getreports(regno);
                            function getreports(regno){
                                var output;
                                db.collection("reports").where("school","==",school).where("regno","==",regno)
                                    .get()
                                    .then(function(querySnapshot) {
                                        querySnapshot.forEach(function(doc) {
                                            output=doc.data();








                                    document.getElementById('stuNameLbl').innerHTML=output.name;
                                    document.getElementById('stuSchoolLbl').innerHTML=output.school;

                                    document.getElementById('stuClassLbl').innerHTML=output.class;
                                    document.getElementById('stuGradeLbl').innerHTML=output.grade;
                                    document.getElementById('studentYearLbl').innerHTML=output.year;

                                    document.getElementById('studentTermTestNoLbl').innerHTML=output.termno;

                                    document.getElementById('studentSubject1Lbl').innerHTML=output.sub1;
                                    document.getElementById('studentSubject2Lbl').innerHTML=output.sub2;
                                    document.getElementById('studentSubject3Lbl').innerHTML=output.sub3;
                                    document.getElementById('studentSubject4Lbl').innerHTML=output.sub4;
                                    document.getElementById('studentSubject5Lbl').innerHTML=output.sub5;
                                    document.getElementById('studentSubject6Lbl').innerHTML=output.sub6;
                                    document.getElementById('studentSubject7Lbl').innerHTML=output.sub7;
                                    document.getElementById('studentSubject8Lbl').innerHTML=output.sub8;
                                    document.getElementById('studentSubject9Lbl').innerHTML=output.sub9;
                                    document.getElementById('studentTotalMarksLbl').innerHTML=output.totalmarks;
                                    document.getElementById('studentPositionLbl').innerHTML=output.position;
                                });
                            })
                                .catch(function(error) {
                                        console.log("Error getting documents: ", error);
                                    });
                                    }
                        }
                                    </script>




