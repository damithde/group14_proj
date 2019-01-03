<?php include_once('../studentcommon/head.php'); ?>
<?php include_once('../studentcommon/header.php'); ?>
<?php include_once('../studentcommon/sidebar.php'); ?>
<?php include_once('../studentcommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

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
                                    <div> </div>
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
                         <!-- LINE CHART -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Progress of AVG mark</h3>
                            </div>
                            <div class="box-body chart-responsive">
                                <div class="chart" id="line-chart" style="height: 300px;">
                                    <svg height="300" version="1.1" width="509.5" xmlns="http://www.w3.org/100/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.5px; top: -0.700012px;">
                                        <desc>Created with Raphaël 2.2.0</desc>
                                        <defs></defs>
                                        <text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal">
                                            <tspan dy="4">0</tspan>
                                        </text>
                                        <path style="" fill="none" stroke="#aaaaaa" d="M66,261H484.5" stroke-width="0.5"></path>
                                        <text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal">
                                            <tspan dy="4">5,000</tspan>
                                        </text>
                                        <path style="" fill="none" stroke="#aaaaaa" d="M66,202H484.5" stroke-width="0.5"></path>
                                        <text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal">
                                            <tspan dy="4">10,000</tspan>
                                        </text>
                                        <path style="" fill="none" stroke="#aaaaaa" d="M66,143H484.5" stroke-width="0.5"></path>
                                        <text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal">
                                            <tspan dy="4">15,000</tspan>
                                        </text>
                                        <path style="" fill="none" stroke="#aaaaaa" d="M66,84H484.5" stroke-width="0.5"></path>
                                        <text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal">
                                            <tspan dy="4">20,000</tspan>
                                        </text>
                                        <path style="" fill="none" stroke="#aaaaaa" d="M66,25H484.5" stroke-width="0.5"></path>
                                        <text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="407.7156743620899" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                            <tspan dy="4">2013</tspan>
                                        </text>
                                        <text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="221.60267314702307" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                        <tspan dy="4">2012</tspan>
                                        </text>
                                        <path style="" fill="none" stroke="#3c8dbc" d="M66,229.5412C77.69562575941677,229.2108,101.0868772782503,231.53245,112.78250303766707,228.2196C124.47812879708384,224.90675000000002,147.86938031591737,204.50514644808743,159.56500607533414,203.0384C171.13350546780072,201.58759644808742,194.2705042527339,219.34895,205.83900364520048,216.5494C217.40750303766706,213.74984999999998,240.54450182260024,183.43358661202186,252.11300121506682,180.642C263.80862697448356,177.81973661202184,287.1998784933171,191.15875,298.8955042527339,194.094C310.59113001215064,197.02925,333.9823815309842,218.06921420765028,345.67800729040096,204.124C357.24650668286756,190.33036420765026,380.3835054678007,91.8402361878453,391.9520048602673,83.1386C403.3933778857837,74.53258618784531,426.27612393681653,125.20556758241757,437.7174969623329,134.89339999999999C449.4131227217497,144.79651758241758,472.80437424058323,154.85015,484.5,161.50240000000002" stroke-width="3"></path>
                                        <circle cx="66" cy="229.5412" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                        <circle cx="112.78250303766707" cy="228.2196" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                        <circle cx="159.56500607533414" cy="203.0384" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                        <circle cx="205.83900364520048" cy="216.5494" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                        <circle cx="252.11300121506682" cy="180.642" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                        <circle cx="298.8955042527339" cy="194.094" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                        <circle cx="345.67800729040096" cy="204.124" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                        <circle cx="391.9520048602673" cy="83.1386" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                        <circle cx="437.7174969623329" cy="134.89339999999999" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                        <circle cx="484.5" cy="161.50240000000002" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle>
                                    </svg>
                                        <div class="morris-hover morris-default-style" style="left: 22.5px; top: 162px; display: none;">
                                            <div class="morris-hover-row-label">2011 Q1</div>
                                            <div class="morris-hover-point" style="color: #3c8dbc">
                                                Item 1:
                                                2,666
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        <!-- /.box -->
                        </div>
                    </div>

                    <div>
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Delete Student</h3>
                            </div>
                                <div class="box-body">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <Label style="color:#F26268">
                                                    You are about to permanetly delete this student and all student contents.
                                                    You will not be able to recover this contents from database.<br><br>
                                                </label>
                                                </div>
                                            </div>
                                        <div class="row">
                                            
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <Label style="color:red"><b>THIS OPERATION CAN NOT BE UNDONE.</b></label>
                                                    <input type="Email" class="form-control" id="parentEmail" placeholder="Enter Student ID">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8"></div>
                                            <div class="col-md-4">
                                            <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right" style="color:#F26268">Confirm and Delete</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="box-footer">
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
        </section>
</section>


</body>


<script>


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
    
</script>

<?php include_once('../studentcommon/footer.php'); ?>