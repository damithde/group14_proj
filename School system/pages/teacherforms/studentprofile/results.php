<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>

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
                                                    <label  >Select Term:</label>
                                                    <select class="form-control">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
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
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label class="text-muted">Search by Exam ID</label>
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
                                                    <label class="text-muted">Search by Exam Date</label>
                                                    <div class="input-group">
                                                        <input id="lNameSearch" type="date" name="q" class="form-control" placeholder="Search by First Name"/>
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
                                                    <label class="text-muted">Search by Subject:</label>
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
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Exam Id</th>
                                                <th>Exam Name</th>
                                                <th>Date</th>
                                                <th>Results</th>
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

                    </div>
                </div><!-- /.box -->


    </section>
</section>
</div>
</body>

<script>
    getschool("schoolid");
    setTimeout(p ,1500);







    function p(){
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


<?php include_once('../teachercommon/footer.php'); ?>


