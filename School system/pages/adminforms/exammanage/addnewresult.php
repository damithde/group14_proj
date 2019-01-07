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
                                                <div  class="form-group">
                                                    <label  >Exam Term:</label>
                                                    <select id ="termTxt" class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div  class="form-group">
                                                    <label  >Exam Grade:</label>
                                                    <select id="gradeTxt" class="form-control">
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
                                                <div class="form-group">
                                                    <label  >Exam Class:</label>
                                                    <select id="classTxt" class="form-control">
                                                        <!-- <option value="sinhala">All</option>
                                                        <option value="english">A</option>
                                                        <option value="tamil">B</option>
                                                        <option value="english">C</option>
                                                        <option value="tamil">D</option>
                                                        <option value="english">E</option>
                                                        <option value="tamil">F</option>
                                                        <option value="english">G</option>
                                                        <option value="tamil">H</option> -->
                                                    </select>
                                                </div>
                                                
                                                </div>
                                                    <input type="hidden" id="schoolid" value="abc">
                                                <div >

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
                                                        <input id = "examDateTxt" style ="width:300px" type="date" class="form-control pull-right" />
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div  class="form-group">
                                                    <label >Subject:</label>
                                                    <select id="subjectTxt" class="form-control">
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
                                                <button style="width:150px" onclick="add1()" type="button" class="btn btn-primary">Load Student List</button>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                <button style="width:150px" onclick="myFunction()" type="button" class="btn btn-primary">Tst</button>
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
                                    <table id="studentResultsTable" class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Admission No</th>
                                                <th>Student Name</th>
                                                <th>Result</th>
                                            </tr>
                                            <tr id = "datarow">
                                                <td id = "admissionNoLbl">
                                                    1600254
                                                </td>
                                                <td id = "nameLbl">
                                                    -
                                                </td>
                                                <td id = "resultLbl">
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
                    
                </div><!-- /.box -->
<input type="hidden" id="stuschool">

    </section>
</section>
</div>
</body>
<?php include_once('../admincommon/footer.php'); ?>


<script>
    getschool("stuschool");
    function add1(){
        // var school = document.getElementById("schoolid").value;
        var term = document.getElementById("termTxt").value;
        var grade =document.getElementById("gradeTxt").value;
        var class1 = document.getElementById("classTxt").value;
        var date = document.getElementById('examDateTxt').value;
        var subject = document.getElementById("subjectTxt").value;
        var examId = term+date+subject;
        var exam=[examId,class1,date,grade,subject,term];
        addexam(exam);

    }
</script>

<script>
    // function myFunction() {
    // var table = document.getElementById("studentResultsTable");
    // var row = table.insertRow(-1);
    // var cell1 = row.insertCell(0);
    // var cell2 = row.insertCell(1);
    // var cell3 = row.insertCell(2);
    // cell1.innerHTML = '<td>-</td>';
    // cell2.innerHTML = '<td>-</td>';
    // cell3.innerHTML = '<td><input style ="width:500px" id="result" type="text" name="q" class="form-control" placeholder="Result"/></td>';
    // }



    // getstudents();
    // function getstudents(){
    //     var table = document.getElementById("studentResultsTable");
    //     var row = table.insertRow(-1);
    //     var output={};



    //     db.collection("students")
    //     .get()
    //     .then(function(querySnapshot) {
    //         querySnapshot.forEach(function(doc) {
    //             output[doc.id]=doc.data();
    //             //document.write(output.Fname);
    //             document.getElementById("result").innerHtML=output[0];
    //             // '<tr>'
    //             // var cell1 = row.insertCell(0);
    //             // var cell2 = row.insertCell(1);
    //             // var cell3 = row.insertCell(2);
    //             // cell1.innerHTML = '<td>-</td>';
    //             // cell2.innerHTML = '<td>-</td>';
    //             // cell3.innerHTML = '<td><input style ="width:500px" id="result" type="text" name="q" class="form-control" placeholder="Result"/></td>';
    //             // document.getElementById("result").value=output.Fname;
    //             // "<br>"
    //             // '</tr>'
    //             // doc.data() is never undefined for query doc snapshots
    //             //console.log(doc.id, " => ", doc.data());
    //         });
    //     })
    //     .catch(function(error) {
    //         console.log("Error getting documents: ", error);
    //     });
    //     return output;
    // }

    function getstudents(school,grade,cls){
        var output;
        db.collection("students").where("school","==",school).where("grade","==",grade).where("class","==",cls)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                output=doc.data();
                // doc.data() is never undefined for query doc snapshots
                //console.log(doc.id, " => ", doc.data());
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });  
    }

</script>




