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
    <script src="../../../firebase models/login.js"></script>
    <script src="../../../firebase models/fileupload.js"></script>
</head>


<body class="skin-blue">
<div class="wrapper">
<section class="content-wrapper">
    <section class="content-header">
        <!--                Exam results-->

                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Exam Results</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="col-md-4">

                    </div>
                    <form role="form">
                        <div class="box-body">

                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label  >Exam Year:</label>
                                                    <select id ="examYearTxt" class="form-control">
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
                                                <div id="gradeTxt" class="form-group">
                                                    <label  >Exam Grade:</label>
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
                                                <div id="classTxt" class="form-group">
                                                    <label  >Exam Class:</label>
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
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label class="text-muted">Exam ID</label>
                                                    <div class="input-group">
                                                        <input id="examIdTxt" style ="width:300px" id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Admission No"/>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label class="text-muted">Exam Date</label>
                                                    <div class="input-group">
                                                        <input id = "examDateTxt" style ="width:300px" id="lNameSearch" type="date" name="q" class="form-control" placeholder="Search by First Name"/>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label id = "subjectTxt" >Subject:</label>
                                                    <select class="form-control">
                                                        <option value="sinhala">Sinhala</option>
                                                        <option value="english">English</option>
                                                        <option value="tamil">Math</option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                <button style="width:150px" type="button" class="btn btn-primary">Load Student List</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <hr>
                            <div class="row">
                                <div class="col-md-10">
                                <div class="form-group">
                                <h4 class="box-title">Student Details</h4>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Admission No</th>
                                                <th>Student Name</th>
                                                <th>Result</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    1600254
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                                <td>
                                                    <input style ="width:500px" id="result" type="text" name="q" class="form-control" placeholder="Result"/>
                                                </td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>

                        </div>  
                    </form>
                    <div class="box-footer">

                    </div>
                </div><!-- /.box -->


    </section>
</section>
</div>
</body>


<script>

    getschool("stuschool");
    function datasubmission(){
        var studentMediumTxt = document.getElementById("studentMediumTxt").value;
        var gradeTxt = document.getElementById("gradeTxt").value;
        var classTxt = document.getElementById("classTxt").value;
        var studentMediumTxt = document.getElementById("studentMediumTxt").value;
        var subjectTxt = document.getElementById("subjectTxt").value;
        var examresult= [studentMediumTxt,gradeTxt,classTxt,studentMediumTxt,subjectTxt,subjectTxt];
        addexamresult(examresult);
    }
</script>

<?php include_once('../admincommon/footer.php'); ?>


