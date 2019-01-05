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

<body>
<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
            <div class="col-md-12">
<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Promote Student</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="col-md-4">

                    </div>
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
                                        <div class="form-group">
                                            <label  class="text-muted"> Student List:</label>
                                            <textarea class="form-control" id="studentidTxt" rows="3" placeholder="Enter Student Admission Numbers seperated by commas"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                    <label>Select grade to promote to  </label>
                                                    <select class="form-control" id = "idgrade" style="margin-left: 15px ; width: 100px" onchange="setTimeout(p ,500)">
                                                            <option value = "6">Six</option>
                                                            <option value = "7">Seven</option>
                                                            <option value = "8">Eight</option>
                                                            <option value = "9">Nine</option>
                                                            <option value = "10">Ten</option>
                                                            <option value = "11">Eleven</option>
                                                            <option value = "12">Twelve</option>
                                                            <option value = "13">Thirteen</option>
                                                          </select>
                                            </div>
                                            <div class="form-group" >
                                                    <label>Select class to promote to </label>
                                                    <select class="form-control" id = "classlist" style="margin-left: 15px ; width: 100px">
         
                                                    </select>
                                            </div>
                                            <div class="form-group" >
                                                    <label>Select Current year </label>
                                                    <select class="form-control" id = "year" style="margin-left: 15px ; width: 100px">
                                                            <option value = "2018">2018</option>
                                                            
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="row"></div>
                                        <button type="button" onclick="promote()" class="btn btn-block btn-primary btn-lg" style="width:300px; margin-left: 200px">Promote</button>
                                    </div>
                                </div>
                                <div class="col-md-6" id="subjectselection">
                                    <label><h4 class="box-title">Subject Selection</h6></label><br>
                                        <table id="s">

                                        </table>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color:red">
                                    
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                        </div>  
                    </form>
                    <div class="box-footer">

                    </div>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>
</body>
<input type="text" id="schoolid" value="blank" >
</html>


<script>
    getschool("schoolid");
    setTimeout(p ,1500);
    function p(){
        var grade=document.getElementById("idgrade").value;
        var school=document.getElementById("schoolid").value;
        $("#classlist").empty();
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
                        if((grade==10) || (grade==12) ||(grade==11) || (grade==13)){
                            document.getElementById("subjectselection").style.display = 'block';
                            var i=0;
                            var subs=doc.data().subjects;
                            subs.forEach(function(sub){
                                var tableref=document.getElementById('s');
                                var newCheckbox = document.createElement("input");
                                newCheckbox.type = "checkbox";
                                newCheckbox.name = "subject"+i;
                                newCheckbox.value = sub;
                                //document.getElementById("subjectselection").appendChild(newCheckbox);
                                var row=tableref.insertRow(-1);
                                row.insertCell(0).appendChild(newCheckbox);
                                //var label = document.createElement('label');
                               // label.htmlFor = sub;
                               // label.appendChild(document.createTextNode(sub));
                                row.insertCell(1).innerHTML=sub ;
                                i++;

                               // document.getElementById("subjectselection").appendChild(label);
                                //document.getElementById("subjectselection").appendChild(document.createElement("br"));

                             })
                        }
                        else{
                            document.getElementById("subjectselection").style.display = 'none';
                        }
                    });
                })
                .catch(function(error) {
                    console.log("Error getting documents: ", error);
                });
            
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
    
    }

    function promote(){
        var school=document.getElementById("schoolid").value;
        var tograde=document.getElementById("idgrade").value;
        var toclass=document.getElementById("classlist").value;
        var idlist=(document.getElementById("studentidTxt").value).split(',');
        var sublist=GetCellValues();
        var year=document.getElementById("year").value;
        promotestudent(idlist,tograde,toclass,year,sublist,school);
    }



    function GetCellValues() {
    var table = document.getElementById('s');
    var sublist=[];
    for (var r = 0, n = table.rows.length; r < n; r++) {    
            var check=$('input:checkbox[name=subject'+r+']').is(':checked');
            if(check==true)
                sublist.push($('input:checkbox[name=subject'+r+']').val());
        
    }
    return sublist;
    }
</script>

<?php include_once('../admincommon/footer.php'); ?>
