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
                                            <select id ="termTxt" class="form-control" onchange="loadgrades()">
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
                                            <select class="form-control" id="studentGradeTxt" onchange="loadclasses()">
                                            <!-- onchange="loadclasses()" -->
                                                  
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label  >Exam Class:</label>
                                            <select id="studentClassTxt" class="form-control">
                                                
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
                                                <input id="examIdTxt" style ="width:300px" id="lNameSearch" type="text" name="q" class="form-control" placeholder="Exam ID"/>
                                                
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
                                        <button style="width:150px" onclick="loadstudents()" type="button" class="btn btn-primary">Load Student List</button>
                                        </div>
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                <hr>
                    <div class="row">
                        <div class="col-md-12">
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
                                            <td >
                                                <div class="form-group">
                                                    <div class="col-md-8">
                                                        <div  class="form-group">
                                                            
                                                            <select style="width:120px" class="form-control" id="studentregNoTxt" onchange="getstudentsfromreg()" onload="getstudentsfromreg()" > 
                                                            <!-- onchange="getstudentsfromreg()" -->
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <label style="width:300px" id="stuNameTxt">-</label>
                                            </td>
                                            <td >
                                                <input style ="width:100px" id="studentResultTxt" type="text" name="q" class="form-control" placeholder="Result"/>
                                            </td>
                                            <td>
                                                <div id="studentMediumTxt" class="form-group">
                                                    <button style="width:150px" onclick="addrow()" type="button" class="btn btn-primary">Add</button>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <div class="form-group">
                                <button style="width:120px" onclick="addexam()" type="button" class="btn btn-primary">Save</button>
                                <!-- onclick="addexam()" -->
                                </div>
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
    var school=document.getElementById("stuschool").value;
    var regnums=[];
    var results=[];

    function loadgrades() {
        var school=document.getElementById("stuschool").value;
        console.log(school);
        
        db.collection("schools").where("id","==",school)
            .get()
            .then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    db.collection("schools").doc(doc.id).collection("grades")
                    .get()
                    .then(function(querySnapshot) {
                        querySnapshot.forEach(function(doc) {
                            var classes=doc.data().grade;
                            var sel = document.getElementById("studentGradeTxt");
                            var opt = document.createElement("option");
                            opt.value = classes;
                            opt.text = classes;
                            sel.add(opt);    
            
                            console.log(doc.id, " => ", classes);
                    })
                })
            })
        })
    }

    function loadclasses() {
        var school=document.getElementById("stuschool").value;
        var grade = document.getElementById("studentGradeTxt").value;
        db.collection("schools").where("id","==",school)
            .get()
            .then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    db.collection("schools").doc(doc.id).collection("grades").where("grade","==",grade)
                    .get()
                    .then(function(querySnapshot) {
                        querySnapshot.forEach(function(doc) {
                            var classes=doc.data().classes;
                            classes.forEach(function(cls){
                                var sel = document.getElementById("studentClassTxt");
                                var opt = document.createElement("option");
                                opt.value = cls;
                                opt.text = cls;
                                sel.add(opt);
                                    
                            })
                            console.log(doc.id, " => ", classes);
                    })
                })
            })
        })
    }


    function loadstudents(){
        var school=document.getElementById("stuschool").value;
        var grade = document.getElementById("studentGradeTxt").value;
        var cls = document.getElementById("studentClassTxt").value;
        db.collection("students").where("school","==",school).where("grade","==",grade).where("class","==",cls)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                var regno =doc.data().regno;
                var sel = document.getElementById("studentregNoTxt");
                var opt = document.createElement("option");
                opt.value =  regno;
                opt.text = regno;
                sel.add(opt);
                // doc.data() is never undefined for query doc snapshots
                console.log(doc.id, " => ", doc.data());
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
        
    }

    function getstudentsfromreg(){
        var school=document.getElementById("stuschool").value;
        var reg=document.getElementById("studentregNoTxt").value;
        var output;
        db.collection("students").where("school","==",school).where("regno","==",reg)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                output=doc.data();
                document.getElementById("stuNameTxt").innerHTML=output.Fname;
                
            //console.log(doc.id, " => ", doc.data());
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
    }

    function addexam(){
        var school=document.getElementById("stuschool").value;
        var n = this.regnums;
        var r = this.results;
        var rst={regno:n,results:r};
        
        var term=document.getElementById("termTxt").value;
        var examid=document.getElementById("examIdTxt").value;
        var date=document.getElementById("examDateTxt").value;
        var grade=document.getElementById("studentGradeTxt").value;
        var class1=document.getElementById("studentClassTxt").value;
        var subject=document.getElementById("subjectTxt").value;
        var exams=[school,term,examid,date,grade,class1,subject];

        db.collection("exam").doc(exams[2]).set({
            school: exams[0],
            term:exams[1],
            examid: exams[2],
            date:exams[3],
            grade: exams[4],
            class1: exams[5],
            subject: exams[6],
            result:rst

        })
        .then(function(docRef) {
            alert("exam results added successfully");
        // console.log("Document written with ID: ", docRef.id);
        })
        .catch(function(error) {
            alert("Error adding document: ", error);
        });
    }


    function addrow() {
        var table = document.getElementById("studentResultsTable");
        var row = table.insertRow(-1);
        var sid = row.insertCell(0);
        var name = row.insertCell(1);
        var result = row.insertCell(2);
        sid.innerHTML = document.getElementById("studentregNoTxt").value;

        getstudentsfromreg();
        function getstudentsfromreg(){
            var school=document.getElementById("stuschool").value;
            var reg=document.getElementById("studentregNoTxt").value;
            var output;
            db.collection("students").where("school","==",school).where("regno","==",reg)
            .get()
            .then(function(querySnapshot) {
                querySnapshot.forEach(function(doc) {
                    output=doc.data();
                    name.innerHTML =output.Fname;
                    
                //console.log(doc.id, " => ", doc.data());
                });
            })
            .catch(function(error) {
                console.log("Error getting documents: ", error);
            });
        }




        // name.innerHTML = document.getElementById("stuNameTxt").value;
        result.innerHTML = document.getElementById("studentResultTxt").value;
        this.regnums.push(document.getElementById("studentregNoTxt").value);
        this.results.push(document.getElementById("studentResultTxt").value);
        console.table(regnums);
        console.table(results);
    }


    
</script>





