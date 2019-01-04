
<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
<html>
    <head>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/admin.js"></script>
<script src="../../../firebase models/student.js"></script>
    </head>
<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
            <div class="col-md-12">

<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Search Student</h3>
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
                                                    <label  >Select Year:</label>
                                                    <select class="form-control" id="studentyear">
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
                                                <div  class="form-group">
                                                    <label  >Select Grade:</label>
                                                    <select class="form-control" id="studentgrade" onchange="">
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
                                                <div  class="form-group">
                                                    <label  >Select Class:</label>
                                                    <select class="form-control" id="studentclass">
                                                        <option value="sinhala">All</option>
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
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label class="text-muted">Search by Admission No</label>
                                                    <div class="input-group">
                                                        <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Admission No"/>
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
                                                    <label class="text-muted">Search by First Name</label>
                                                    <div class="input-group">
                                                        <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by First Name"/>
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
                                                    <label class="text-muted">Search by Last Name:</label>
                                                    <div class="input-group">
                                                        <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Last Name"/>
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
                                                <button style="width:150px" type="button" class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <hr>
                            <div class="row">
                                <div class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Student Details Details:</label>
                                    <table class="table table-bordered" id="s">
                                        <tbody>
                                            <tr>
                                                <th>Admission No</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Address</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="../studentmanage/viewstudent.php">1600254</a>
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                                <td>
                                                    -
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
                    <div class="box-footer">
                            <input type="hidden" id="schoolid" value="blank">
                    </div>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<script>
    getschool("schoolid");
    var year = document.getElementById("studentyear").value;
    var grade = document.getElementById("studentgrade").value;
    var cls = grade+document.getElementById("studentclass").value;

    function getstudentsfromreg(reg){
    var output;
    db.collection("students").where("schoolid","==",school).where("grade","==",grade).where("class","==",cls)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            var tableref=document.getElementById('s');
            var a = document.createElement('a');
            a.href = '../studentmanage/viewstudent.php';    
            var row=tableref.insertRow(-1);
            row.insertCell(0).appendChild(a);
            
            
            
           //console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
}







</script>

<?php include_once('../admincommon/footer.php'); ?>
