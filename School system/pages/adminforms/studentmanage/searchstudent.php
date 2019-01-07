
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
                    <form role="form" >
                        <div class="box-body">



                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <div class="col-md-8">
                                                
                                                <div  class="form-group">
                                                    <label  >Select Year:</label>
                                                    <select class="form-control" id="studentyear" onchange=" loadgrades()" >
                                                        <option value="2019">2019</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                            
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div  class="form-group">
                                                    <label  >Select Grade:</label>
                                                    <select class="form-control" id="studentgrade" onchange="loadclasses()">
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
                                                    <select class="form-control" id="classlist" onchange="getstudents()">
                                                     
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
                                                        <input id="idSearch" type="text" name="q" class="form-control" placeholder="Search by Admission No"/>
                                                        <span class="input-group-addon">
                                                            <input id="ids" type="checkbox" >
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
                                                        <input id="FNameSearch" type="text" name="q" class="form-control" placeholder="Search by First Name"/>
                                                        <span class="input-group-addon">
                                                            <input id="fs" type="checkbox" >
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
                                                            <input id="ls" type="checkbox" >
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
                                                <th>Contact</th>
                                                <th>Reg no.</th>
                                                <th>Grade</th>
                                                <th>Class</th>
                                            </tr>
                                            <tr>
        
                                                
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

    

    function getstudents(){
    var year = document.getElementById("studentyear").value;
    var grade = document.getElementById("studentgrade").value;
    var cls = grade+document.getElementById("classlist").value;
    var school=document.getElementById("schoolid").value;
    var output;
    var rowCount = document.getElementById("s").rows.length;
    
    // for (var x=rowCount-1; x>0; x--) {
    //     document.getElementById("s").deleteRow(x);
    // }
    console.log(cls,school);
    db.collection("students").where("school","==",school).where("grade","==",grade).where("class","==",cls)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            var tableref=document.getElementById('s');
            var admin=doc.data();
            var row=tableref.insertRow(-1);
            row.insertCell(0).innerHTML=admin.regno;
            row.insertCell(1).innerHTML=admin.Fname+" "+ admin.Lname;
            row.insertCell(2).innerHTML=admin.contact;
            row.insertCell(3).innerHTML=admin.regno;
            row.insertCell(4).innerHTML=admin.grade;
            row.insertCell(4).innerHTML=admin.class;
            
            
            
           //console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });


}

function loadclasses() {
    var school=document.getElementById("schoolid").value;
    var grade = document.getElementById("studentgrade").value;
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
                            var sel = document.getElementById("classlist");
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


function loadgrades() {
    var school=document.getElementById("schoolid").value;
    
    db.collection("schools").where("id","==",school)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                db.collection("schools").doc(doc.id).collection("grades")
                .get()
                .then(function(querySnapshot) {
                    querySnapshot.forEach(function(doc) {
                        var classes=doc.data().grade;
                        classes.forEach(function(cls){
                            var sel = document.getElementById("studentgrade");
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


function search(params) {
    var school=document.getElementById("schoolid").value;
    var id =document.getElementById("ids").checked;
    var fs =document.getElementById("fs").checked;
    var ls =document.getElementById("ls").checked;
    var idval =document.getElementById("idSearch").value;
    var fname =document.getElementById("FNameSearch").value;
    var lname =document.getElementById("lNameSearch").value;

    if(id==true){
        var output;
        db.collection("students").where("school","==",school).where("regno","==",idval)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                var tableref=document.getElementById('s');
            var admin=doc.data();
            var row=tableref.insertRow(-1);
            row.insertCell(0).innerHTML=admin.regno;
            row.insertCell(1).innerHTML=admin.Fname+" "+ admin.Lname;
            row.insertCell(2).innerHTML=admin.contact;
            row.insertCell(3).innerHTML=admin.regno;
            row.insertCell(4).innerHTML=admin.grade;
            row.insertCell(4).innerHTML=admin.class;
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
        return;

    }
    else if((fs==true)&&(ls==true)){
        db.collection("students").where("school","==",school).where("fname","==",fname).where("lname","==",lname)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                var tableref=document.getElementById('s');
            var admin=doc.data();
            var row=tableref.insertRow(-1);
            row.insertCell(0).innerHTML=admin.regno;
            row.insertCell(1).innerHTML=admin.Fname+" "+ admin.Lname;
            row.insertCell(2).innerHTML=admin.contact;
            row.insertCell(3).innerHTML=admin.regno;
            row.insertCell(4).innerHTML=admin.grade;
            row.insertCell(4).innerHTML=admin.class;
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
        return;
    }
    else if(ls=true){

    }

}


</script>

<?php include_once('../admincommon/footer.php'); ?>
