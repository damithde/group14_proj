<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

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
                                                    <select class="form-control">
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
                                                <div id="studentMediumTxt" class="form-group">
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
                                                <div id="studentMediumTxt" class="form-group">
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
                                                        <input style ="width:300px" id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Admission No"/>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label class="text-muted">Exam Date</label>
                                                    <div class="input-group">
                                                        <input style ="width:300px" id="lNameSearch" type="date" name="q" class="form-control" placeholder="Search by First Name"/>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label  >Subject:</label>
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
    if(10==10){
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
</script>

<?php include_once('../admincommon/footer.php'); ?>


