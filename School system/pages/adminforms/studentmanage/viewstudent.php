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
    <script src="../../../firebase models/exam.js"></script>
    <script src="../../../firebase models/login.js"></script>
    <script src="../../../firebase models/fileupload.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>


</head>

<body>
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-6">
            
                

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Student Details</h3>
                    </div><!-- /.box-header -->
                    <br>
                    
                    

                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <!--Lable field-->

                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <div  class="form-group">
                                        <div class="input-group">
                                            <input id="idSearchTxt" type="text" name="q" class="form-control" placeholder="Search...">
                                            <span class="input-group-btn">   
                                                <button onclick="searchStudent()" type="button" name="search" class="btn btn-flat"><!---class="btn btn-flat"-->
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
                                                <label class="text-muted"  >Name Initials:</label>
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
                                        <label id="studentfNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentmNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentlNameLbl">-</label>
                                    </div>
                                    <div class="form-group">
                                        <label id="studentiNameLbl">-</label>
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
                                    <div class="form-group">
                                        <div> 
                                            
                                        </div>
                                        <a href="../studentmanage/editstudent.php" class="btn btn-sm btn-default btn-flat pull-right">Edit details</a>
                                    </div><!-- /.box-footer -->
                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->



                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Certificates</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Request Date</th>
                                    <th>Issued Date</th>
                                    <th>Certified By</th>
                                    <th>Reason</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-warning">57</span></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-danger">10</span></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-info">70</span></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-success">85</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <!-- <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Exams</a> -->
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
                

                </div>

                <div class="col-md-6 ">
                    <div>
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

                    <div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Progress of AVG mark</h3>
                            </div>
                            <div class="box-body chart-responsive">
                            <canvas id="myChart" width="400" height="400"></canvas>
                            </div>
                        <!-- /.box -->
                        </div>
                    </div>


                </div>
        </section>
</section>


</body>


<!-- <script>


    var studentfNameLbl
    var studentmNameLbl
    var studentlNameLbl
    var studentiNameLbl
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

    document.getElementById('studentfNameLbl').innerHTML = studentfNameLbl;
    document.getElementById('studentmNameLbl').innerHTML = studentmNameLbl;
    document.getElementById('studentlNameLbl').innerHTML = studentlNameLbl;
    document.getElementById('studentiNameLbl').innerHTML = studentiNameLbl;
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
    
</script> -->

<?php include_once('../admincommon/footer.php'); ?>

<script>
    
    function searchStudent(){
        var reg = document.getElementById("idSearchTxt").value;
        var school ="abc";
        getstudentsfromreg(reg);
        function getstudentsfromreg(reg){
            var output;
            db.collection("students").where("school","==",school).where("regno","==",reg)
            .get()
            .then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    output=doc.data();
                    document.getElementById('studentfNameLbl').innerHTML = output.Fname;
                    document.getElementById('studentmNameLbl').innerHTML = output.Mname;
                    document.getElementById('studentlNameLbl').innerHTML = output.Lname;

                    document.getElementById('studentiNameLbl').innerHTML = output.Iname;
                    document.getElementById('studentGenderLbl').innerHTML = output.fname;
                    document.getElementById('studentBdyLbl').innerHTML = output.dob;
                    document.getElementById('studentReligionLbl').innerHTML = output.religion;
                    document.getElementById('studentEmailLbl').innerHTML = output.email;
                    document.getElementById('studentAdtLbl').innerHTML = output.fname;
                    document.getElementById('studentMediumLbl').innerHTML = output.fname;
                    document.getElementById('studentClassLbl').innerHTML = output.fname;
                    document.getElementById('studentSectionLbl').innerHTML = output.grade;
                    document.getElementById('studentAddressLbl').innerHTML = output.address;
                    document.getElementById('studentPhoneLbl').innerHTML = output.contact;

                    document.getElementById('parentNameLbl').innerHTML = output.parent.name;
                    document.getElementById('parentOccupationLbl').innerHTML = output.parent.occupation;
                    document.getElementById('parentEmailLbl').innerHTML = output.parent.email;
                    document.getElementById('parentPhoneLbl').innerHTML = output.parent.Econtact;
                //console.log(doc.id, " => ", doc.data());
                });
            })
            .catch(function(error) {
                console.log("Error getting documents: ", error);
            });
        }
    }
</script>

<script>
    function createGraph(dataset){
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["2014", "2015", "2016", "2017", "2018", "2019"],
                datasets: [{
                    // label: '# of Votes',
                    //data: [65.56, 19.25, 37.25, 54.20, 62.56, 73.56],
                    data:dataset,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    }
</script>

<script>
    var School ="abc";
    getreports("11","6","sinhala","11","1");
    function getreports(Regno,Class,Grade,Year,Term) {
        var output = {};
        db.collection("reports").where("school", "==",School ).where("regno", "==", Regno).where("class", "==", Class).where("grade", "==", Grade).where("year", "==", Year).where("termno", "==", Term)
            .get()
            .then(function (querySnapshot) {
                querySnapshot.forEach(function (doc) {
                    output = doc.data();
                    var dataset = [output.sub1,output.sub2,output.sub3,
                                    output.sub4,output.sub5,output.sub6,
                                    output.sub7,output.sub8,output.sub9];
                    createGraph(dataset);

                    //console.log(doc.id, " => ", doc.data());

                });
            })
            .catch(function (error) {
                console.log("Error getting documents: ", error);
            });
        return output;

    }
</script>