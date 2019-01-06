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
<script src="../../../firebase models/timeTable.js"></script>
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
<!--
                        <div id="teacherDev" class="login-box-body" style="display:none">
                            <form class="">
                                <label>Teacher Reg No</label><input id="teacherRegNo"><label>Teacher Name</label><input id="teacherName">
                            </form>
                            
                       </div>
-->
                       
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
                            <td><button id="search" type="button" class="btn btn-primary" onclick="searchTable()">Search</button></td>
                            <td><button id="add" type="button" class="btn btn-primary" onclick="addTimeTable()">Add</button></td>
                            <td><button id="delete" type="button" class="btn btn-primary" onclick="deleteTable()">Delete</button></td>
                          
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
    
    function addTimeTable(){
               
                var classNo=document.getElementById("classNo").value;
		        var classTeacher=document.getElementById("classTeacher").value;
        
                var mon="monday";
        
			    var timeView1 = document.getElementById("timeView1").value;       /*first slot*/
				var subjectView1 = document.getElementById("subjectView1").value;
				var teacherView1 = document.getElementById("teacherView1").value;				
                addTimeSlot(classNo,classTeacher,timeView1,subjectView1,teacherView1,mon);
        
                var timeView2 = document.getElementById("timeView2").value;       /*second slot*/
				var subjectView12 = document.getElementById("subjectView12").value;
				var teacherView12 = document.getElementById("teacherView12").value;				
                addTimeSlot(classNo,classTeacher,timeView2,subjectView12,teacherView12,mon);
        
                var timeView3 = document.getElementById("timeView3").value;       /*third slot*/
				var subjectView13 = document.getElementById("subjectView13").value;
				var teacherView13 = document.getElementById("teacherView13").value;				
                addTimeSlot(classNo,classTeacher,timeView3,subjectView13,teacherView13,mon);
        
                var timeView4 = document.getElementById("timeView4").value;       /*fourth slot*/
				var subjectView14 = document.getElementById("subjectView14").value;
				var teacherView14 = document.getElementById("teacherView14").value;				
                addTimeSlot(classNo,classTeacher,timeView4,subjectView14,teacherView14,mon);
        
                var timeView5 = document.getElementById("timeView5").value;       /*fifth slot*/
				var subjectView15 = document.getElementById("subjectView15").value;
				var teacherView15 = document.getElementById("teacherView15").value;				
                addTimeSlot(classNo,classTeacher,timeView5,subjectView15,teacherView15,mon);
        
                var timeView6 = document.getElementById("timeView6").value;       /*sisth slot*/
				var subjectView16 = document.getElementById("subjectView16").value;
				var teacherView16 = document.getElementById("teacherView16").value;				
                addTimeSlot(classNo,classTeacher,timeView6,subjectView16,teacherView16,mon);
        
                var timeView7 = document.getElementById("timeView7").value;       /*seventh slot*/
				var subjectView17 = document.getElementById("subjectView17").value;
				var teacherView17 = document.getElementById("teacherView17").value;				
                addTimeSlot(classNo,classTeacher,timeView7,subjectView17,teacherView17,mon);
        
                var timeView8 = document.getElementById("timeView8").value;       /*eigth slot*/
				var subjectView18 = document.getElementById("subjectView18").value;
				var teacherView18 = document.getElementById("teacherView18").value;				
                addTimeSlot(classNo,classTeacher,timeView8,subjectView18,teacherView18,mon);
        
                var tu="tuesday";
        
                var timeView2 = document.getElementById("timeView2").value;       /*second colum first slot*/
				var subjectView2 = document.getElementById("subjectView2").value;
				var teacherView2 = document.getElementById("teacherView2").value;				
                addTimeSlot(classNo,classTeacher,timeView2,subjectView2,teacherView2,tu);
        
                var timeView2 = document.getElementById("timeView2").value;       /*second colum second slot*/
				var subjectView22 = document.getElementById("subjectView22").value;
				var teacherView22 = document.getElementById("teacherView22").value;				
                addTimeSlot(classNo,classTeacher,timeView2,subjectView22,teacherView22,tu);
        
                var timeView3 = document.getElementById("timeView3").value;       /*second colum third slot*/
				var subjectView23 = document.getElementById("subjectView23").value;
				var teacherView23 = document.getElementById("teacherView23").value;				
                addTimeSlot(classNo,classTeacher,timeView3,subjectView23,teacherView23,tu);
        
                var timeView4 = document.getElementById("timeView4").value;       /*second colum fourth slot*/
				var subjectView24 = document.getElementById("subjectView24").value;
				var teacherView24 = document.getElementById("teacherView24").value;				
                addTimeSlot(classNo,classTeacher,timeView4,subjectView24,teacherView24,tu);
        
                var timeView5 = document.getElementById("timeView5").value;       /*second colum fifth slot*/
				var subjectView25 = document.getElementById("subjectView25").value;
				var teacherView25 = document.getElementById("teacherView25").value;				
                addTimeSlot(classNo,classTeacher,timeView5,subjectView25,teacherView25,tu);
        
                var timeView6 = document.getElementById("timeView6").value;       /*second colum sixth slot*/
				var subjectView26 = document.getElementById("subjectView26").value;
				var teacherView26 = document.getElementById("teacherView26").value;				
                addTimeSlot(classNo,classTeacher,timeView6,subjectView26,teacherView26,tu);
        
                var timeView7 = document.getElementById("timeView7").value;       /*second colum seventh slot*/
				var subjectView27 = document.getElementById("subjectView27").value;
				var teacherView27 = document.getElementById("teacherView27").value;				
                addTimeSlot(classNo,classTeacher,timeView7,subjectView27,teacherView27,tu);
        
                var timeView8 = document.getElementById("timeView8").value;       /*second colum eigth slot*/
				var subjectView28 = document.getElementById("subjectView28").value;
				var teacherView28 = document.getElementById("teacherView28").value;				
                addTimeSlot(classNo,classTeacher,timeView8,subjectView28,teacherView28,tu);
        
        
                var wen="wednesday";
        
			    var timeView1 = document.getElementById("timeView1").value;       /*third row first slot*/
				var subjectView3 = document.getElementById("subjectView3").value;
				var teacherView3 = document.getElementById("teacherView3").value;				
                addTimeSlot(classNo,classTeacher,timeView1,subjectView3,teacherView3,wen);
        
                var timeView2 = document.getElementById("timeView2").value;       /*third row second slot*/
				var subjectView32 = document.getElementById("subjectView32").value;
				var teacherView32 = document.getElementById("teacherView32").value;				
                addTimeSlot(classNo,classTeacher,timeView2,subjectView32,teacherView3,wen);
        
                var timeView3 = document.getElementById("timeView3").value;       /*third row third slot*/
				var subjectView33 = document.getElementById("subjectView33").value;
				var teacherView33 = document.getElementById("teacherView33").value;				
                addTimeSlot(classNo,classTeacher,timeView3,subjectView33,teacherView33,wen);
        
                var timeView4 = document.getElementById("timeView4").value;       /*third row fourth slot*/
				var subjectView34 = document.getElementById("subjectView34").value;
				var teacherView34 = document.getElementById("teacherView34").value;				
                addTimeSlot(classNo,classTeacher,timeView4,subjectView34,teacherView34,wen);
        
                var timeView5 = document.getElementById("timeView5").value;       /*third row fifth slot*/
				var subjectView35 = document.getElementById("subjectView35").value;
				var teacherView35 = document.getElementById("teacherView35").value;				
                addTimeSlot(classNo,classTeacher,timeView5,subjectView35,teacherView35,wen);
        
                var timeView6 = document.getElementById("timeView6").value;       /*third row sixth slot*/
				var subjectView36 = document.getElementById("subjectView36").value;
				var teacherView36 = document.getElementById("teacherView36").value;				
                addTimeSlot(classNo,classTeacher,timeView6,subjectView36,teacherView36,wen);
        
                var timeView7 = document.getElementById("timeView7").value;       /*third row seventh slot*/
				var subjectView37 = document.getElementById("subjectView37").value;
				var teacherView37 = document.getElementById("teacherView37").value;				
                addTimeSlot(classNo,classTeacher,timeView7,subjectView37,teacherView37,wen);
        
                var timeView8 = document.getElementById("timeView8").value;       /*third row eigtgh slot*/
				var subjectView38 = document.getElementById("subjectView38").value;
				var teacherView38 = document.getElementById("teacherView38").value;				
                addTimeSlot(classNo,classTeacher,timeView8,subjectView38,teacherView38,wen);
        
                var th="thursday";
        
			    var timeView1 = document.getElementById("timeView1").value;       /*fourth colum first slot*/
				var subjectView4 = document.getElementById("subjectView4").value;
				var teacherView4 = document.getElementById("teacherView4").value;				
                addTimeSlot(classNo,classTeacher,timeView1,subjectView4,teacherView4,th);
        
                var timeView2 = document.getElementById("timeView2").value;       /*fourth colum second slot*/
				var subjectView42 = document.getElementById("subjectView42").value;
				var teacherView42 = document.getElementById("teacherView42").value;				
                addTimeSlot(classNo,classTeacher,timeView2,subjectView42,teacherView42,th);
        
                var timeView3 = document.getElementById("timeView3").value;       /*fourth colum third slot*/
				var subjectView43 = document.getElementById("subjectView43").value;
				var teacherView43 = document.getElementById("teacherView43").value;				
                addTimeSlot(classNo,classTeacher,timeView3,subjectView43,teacherView43,th);
        
                var timeView4 = document.getElementById("timeView4").value;       /*fourth colum fourth slot*/
				var subjectView44 = document.getElementById("subjectView44").value;
				var teacherView44 = document.getElementById("teacherView44").value;				
                addTimeSlot(classNo,classTeacher,timeView4,subjectView44,teacherView44,th);
        
                var timeView5 = document.getElementById("timeView").value;       /*fourth colum fifth slot*/
				var subjectView45 = document.getElementById("subjectView45").value;
				var teacherView45 = document.getElementById("teacherView45").value;				
                addTimeSlot(classNo,classTeacher,timeView5,subjectView45,teacherView45,th);
        
                var timeView6 = document.getElementById("timeView6").value;       /*fourth colum sixth slot*/
				var subjectView46 = document.getElementById("subjectView46").value;
				var teacherView46 = document.getElementById("teacherView46").value;				
                addTimeSlot(classNo,classTeacher,timeView6,subjectView46,teacherView46,th);
        
                var timeView7 = document.getElementById("timeView7").value;       /*fourth colum seventh slot*/
				var subjectView47 = document.getElementById("subjectView47").value;
				var teacherView47 = document.getElementById("teacherView47").value;				
                addTimeSlot(classNo,classTeacher,timeView7,subjectView47,teacherView47,th);
        
                var timeView8 = document.getElementById("timeView8").value;       /*fourth colum eigth slot*/
				var subjectView48 = document.getElementById("subjectView48").value;
				var teacherView48 = document.getElementById("teacherView48").value;				
                addTimeSlot(classNo,classTeacher,timeView8,subjectView48,teacherView48,th);
        
                var fri="friday";
        
			    var timeView1 = document.getElementById("timeView1").value;       /*fifth colum first slot*/
				var subjectView5 = document.getElementById("subjectView5").value;
				var teacherView5 = document.getElementById("teacherView5").value;				
                addTimeSlot(classNo,classTeacher,timeView1,subjectView5,teacherView5,fri);
        
                var timeView2 = document.getElementById("timeView2").value;       /*fifth colum second slot*/
				var subjectView52 = document.getElementById("subjectView52").value;
				var teacherView52 = document.getElementById("teacherView52").value;				
                addTimeSlot(classNo,classTeacher,timeView2,subjectView52,teacherView52,fri);
        
                var timeView3 = document.getElementById("timeView3").value;       /*fifth colum third slot*/
				var subjectView53 = document.getElementById("subjectView53").value;
				var teacherView53 = document.getElementById("teacherView53").value;				
                addTimeSlot(classNo,classTeacher,timeView3,subjectView53,teacherView53,fri);
        
                var timeView4 = document.getElementById("timeView4").value;       /*fifth colum fourth slot*/
				var subjectView54 = document.getElementById("subjectView54").value;
				var teacherView54 = document.getElementById("teacherView54").value;				
                addTimeSlot(classNo,classTeacher,timeView4,subjectView54,teacherView54,fri);
        
                var timeView5 = document.getElementById("timeView5").value;       /*fifth colum fifth slot*/
				var subjectView55 = document.getElementById("subjectView55").value;
				var teacherView55 = document.getElementById("teacherView55").value;				
                addTimeSlot(classNo,classTeacher,timeView5,subjectView55,teacherView55,fri);
        
                var timeView6 = document.getElementById("timeView6").value;       /*fifth colum sixth slot*/
				var subjectView56 = document.getElementById("subjectView56").value;
				var teacherView56 = document.getElementById("teacherView56").value;				
                addTimeSlot(classNo,classTeacher,timeView6,subjectView56,teacherView56,fri);
        
                var timeView7 = document.getElementById("timeView7").value;       /*fifth colum seventh slot*/
				var subjectView57 = document.getElementById("subjectView57").value;
				var teacherView57 = document.getElementById("teacherView57").value;				
                addTimeSlot(classNo,classTeacher,timeView7,subjectView57,teacherView57,fri);
        
                var timeView8 = document.getElementById("timeView8").value;       /*fifth colum eight slot*/
				var subjectView58 = document.getElementById("subjectView58").value;
				var teacherView58 = document.getElementById("teacherView58").value;				
                addTimeSlot(classNo,classTeacher,timeView8,subjectView58,teacherView58,fri);
        
        
                
                
        
                
        
                alert("Time Table sent successfully");
        
    
   
    }
    
    
    
    function addTimeSlot(classNo,classTeacher,timeView,subjectView,teacherView,date,school="mal2017"){
                

        //timeTableList=[classNot,classTeachert,timeView1t,subjectView1t,teacherView1t,datet];

        db.collection("timetable").add({
            classNo:classNo,
            classTeacher:classTeacher,
            date:date,
            time:timeView,
            subjectCode:subjectView,
            regno:teacherView,
            schoolId:school



        })
        .then(function(docRef) {
            //alert("Time Table sent successfully");
           // console.log("Document written with ID: ", docRef.id);
        })
        .catch(function(error) {
            alert("Error adding document: ", error);
        });
}
   
    function searchTable(){
        
        var clz = document.getElementById("classNo").value;   
        
        getClassTimeTable(clz);
        var d1="monday";
        getTimeSlot("07.50-08.30",d1,'subjectView1','teacherView1');//subjectVie
        getTimeSlot("08.30-09.10",d1,'subjectView12','teacherView12');
        getTimeSlot("09.10-09.50",d1,'subjectView13','teacherView13');
        getTimeSlot("09.50-10.30",d1,'subjectView14','teacherView14');
        getTimeSlot("10.50-11.30",d1,'subjectView15','teacherView15');
        getTimeSlot("11.30-12.10",d1,'subjectView16','teacherView16');
        getTimeSlot("12.10-12.50",d1,'subjectView17','teacherView17');
        getTimeSlot("12.50-13.30",d1,'subjectView18','teacherView18');
        
        var d2="tuesday";
        getTimeSlot("07.50-08.30",d2,'subjectView2','teacherView2');//subjectVie
        getTimeSlot("08.30-09.10",d2,'subjectView22','teacherView22');
        getTimeSlot("09.10-09.50",d2,'subjectView23','teacherView23');
        getTimeSlot("09.50-10.30",d2,'subjectView24','teacherView24');
        getTimeSlot("10.50-11.30",d2,'subjectView25','teacherView25');
        getTimeSlot("11.30-12.10",d2,'subjectView26','teacherView26');
        getTimeSlot("12.10-12.50",d2,'subjectView27','teacherView27');
        getTimeSlot("12.50-13.30",d2,'subjectView28','teacherView28');
        
        var d3="wednesday";
        getTimeSlot("07.50-08.30",d3,'subjectView3','teacherView3');//subjectVie
        getTimeSlot("08.30-09.10",d3,'subjectView32','teacherView32');
        getTimeSlot("09.10-09.50",d3,'subjectView33','teacherView33');
        getTimeSlot("09.50-10.30",d3,'subjectView34','teacherView34');
        getTimeSlot("10.50-11.30",d3,'subjectView35','teacherView35');
        getTimeSlot("11.30-12.10",d3,'subjectView36','teacherView36');
        getTimeSlot("12.10-12.50",d3,'subjectView37','teacherView37');
        getTimeSlot("12.50-13.30",d3,'subjectView38','teacherView38');
        
        var d4="thursday";
        getTimeSlot("07.50-08.30",d4,'subjectView4','teacherView4');//subjectVie
        getTimeSlot("08.30-09.10",d4,'subjectView42','teacherView42');
        getTimeSlot("09.10-09.50",d4,'subjectView43','teacherView43');
        getTimeSlot("09.50-10.30",d4,'subjectView44','teacherView44');
        getTimeSlot("10.50-11.30",d4,'subjectView45','teacherView45');
        getTimeSlot("11.30-12.10",d4,'subjectView46','teacherView46');
        getTimeSlot("12.10-12.50",d4,'subjectView47','teacherView47');
        getTimeSlot("12.50-13.30",d4,'subjectView48','teacherView48');
        
        var d5="friday";
        getTimeSlot("07.50-08.30",d5,'subjectView5','teacherView5');//subjectVie
        getTimeSlot("08.30-09.10",d5,'subjectView52','teacherView52');
        getTimeSlot("09.10-09.50",d5,'subjectView53','teacherView53');
        getTimeSlot("09.50-10.30",d5,'subjectView54','teacherView54');
        getTimeSlot("10.50-11.30",d5,'subjectView55','teacherView55');
        getTimeSlot("11.30-12.10",d5,'subjectView56','teacherView56');
        getTimeSlot("12.10-12.50",d5,'subjectView57','teacherView57');
        getTimeSlot("12.50-13.30",d5,'subjectView58','teacherView58');
        
        
    }
    
    function deleteTable(){
         //getTimeSlot(timeLine,dayLine,subCode,lecCode);
        // getTimeSlot("07.50-08.30","Monday",'subjectView38','teacherView38');//subjectView38
    }
    
    
    
    </script>
    
    </body>




