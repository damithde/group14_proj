<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js" xmlns="http://www.w3.org/1999/html"
        xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<section class="content-wrapper">
    <div class="content-header">
        <div class="row">

            <div class="col-md-6">

            <!--            left side panel-->

                <!--                student details-->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Student Details</h3>
                    </div><!-- /.box-header -->
                    <br>
                    <div class="row">
                    </div>

                    <div class="form-group">
                        <div class="col-md-8">
                            <div id="studentMediumTxt" class="form-group">
                                <label  >Select Grade:</label>
                                <select class="form-control">
                                    <option value="6">Grade 6</option>
                                    <option value="7">Grade 7</option>
                                    <option value="8">Grade 8</option>
                                    <option value="9">Grade 9</option>
                                    <option value="10">Grade 10</option>
                                    <option value="11">Grade 11</option>
                                    <option value="12">Grade 12</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div id="studentMediumTxt" class="form-group">
                                <label  >Select Class:</label>
                                <select class="form-control">
                                    <option value="sinhala">All</option>
                                    <option value="english">A</option>
                                    <option value="tamil">B</option>
                                    <option value="english">C</option>
                                    <option value="tamil">D</option>
                                    <option value="english">E</option>
                                    <option value="tamil">F</option>
                                    <option value="english">G</option>
                                    <option value="tamil">H</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <div id="studentMediumTxt" class="form-group">
                                    <label class="text-muted">Enter Registration Number</label>
                                    <div class="input-group">
                                        <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Enter Register Number"/>
                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div id="studentMediumTxt" class="form-group">
                                <button style="width:150px" type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </div>
                    </div>




                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <!--Lable field-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
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
                                        <div class="col-md-6">

                                            <!--Lable names-->
                                            <div class="form-group">
                                                <label class="text-muted"  >Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Date Of Birth:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Religion:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Admission Date:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Medium:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Class:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Section:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Address:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted"  >Phone:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                        <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="studentNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentGenderLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentBdyLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentReligionLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentEmailLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentAdtLbl">-</label>
                                    </div>
                                            <div class="form-group">
                                                <label id="studentMediumLbl">-</label>
                                            </div>
                                    <div class="form-group">
                                        <label id="studentClassLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentSectionLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentAddressLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentPhoneLbl">-</label>
                                    </div>

                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->



                                            <div class="box box-primary">
                                            <div class="box-header  with-border">
                                                <h3 class="box-title">Guardian's Details</h3>
                                            </div><!-- /.box-header -->
                                            <!-- form start -->
                                            <form role="form">
                                                <div class="box-body">
                                                    <div class="form-group">
                                                        <label >Guardian type:</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <input type="radio"  name="parent"  id="father" class="form-check-input" value="Father" > Father
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="radio"  name="parent" id="mother" class="form-check-input" value="Mother">  Mother
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="radio"  name="parent" id="guardian" class="form-check-input" value="Guardian">  Guardian
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="text-muted"  >Name:</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-muted"  >Occupation:</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-muted"  >Email:</label>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="text-muted"  >Phone:</label>
                                                            </div>
                                                        </div>

                                                        


                                                <div class="col-md-8">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label  id="parentNameLbl">-</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label id="parentOccupationLbl">-</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label id="parentEmailLbl">-</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <label id="parentPhoneLbl">-</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                                      </form>
                                                  </div><!-- /.box -->
                                                   </div>



                                                         </div>

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
                                                                                    <div class="col-md-8">
                                                                                        <div id="studentMediumTxt" class="form-group">
                                                                                            <label  >Select Year:</label>
                                                                                            <select class="form-control">
                                                                                                <option value="6">2019</option>
                                                                                                <option value="7">2018</option>
                                                                                                <option value="8">2017</option>
                                                                                                <option value="9">2016</option>
                                                                                                <option value="10">2015</option>
                                                                                                <option value="11">2014</option>
                                                                                                <option value="1">2013</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                        <div class="form-group">
                                                                            <div class="col-md-8">
                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <label  >Select Grade:</label>
                                                                                    <select class="form-control">
                                                                                        <option value="6">Grade 6</option>
                                                                                        <option value="7">Grade 7</option>
                                                                                        <option value="8">Grade 8</option>
                                                                                        <option value="9">Grade 9</option>
                                                                                        <option value="10">Grade 10</option>
                                                                                        <option value="11">Grade 11</option>
                                                                                        <option value="12">Grade 12</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-md-8">
                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <label  >Select Class:</label>
                                                                                    <select class="form-control">
                                                                                        <option value="sinhala">All</option>
                                                                                        <option value="english">A</option>
                                                                                        <option value="tamil">B</option>
                                                                                        <option value="english">C</option>
                                                                                        <option value="tamil">D</option>
                                                                                        <option value="english">E</option>
                                                                                        <option value="tamil">F</option>
                                                                                        <option value="english">G</option>
                                                                                        <option value="tamil">H</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-md-8">
                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <label  >Term Test No:</label>
                                                                                    <select class="form-control">
                                                                                        <option value="1">1</option>
                                                                                        <option value="2">2</option>
                                                                                        <option value="3">3</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>

                                                                        <div class="col-md-6">
                                                                        </div>
                                                                        <div class="form-group">

                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <label class="text-muted"> Enter Registration Number</label>
                                                                                    <div class="input-group">
                                                                                        <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Enter Register Number"/>
                                                                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                        </div>
                                                                        </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="col-md-8">
                                                                                <div id="studentMediumTxt" class="form-group">
                                                                                    <button style="width:150px" type="submit" class="btn btn-primary">Search</button>
                                                                                </div>
                                                                            </div>
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
                                                                                    <label class="text-muted" for="exampleInputEmail1">Class:</label>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Term Test:</label>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="text-muted" for="exampleInputEmail1">Year:</label>
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
                                                                                    <label class="text-muted" for="exampleInputEmail1">Subject7::</label>
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
                                                                                <label id="stuClassLbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentTermTestNoLbl">-</label>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label id="studentYearLbl">-</label>
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






                                                                <!-- /.box-body -->
                                                                <div class="box-footer">
                                                                </div>
                                                        </form>
                                                    </div><!-- /.box -->



                                    <div class="box box-primary">
                <div class="box-header with-border">

                    <h3 class="box-title">Exam Results</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-md-8">
                            <div id="studentMediumTxt" class="form-group">
                                <label  >Select Grade:</label>
                                <select class="form-control">
                                    <option value="6">Grade 6</option>
                                    <option value="7">Grade 7</option>
                                    <option value="8">Grade 8</option>
                                    <option value="9">Grade 9</option>
                                    <option value="10">Grade 10</option>
                                    <option value="11">Grade 11</option>
                                    <option value="12">Grade 12</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-8">
                            <div id="studentMediumTxt" class="form-group">
                                <label  >Select Class:</label>
                                <select class="form-control">
                                    <option value="sinhala">All</option>
                                    <option value="english">A</option>
                                    <option value="tamil">B</option>
                                    <option value="english">C</option>
                                    <option value="tamil">D</option>
                                    <option value="english">E</option>
                                    <option value="tamil">F</option>
                                    <option value="english">G</option>
                                    <option value="tamil">H</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-8">
                            <div id="studentMediumTxt" class="form-group">
                                <label  >Select Subject :</label>
                                <select class="form-control">
                                    <option value="1">Mathematics</option>
                                    <option value="2">English</option>
                                    <option value="3">Sinhala</option>
                                    <option value="4">Science</option>
                                    <option value="5">History</option>
                                    <option value="6">Buddhism</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Details Details:</label>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>Registration No</th>
                                        <th>Marks</th>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="../studentmanage/viewstudent.php">1600254</a>
                                        </td>
                                        <td>
                                            -
                                        </td>


                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                                        </form>



                                    </div>

                                                                 </div>







<?php
    $dataPoints = array(
        array("label"=>"55-65", "y"=>64.02),
        array("label"=>"75-100", "y"=>12.55),
        array("label"=>"0-35", "y"=>8.47),
        array("label"=>"35-55", "y"=>6.08),
        array("label"=>"65-75", "y"=>4.29),

    )

    ?>


        <script>
            window.onload = function() {


                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    title: {
                        text: "English"
                    },

                    data: [{
                        type: "pie",
                        yValueFormatString: "#,##0.00\"%\"",
                        indexLabel: "{label} ({y})",
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                    }]
                });
                chart.render();

            }
        </script>
                                                 </div>
    </div>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    </body>
    </html>

</section>
</section>

    </section>


    <section >



<script>
    var studentNameLbl
    var studentGenderLbl
    var studentBdyLbl
    var studentReligionLbl
    var studentEmailLbl
    var studentAdtLbl
    var studentMediumLbl
    var studentClassLbl
    var studentSectionLbl
    var studentAddressLbl
    var studentPhoneLbl
    var parentNameLbl
    var parentOccupationLbl
    var parentEmailLbl
    var parentPhoneLbl





    document.getElementById('studentNameLbl').innerHTML = studentNameLbl;
    document.getElementById('studentGenderLbl').innerHTML = studentGenderLbl;
    document.getElementById('studentBdyLbl').innerHTML = studentBdyLbl;
    document.getElementById('studentReligionLbl').innerHTML = studentReligionLbl;
    document.getElementById('studentEmailLbl').innerHTML = studentEmailLbl;
    document.getElementById('studentAdtLbl').innerHTML = studentAdtLbl;
    document.getElementById('studentMediumLbl').innerHTML = studentMediumLbl;
    document.getElementById('studentClassLbl').innerHTML = studentClassLbl;
    document.getElementById('studentSectionLbl').innerHTML = studentSectionLbl;
    document.getElementById('studentAddressLbl').innerHTML = studentAddressLbl;
    document.getElementById('studentPhoneLbl').innerHTML = studentPhoneLbl;
    document.getElementById('parentNameLbl').innerHTML = parentNameLbl;
    document.getElementById('parentOccupationLbl').innerHTML = parentOccupationLbl;
    document.getElementById('parentEmailLbl').innerHTML = parentEmailLbl;
    document.getElementById('parentPhoneLbl').innerHTML = parentPhoneLbl;


</script>
    <script>


    var studentAdmissionNoLbl
    var stuNameLbl
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

    document.getElementById('studentAdmissionNoLbl').innerHTML=studentAdmissionNoLbl;
    document.getElementById('stuNameLbl').innerHTML=stuNameLbl;
    document.getElementById('stuClassLbl').innerHTML=stuClassLbl;
    document.getElementById('studentTermTestNoLbl').innerHTML=studentTermTestNoLbl;
    document.getElementById('studentYearLbl').innerHTML=studentYearLbl;
    document.getElementById('studentPositionLbl').innerHTML=studentPositionLbl;
    document.getElementById('studentSubject1Lbl').innerHTML=studentSubject1Lbl;
    document.getElementById('studentSubject2Lbl').innerHTML=studentSubject2Lbl;
    document.getElementById('studentSubject3Lbl').innerHTML=studentSubject3Lbl;
    document.getElementById('studentSubject4Lbl').innerHTML=studentSubject4Lbl;
    document.getElementById('studentSubject5Lbl').innerHTML=studentSubject5Lbl;
    document.getElementById('studentSubject6Lbl').innerHTML=studentSubject6Lbl;
    document.getElementById('studentSubject7Lbl').innerHTML=studentSubject7Lbl;
    document.getElementById('studentSubject8Lbl').innerHTML=studentSubject8Lbl;
    document.getElementById('studentSubject9Lbl').innerHTML=studentSubject9Lbl;
    document.getElementById('studentTotalMarksLbl').innerHTML=studentTotalMarksLbl;
    document.getElementById('studentPositionLbl').innerHTML=studentPositionLbl;

</script>
        <script>
            var  admissionNoLbl
            var studentsNameLbl
             var marksLbl

            document.getElementById('admissionNoLbl').innerHTML=admissionNoLbl;
            document.getElementById('studentsNameLbl').innerHTML=studentsNameLbl;
            document.getElementById('marksLbl').innerHTML=marksLbl;


        </script>
            <?php include_once('../teachercommon/footer.php'); ?>

