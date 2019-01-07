
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
                        <form role="form" action="viewreport.php" method="POST">
                        <br>

                        <form role="form">
                            <div class="box-body">
                                <!--Lable field-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label  >Select Year:</label>
                                                    <select class="form-control" id="studentyear">
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                        <option value="2014">2014</option>
                                                        <option value="2013">2013</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label  >Select Grade:</label>
                                                    <select class="form-control" id="studentgrade">
                                                        <option value=" Grade 6">Grade 6</option>
                                                        <option value=" Grade 7">Grade 7</option>
                                                        <option value="Grade 8">Grade 8</option>
                                                        <option value="Grade 9">Grade 9</option>
                                                        <option value="Grade 10">Grade 10</option>
                                                        <option value="Grade 11">Grade 11</option>
                                                        <option value="Grade 12">Grade 12</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label  >Select Class:</label>
                                                    <select class="form-control" id="studentclass">
                                                        <option value="All">All</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label  >Term Test No:</label>
                                                    <select class="form-control" id="studenttest">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                            </div>
                                            <div class="form-group">

                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label  >Registration Number:</label>
                                                        <input type="text" class="form-control" id="studentRegNo" placeholder="Enter Admission Number">
                                                    </div>


                                                        <div class="box-footer">
                                                            <button type="button" class="btn btn-primary" onclick="getreports('161','Grade 8','All','2019','2')" >search</button>
                                                        </div>






                                    <div class="col-md-6">

                                        <div class="col-md-6">

                                            <!--Lable names-->
                                            <div class="form-group">

                                                <div class="form-group">
                                                    <label class="text-muted" for="exampleInputEmail1">Registration Number:</label>
                                                </div>

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
                                            <label id="studentAdmissionNoLbl">-</label>
                                        </div>
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
                        var school="abc";
                        getreports('161','Grade 8','All','2019','2');

                        function getreports(studentRegNo,studentclass,studentgrade,studentyear,studenttest){


                        var output;


                        db.collection("reports").where("school","==",school).where("grade","==",studentgrade).where("class","==",studentclass).where("year","==",studentyear).where("testno","==",studenttest).where("studentreg","==",studentRegNo)
                            .get()
                            .then(function(querySnapshot) {
                                querySnapshot.forEach(function(doc) {

                                    output = doc.data();
                                    var studentAdmissionNoLbl
                                    var stuNameLbl
                                    var stuSchoolLbl
                                    var stuGradeLbl
                                    var stuClassLbl
                                    var studentTermTestNoLbl
                                    var studentYearLbl


                                    var studentSubject1Lbl
                                    var studentSubject2Lbl
                                    var studentSubject3Lbl
                                    var studentSubject4Lbl
                                    var studentSubject5Lbl
                                    var studentSubject6Lbl
                                    var studentSubject7Lbl
                                    var studentSubject8Lbl
                                    var studentSubject9Lbl
                                    var studentTotalMarksLbl
                                    var studentPositionLbl





                                    document.getElementById('studentAdmissionNoLbl').innerHTML=output.regno;
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
                                    </script>


                        <?php include_once('../teachercommon/footer.php'); ?>

