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
            <div class="box-header with-border">
                <h3 class="box-title">Create Time Table</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <thead>
                           <p>Time Table for</p> 
                <label class="col-md-5">
                        <input id="up_radio" type="radio" name="optionsRadios" value="class" checked="checked">
                        Class
                    </label>
                    <label class="radio inline">
                        <input id="ov_radio" type="radio" name="optionsRadios" value="teacher">  
                        Teacher
                    </label>
                            
                        </thead>
                </div>
                <div class="table-responsive">
                   <form role="form" action="" method="POST">
                       
                        <div id="classDev" class="login-box-body" >
                            <form class="">
                                <label>Class No</label><input id="classNo"><label>Class Teacher</label><input id="classTeacher">
                            </form>
                       
                       </div>
                        <div id="teacherDev" class="login-box-body" style="display:none">
                            <form class="">
                                <label>Teacher Reg No</label><input id="teacherRegNo"><label>Teacher Name</label><input id="teacherName">
                            </form>
                            
                       </div>
                       
                    <table class="table no-margin">
                        
                        
                        <thead>
                            <tr>
                                <th>Time Perod</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wendsday</th>
                                <th>Thersday</th>
                                <th>Friday</th>
                            </tr>
                        </thead>
                        
                            <p>test student</p>
                        <tbody>
                        <tr>
                            <td><input name="time2" class="tableTxtEdit" value="07.30-07.50"></td>
                            <td></td>
                            <td></td>
                            <td style="font-size:25px;font-weight: bold;" class="tableTxtEdit">Reminding Religion</td>
                            <td></td>
                            <td></td>
                            
                            
                        </tr>
                        <tr>
                            <td><input id="timeView1" class="tableTxtEdit" value="07.50-08.30"></td>
                            <td><input id="subjectView1" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView2" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView3" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView4" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView5" class="tableTxtEdit" value=""></td>
                           
                            
                        </tr>
                        <tr>
                            <td><input id="timeView12" class="tableTxtEdit" value="08.30-09.10"></td>
                            <td><input id="subjectView12" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView22" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView32" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView42" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView52" class="tableTxtEdit" value=""></td>
                        </tr>
                        <tr>
                            <td><input id="timeView13" class="tableTxtEdit" value="09.10-09.50"></td>
                            <td><input id="subjectView13" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView23" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView33" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView43" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView53" class="tableTxtEdit" value=""></td>
                        </tr>
                        <tr>
                            <td><input id="timeView14" class="tableTxtEdit" value="09.50-10.30"></td>
                            <td><input id="subjectView14" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView24" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView34" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView44" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView54" class="tableTxtEdit" value=""></td>
                        </tr>
                        <tr>
                            <td><input id="time2interval" class="tableTxtEdit" value="10.30-10.50"></td>
                            <td></td>
                            <td></td>
                            <td style="font-size:25px;font-weight: bold;" class="tableTxtEdit">Interval</td>
                            <td></td>
                            <td></td>
                           
                        </tr>
                        <tr>
                            <td><input id="timeView15" class="tableTxtEdit" value="10.50-11.30"></td>
                            <td><input id="subjectView15" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView25" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView35" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView45" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView55" class="tableTxtEdit" value=""></td>
                           
                        </tr>
                        <tr>
                            <td><input id="timeView16" class="tableTxtEdit" value="11.30-12.10"></td>
                            <td><input id="subjectView16" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView26" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView36" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView46" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView56" class="tableTxtEdit" value=""></td>
                           
                        </tr>
                            
                        <tr>
                            <td><input id="timeView17" class="tableTxtEdit" value="12.10-12.50"></td>
                            <td><input id="subjectView17" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView27" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView37" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView47" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView57" class="tableTxtEdit" value=""></td>
                           
                        </tr>
                        <tr>
                            
                            <td><input id="timeView18" class="tableTxtEdit" value="12.50-13.30"></td>
                            <td><input id="subjectView18" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView28" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView38" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView48" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView58" class="tableTxtEdit" value=""></td>
                               
                        </tr>
                            
                        <tr><td></td>
                            <td></td>
                            <td></td>
                            <td><button id="search" type="button" class="btn btn-primary">Search</button></td>
                            <td><button id="add" type="button" class="btn btn-primary" onclick="datasubmission()">Add</button></td>
                            <td><button id="delete" type="button" class="btn btn-primary">Delete</button></td>
                          
                            </tr>
                            
                        </tbody>
                        
                    </table>
                        
                    </form>
                </div><!-- /.table-responsive -->
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
               
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </section>
</section>
</div>
<?php include_once('../admincommon/footer.php'); ?>
    
    <script>

	$('input[name="optionsRadios"]').on('change', function(){
        if ($(this).val()=='class') {
            
            
            document.getElementById("classDev").style.display = 'block';
            document.getElementById("teacherDev").style.display = 'none';

        } else  {
        
            // $("#cont").text("show Overwritten");
            document.getElementById("classDev").style.display = 'none';
            document.getElementById("teacherDev").style.display = 'block';
        }
    });
    
</script>
    
<script>
    function datasubmission(){
        var school=document.getElementById("stuschool").value;    
        var classNo=document.getElementById("classNo").value;
		var classTeacher=document.getElementById("classTeacher").value;
		var teacherRegNo=document.getElementById("teacherRegNo").value;
		var teacherName=document.getElementById("teacherName").value;
        
        var stdFName = document.getElementById("studentFNameTxt").value;
        
		
		
		
        if(document.getElementById('gm').checked){
            var stdGend = document.getElementById('gm').value;
        }else{
            var stdGend = document.getElementById('gf').value;
        }
        //var stdGend = document.querySelector('input[name=gender]:checked').value;
        var stdbd = document.getElementById('bdate').value;
        var stdReli = document.getElementById("studentReligionTxt").value;
        var profileimg=document.getElementById("propic").src;
        var stdEmail = document.getElementById("studentEmailTxt").value;
        var stdAdNo = document.getElementById("studentAdmissionNoTxt").value;
        var stdClass = document.getElementById("studentClassTxt").value;
        var stdGrade = document.getElementById("studentGradeTxt").value;
        var contact=document.getElementById("contact").value;
        var stdAddress = document.getElementById("studentAddressTxt").value;
        var stdmedium = document.getElementById("studentMediumTxt").value;
        //var par = document.querySelector('input[name=parent]:checked').value;
        if(document.getElementById('p1').checked){
            var par = document.getElementById('p1').value;
        }else if(document.getElementById('p2').checked){
            var par = document.getElementById('p2').value;
        }else{
            var par = document.getElementById('p3').value;
        }
        var parName = document.getElementById("parentNameTxt").value;
        var parOcupation = document.getElementById("parentOcupationTxt").value;
        var parEmail = document.getElementById("parentEmail").value;
        var parAddress = document.getElementById("parentAddressTxt").value;
        var parContact = document.getElementById("gaurdiancontact").value;
        var studentId =school+stdAdNo;
        var parent={name:parName,parent:par,occupation:parOcupation,email:parEmail,Econtact:parContact};
        var student= [stdAdNo,stdFName,stdLName,contact,stdbd,stdAddress,stdReli,school,stdGrade,stdClass,stdEmail,profileimg,studentId,stdFName,stdmedium];
        addstudent(student,parent);
    }
    </script>
    
    </body>




