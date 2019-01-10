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
                                            
                                            <div class="input-group">
                                                <input id="examIdTxt" style ="width:300px" id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Admission No"/>
                                                <span class="input-group-btn">   
                                                <button onclick="loadresults()" type="button" name="search" class="btn btn-flat"><!---class="btn btn-flat"-->
                                                <i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                            </div>
                                            
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

                                <table id="tableLoad" class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Admission No</th>
                                            <th>Student Name</th>
                                            <th>Result</th>
                                        </tr>
    
                                        
                                        <tr id = "datarow">
                                            
                                           
                                            
                                            
                                            
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
    var school=document.getElementById("stuschool").value;

    
    
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


    function loadresults(){
        var school=document.getElementById("stuschool").value;
        var examid = document.getElementById("examIdTxt").value;
        var output;
        var i=0;
        db.collection("exam").where("school","==",school).where("examid","==",examid)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                output=doc.data();
                var regno =output.result.regno;
                var result =output.result.results;
                let a = 0;
                regno.forEach(function(entry){
                    getstudentsfromreg(entry)
                    function getstudentsfromreg(reg){
                        var output;
                        db.collection("students").where("school","==",school).where("regno","==",reg)
                        .get()
                        .then(function(querySnapshot) {
                            querySnapshot.forEach(function(doc) {
                                output=doc.data();
                                addrow(entry,output.Fname,result[a]);
                                a++;
                            //console.log(doc.id, " => ", doc.data());
                            });
                        })
                        .catch(function(error) {
                            console.log("Error getting documents: ", error);
                        });
                    }


                    // addrow(entry,result,result[0]);
                })
                
                // this.i=parseInt(i)+1;
                
            //console.log(doc.id, " => ", doc.data());
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
    }


    function addrow(a,b,c) {
        var table = document.getElementById("tableLoad");
        var row = table.insertRow(-1);
        var sid = row.insertCell(0);
        var name = row.insertCell(1);
        var result = row.insertCell(2);
        sid.innerHTML = a;
        name.innerHTML = b;
        result.innerHTML = c;
    }


    

    
</script>





