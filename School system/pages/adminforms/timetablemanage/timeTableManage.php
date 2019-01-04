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
<script src="../../../firebase%20models/timeTable.js"></script>
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
            <div class="box-header with-border">
                <h3 class="box-title">Create Time Table</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
<!--
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
-->
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
                        
                        
                        <tbody>
                        <tr>
                            <td><input id="time2" class="tableTxtEdit" value="07.30-07.50"></td>
                            <td></td>
                            <td></td>
                            <td style="font-size:25px;font-weight: bold;" class="tableTxtEdit">Reminding Religion</td>
                            <td></td>
                            <td></td>
                            
                            
                        </tr>
                        <tr>
                            <td><input id="timeView1" class="tableTxtEdit" value="07.50-08.30"></td>
                            <td><input id="subjectView1" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView1" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView2" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView2" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView3" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView3" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView4" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView4" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView5" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView5" class="tableTxtEdit" value="" placeholder="teacher"></td>
                           
                            
                        </tr>
                        <tr>
                            <td><input id="timeView12" class="tableTxtEdit" value="08.30-09.10"></td>
                            <td><input id="subjectView12" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView12" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView22" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView22" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView32" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView32" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView42" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView42" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView52" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView52" class="tableTxtEdit" value="" placeholder="teacher"></td>
                        </tr>
                        <tr>
                            <td><input id="timeView13" class="tableTxtEdit" value="09.10-09.50"></td>
                            <td><input id="subjectView13" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView13" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView23" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView23" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView33" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView33" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView43" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView43" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView53" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView53" class="tableTxtEdit" value="" placeholder="teacher"></td>
                        </tr>
                        <tr>
                            <td><input id="timeView14" class="tableTxtEdit" value="09.50-10.30"></td>
                            <td><input id="subjectView14" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView14" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView24" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView24" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView34" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView34" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView44" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView44" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView54" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView54" class="tableTxtEdit" value="" placeholder="teacher"></td>
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
                            <td><input id="subjectView15" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView15" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView25" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView25" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView35" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView35" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView45" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView45" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView55" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView55" class="tableTxtEdit" value="" placeholder="teacher"></td>
                           
                        </tr>
                        <tr>
                            <td><input id="timeView16" class="tableTxtEdit" value="11.30-12.10"></td>
                            <td><input id="subjectView16" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView16" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView26" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView26" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView36" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView36" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView46" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView46" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView56" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView56" class="tableTxtEdit" value="" placeholder="teacher"></td>
                           
                        </tr>
                            
                        <tr>
                            <td><input id="timeView17" class="tableTxtEdit" value="12.10-12.50"></td>
                            <td><input id="subjectView17" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView17" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView27" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView27" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView37" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView37" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView47" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView47" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView57" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView57" class="tableTxtEdit" value="" placeholder="teacher"></td>
                           
                        </tr>
                        <tr>
                            
                            <td><input id="timeView18" class="tableTxtEdit" value="12.50-13.30"></td>
                            <td><input id="subjectView18" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView18" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView28" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView28" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView38" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView38" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView48" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView48" class="tableTxtEdit" value="" placeholder="teacher"></td>
                            <td><input id="subjectView58" class="tableTxtEdit" value="" placeholder="subject"><br><input id="teacherView58" class="tableTxtEdit" value="" placeholder="teacher"></td>
                               
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
    
<!--
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
-->
<!--    <input type="hidden" id="myInput" value="W3Schools">-->

<script>
    function datasubmission(){
        var school=document.getElementById("stuschool").value;
        
        var classNo=document.getElementById("classNo").value;
		var classTeacher=document.getElementById("classTeacher").value;
        
		var teacherRegNo=document.getElementById("teacherRegNo").value;
		var teacherName=document.getElementById("teacherName").value;
		
		/*time2*/
		var time2 = document.getElementById("time2").value; 
		
		var timeView1 = document.getElementById("timeView1").value;       /*first row*/
        var subjectView1 = document.getElementById("subjectView1").value;
		var subjectView2 = document.getElementById("subjectView2").value;
		var subjectView3 = document.getElementById("subjectView3").value;
		var subjectView4 = document.getElementById("subjectView4").value;
		var subjectView5 = document.getElementById("subjectView5").value;
        
        var teacherView1 = document.getElementById("teacherView1").value;
        var teacherView2 = document.getElementById("teacherView2").value;
        var teacherView3 = document.getElementById("teacherView3").value;
        var teacherView4 = document.getElementById("teacherView4").value;
        var teacherView5 = document.getElementById("teacherView5").value;



		
		var timeView12 = document.getElementById("timeView12").value;       /*second row*/
        var subjectView12 = document.getElementById("subjectView12").value;
		var subjectView22 = document.getElementById("subjectView22").value;
		var subjectView32 = document.getElementById("subjectView32").value;
		var subjectView42 = document.getElementById("subjectView42").value;
		var subjectView52 = document.getElementById("subjectView52").value;
        
        var teacherView12 = document.getElementById("teacherView12").value;
        var teacherView22 = document.getElementById("teacherView22").value;
        var teacherView32 = document.getElementById("teacherView32").value;
        var teacherView42 = document.getElementById("teacherView42").value;
        var teacherView52 = document.getElementById("teacherView52").value;
		
		var timeView13 = document.getElementById("timeView13").value;       /*third row*/
        var subjectView13 = document.getElementById("subjectView13").value;
		var subjectView23 = document.getElementById("subjectView23").value;
		var subjectView33 = document.getElementById("subjectView33").value;
		var subjectView43 = document.getElementById("subjectView43").value;
		var subjectView53 = document.getElementById("subjectView53").value;
        
        var teacherView13 = document.getElementById("teacherView13").value;
        var teacherView23 = document.getElementById("teacherView23").value;
        var teacherView33 = document.getElementById("teacherView33").value;
        var teacherView43 = document.getElementById("teacherView43").value;
        var teacherView53 = document.getElementById("teacherView53").value;
		
		var timeView14 = document.getElementById("timeView14").value;       /*fourth row*/
        var subjectView14 = document.getElementById("subjectView14").value;
		var subjectView24 = document.getElementById("subjectView24").value;
		var subjectView34 = document.getElementById("subjectView34").value;
		var subjectView44 = document.getElementById("subjectView44").value;
		var subjectView54 = document.getElementById("subjectView54").value;
        
        var teacherView14 = document.getElementById("teacherView14").value;
        var teacherView24 = document.getElementById("teacherView24").value;
        var teacherView34 = document.getElementById("teacherView34").value;
        var teacherView44 = document.getElementById("teacherView44").value;
        var teacherView54 = document.getElementById("teacherView54").value;
		
		var time2interval = document.getElementById("time2interval").value;/*interval row*/
		
		var timeView15 = document.getElementById("timeView15").value;       /*fifth row*/
        var subjectView15 = document.getElementById("subjectView15").value;
		var subjectView25 = document.getElementById("subjectView25").value;
		var subjectView35 = document.getElementById("subjectView35").value;
		var subjectView45 = document.getElementById("subjectView45").value;
		var subjectView55 = document.getElementById("subjectView55").value;
        
        var teacherView15 = document.getElementById("teacherView15").value;
        var teacherView25 = document.getElementById("teacherView25").value;
        var teacherView35 = document.getElementById("teacherView35").value;
        var teacherView45 = document.getElementById("teacherView45").value;
        var teacherView55 = document.getElementById("teacherView55").value;
		
		var timeView16 = document.getElementById("timeView16").value;       /*sixth row*/
        var subjectView16 = document.getElementById("subjectView16").value;
		var subjectView26 = document.getElementById("subjectView26").value;
		var subjectView36 = document.getElementById("subjectView36").value;
		var subjectView46 = document.getElementById("subjectView46").value;
		var subjectView56 = document.getElementById("subjectView56").value;
        
        var teacherView16 = document.getElementById("teacherView16").value;
        var teacherView26 = document.getElementById("teacherView26").value;
        var teacherView36 = document.getElementById("teacherView36").value;
        var teacherView46 = document.getElementById("teacherView46").value;
        var teacherView56 = document.getElementById("teacherView56").value;
		
		var timeView17 = document.getElementById("timeView17").value;       /*seventh row*/
        var subjectView17 = document.getElementById("subjectView17").value;
		var subjectView27 = document.getElementById("subjectView27").value;
		var subjectView37 = document.getElementById("subjectView37").value;
		var subjectView47 = document.getElementById("subjectView47").value;
		var subjectView57 = document.getElementById("subjectView57").value;
        
        var teacherView17 = document.getElementById("teacherView17").value;
        var teacherView27 = document.getElementById("teacherView27").value;
        var teacherView37 = document.getElementById("teacherView37").value;
        var teacherView47 = document.getElementById("teacherView47").value;
        var teacherView57 = document.getElementById("teacherView57").value;
		
		var timeView18 = document.getElementById("timeView18").value;       /*eigth row*/
        var subjectView18 = document.getElementById("subjectView18").value;
		var subjectView28 = document.getElementById("subjectView28").value;
		var subjectView38 = document.getElementById("subjectView38").value;
		var subjectView48 = document.getElementById("subjectView48").value;
		var subjectView58 = document.getElementById("subjectView58").value;
        
        var teacherView18 = document.getElementById("teacherView18").value;
        var teacherView28 = document.getElementById("teacherView28").value;
        var teacherView38 = document.getElementById("teacherView38").value;
        var teacherView48 = document.getElementById("teacherView48").value;
        var teacherView58 = document.getElementById("teacherView58").value;
		
		//x < 10 && y > 1
		
		var timeTableList;
        
        if(classNo!=null && classTeacher!=null){
            //var stdGend = document.getElementById('gm').value;
			var classTimeTable=[classNo,classTeacher,timeView1,subjectView1,subjectView2,subjectView3,subjectView4,subjectView5,timeView12,subjectView12,subjectView22,subjectView32,subjectView42,subjectView52,timeView13,subjectView13,subjectView23,subjectView33,subjectView43,subjectView53,timeView14,subjectView14,subjectView24,subjectView34,subjectView44,subjectView54,timeView15,subjectView15,subjectView25,subjectView35,subjectView45,subjectView55,,timeView16,subjectView16,subjectView26,subjectView36,subjectView46,subjectView56,,timeView17,subjectView17,subjectView27,subjectView37,subjectView47,subjectView57,,timeView18,subjectView18,subjectView28,subjectView38,subjectView48,subjectView58,time2interval,time2];
			timeTableList=classTimeTable;
			
        }else{
            //var stdGend = document.getElementById('gf').value;
			
			var teacherTimeTable=[teacherRegNo,teacherName,timeView1,subjectView1,subjectView2,subjectView3,subjectView4,subjectView5,timeView12,subjectView12,subjectView22,subjectView32,subjectView42,subjectView52,timeView13,subjectView13,subjectView23,subjectView33,subjectView43,subjectView53,timeView14,subjectView14,subjectView24,subjectView34,subjectView44,subjectView54,timeView15,subjectView15,subjectView25,subjectView35,subjectView45,subjectView55,,timeView16,subjectView16,subjectView26,subjectView36,subjectView46,subjectView56,,timeView17,subjectView17,subjectView27,subjectView37,subjectView47,subjectView57,,timeView18,subjectView18,subjectView28,subjectView38,subjectView48,subjectView58,time2interval,time2];
			timeTableList=teacherTimeTable;
        }
	
        //var parent={name:parName,parent:par,occupation:parOcupation,email:parEmail,Econtact:parContact};
        //var student= [stdAdNo,stdFName,stdLName,contact,stdbd,stdAddress,stdReli,school,stdGrade,stdClass,stdEmail,profileimg,studentId,stdFName,stdmedium];
        //addstudent(student,parent);
        addTimeTable(timeTableList)
    }
    </script>
    
    </body>




