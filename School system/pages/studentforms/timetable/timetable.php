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
</head>

<body class="skin-blue">
<div class="wrapper">
<section class="content-wrapper">
    <section class="content-header">
        <!--                Exam results-->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Exam Results</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
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
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                        </tr>
                        <tr>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                        </tr>
                        <tr>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                        </tr>
                        <tr>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                        </tr>
                        <tr>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                        </tr>
                        <tr>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                        </tr>
                        <tr>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                        </tr>
                        <tr>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                            <td>Subject 1</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
               
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </section>
</section>
</div>
<?php include_once('../admincommon/footer.php'); ?>
</body>


<script>
    getschool("schoolid");
    function addTimeTable(){
               
                var classNo=document.getElementById("classNo").value;
		        var classTeacher=document.getElementById("classTeacher").value;
        
                var mon="monday";
        
			    var timeView1 = document.getElementById("timeView1").value;       /*first slot*/
				var subjectView1 = document.getElementById("subjectView1").value;
				var teacherView1 = document.getElementById("teacherView1").value;				
                addTimeSlot(classNo,classTeacher,timeView1,subjectView1,teacherView1,mon);
        
                var timeView12 = document.getElementById("timeView12").value;       /*second slot*///timeView12
				var subjectView12 = document.getElementById("subjectView12").value;
				var teacherView12 = document.getElementById("teacherView12").value;				
                addTimeSlot(classNo,classTeacher,timeView12,subjectView12,teacherView12,mon);
        
                var timeView13 = document.getElementById("timeView13").value;       /*third slot*/
				var subjectView13 = document.getElementById("subjectView13").value;
				var teacherView13 = document.getElementById("teacherView13").value;				
                addTimeSlot(classNo,classTeacher,timeView13,subjectView13,teacherView13,mon);
        
                var timeView14 = document.getElementById("timeView14").value;       /*fourth slot*/
				var subjectView14 = document.getElementById("subjectView14").value;
				var teacherView14 = document.getElementById("teacherView14").value;				
                addTimeSlot(classNo,classTeacher,timeView14,subjectView14,teacherView14,mon);
        
                var timeView15 = document.getElementById("timeView15").value;       /*fifth slot*/
				var subjectView15 = document.getElementById("subjectView15").value;
				var teacherView15 = document.getElementById("teacherView15").value;				
                addTimeSlot(classNo,classTeacher,timeView15,subjectView15,teacherView15,mon);
        
                var timeView16 = document.getElementById("timeView16").value;       /*sisth slot*/
				var subjectView16 = document.getElementById("subjectView16").value;
				var teacherView16 = document.getElementById("teacherView16").value;				
                addTimeSlot(classNo,classTeacher,timeView16,subjectView16,teacherView16,mon);
        
                var timeView17 = document.getElementById("timeView17").value;       /*seventh slot*/
				var subjectView17 = document.getElementById("subjectView17").value;
				var teacherView17 = document.getElementById("teacherView17").value;				
                addTimeSlot(classNo,classTeacher,timeView17,subjectView17,teacherView17,mon);
        
                var timeView18 = document.getElementById("timeView18").value;       /*eigth slot*/
				var subjectView18 = document.getElementById("subjectView18").value;
				var teacherView18 = document.getElementById("teacherView18").value;				
                addTimeSlot(classNo,classTeacher,timeView18,subjectView18,teacherView18,mon);
        
                var tu="tuesday";
        
                var timeView1 = document.getElementById("timeView1").value;       /*second colum first slot*/
				var subjectView2 = document.getElementById("subjectView2").value;
				var teacherView2 = document.getElementById("teacherView2").value;				
                addTimeSlot(classNo,classTeacher,timeView1,subjectView2,teacherView2,tu);
        
                var timeView12 = document.getElementById("timeView12").value;       /*second colum second slot*/
				var subjectView22 = document.getElementById("subjectView22").value;
				var teacherView22 = document.getElementById("teacherView22").value;				
                addTimeSlot(classNo,classTeacher,timeView12,subjectView22,teacherView22,tu);
        
                var timeView13 = document.getElementById("timeView13").value;       /*second colum third slot*/
				var subjectView23 = document.getElementById("subjectView23").value;
				var teacherView23 = document.getElementById("teacherView23").value;				
                addTimeSlot(classNo,classTeacher,timeView13,subjectView23,teacherView23,tu);
        
                var timeView14 = document.getElementById("timeView14").value;       /*second colum fourth slot*/
				var subjectView24 = document.getElementById("subjectView24").value;
				var teacherView24 = document.getElementById("teacherView24").value;				
                addTimeSlot(classNo,classTeacher,timeView14,subjectView24,teacherView24,tu);
        
                var timeView15 = document.getElementById("timeView15").value;       /*second colum fifth slot*/
				var subjectView25 = document.getElementById("subjectView25").value;
				var teacherView25 = document.getElementById("teacherView25").value;				
                addTimeSlot(classNo,classTeacher,timeView15,subjectView25,teacherView25,tu);
        
                var timeView16 = document.getElementById("timeView16").value;       /*second colum sixth slot*/
				var subjectView26 = document.getElementById("subjectView26").value;
				var teacherView26 = document.getElementById("teacherView26").value;				
                addTimeSlot(classNo,classTeacher,timeView16,subjectView26,teacherView26,tu);
        
                var timeView17 = document.getElementById("timeView17").value;       /*second colum seventh slot*/
				var subjectView27 = document.getElementById("subjectView27").value;
				var teacherView27 = document.getElementById("teacherView27").value;				
                addTimeSlot(classNo,classTeacher,timeView17,subjectView27,teacherView27,tu);
        
                var timeView18 = document.getElementById("timeView18").value;       /*second colum eigth slot*/
				var subjectView28 = document.getElementById("subjectView28").value;
				var teacherView28 = document.getElementById("teacherView28").value;				
                addTimeSlot(classNo,classTeacher,timeView18,subjectView28,teacherView28,tu);
        
        
                var wen="wednesday";
        
			    var timeView1 = document.getElementById("timeView1").value;       /*third row first slot*/
				var subjectView3 = document.getElementById("subjectView3").value;
				var teacherView3 = document.getElementById("teacherView3").value;				
                addTimeSlot(classNo,classTeacher,timeView1,subjectView3,teacherView3,wen);
        
                var timeView12 = document.getElementById("timeView12").value;       /*third row second slot*/
				var subjectView32 = document.getElementById("subjectView32").value;
				var teacherView32 = document.getElementById("teacherView32").value;				
                addTimeSlot(classNo,classTeacher,timeView12,subjectView32,teacherView3,wen);
        
                var timeView13 = document.getElementById("timeView13").value;       /*third row third slot*/
				var subjectView33 = document.getElementById("subjectView33").value;
				var teacherView33 = document.getElementById("teacherView33").value;				
                addTimeSlot(classNo,classTeacher,timeView13,subjectView33,teacherView33,wen);
        
                var timeView14 = document.getElementById("timeView14").value;       /*third row fourth slot*/
				var subjectView34 = document.getElementById("subjectView34").value;
				var teacherView34 = document.getElementById("teacherView34").value;				
                addTimeSlot(classNo,classTeacher,timeView14,subjectView34,teacherView34,wen);
        
                var timeView15 = document.getElementById("timeView15").value;       /*third row fifth slot*/
				var subjectView35 = document.getElementById("subjectView35").value;
				var teacherView35 = document.getElementById("teacherView35").value;				
                addTimeSlot(classNo,classTeacher,timeView15,subjectView35,teacherView35,wen);
        
                var timeView16 = document.getElementById("timeView16").value;       /*third row sixth slot*/
				var subjectView36 = document.getElementById("subjectView36").value;
				var teacherView36 = document.getElementById("teacherView36").value;				
                addTimeSlot(classNo,classTeacher,timeView16,subjectView36,teacherView36,wen);
        
                var timeView17 = document.getElementById("timeView17").value;       /*third row seventh slot*/
				var subjectView37 = document.getElementById("subjectView37").value;
				var teacherView37 = document.getElementById("teacherView37").value;				
                addTimeSlot(classNo,classTeacher,timeView17,subjectView37,teacherView37,wen);
        
                var timeView18 = document.getElementById("timeView18").value;       /*third row eigtgh slot*/
				var subjectView38 = document.getElementById("subjectView38").value;
				var teacherView38 = document.getElementById("teacherView38").value;				
                addTimeSlot(classNo,classTeacher,timeView18,subjectView38,teacherView38,wen);
        
                var th="thursday";
        
			    var timeView1 = document.getElementById("timeView1").value;       /*fourth colum first slot*/
				var subjectView4 = document.getElementById("subjectView4").value;
				var teacherView4 = document.getElementById("teacherView4").value;				
                addTimeSlot(classNo,classTeacher,timeView1,subjectView4,teacherView4,th);
        
                var timeView12 = document.getElementById("timeView12").value;       /*fourth colum second slot*/
				var subjectView42 = document.getElementById("subjectView42").value;
				var teacherView42 = document.getElementById("teacherView42").value;				
                addTimeSlot(classNo,classTeacher,timeView12,subjectView42,teacherView42,th);
        
                var timeView13 = document.getElementById("timeView13").value;       /*fourth colum third slot*/
				var subjectView43 = document.getElementById("subjectView43").value;
				var teacherView43 = document.getElementById("teacherView43").value;				
                addTimeSlot(classNo,classTeacher,timeView13,subjectView43,teacherView43,th);
        
                var timeView14 = document.getElementById("timeView14").value;       /*fourth colum fourth slot*/
				var subjectView44 = document.getElementById("subjectView44").value;
				var teacherView44 = document.getElementById("teacherView44").value;				
                addTimeSlot(classNo,classTeacher,timeView14,subjectView44,teacherView44,th);
        
                var timeView15 = document.getElementById("timeView15").value;       /*fourth colum fifth slot*/
				var subjectView45 = document.getElementById("subjectView45").value;
				var teacherView45 = document.getElementById("teacherView45").value;				
                addTimeSlot(classNo,classTeacher,timeView15,subjectView45,teacherView45,th);
        
                var timeView16 = document.getElementById("timeView16").value;       /*fourth colum sixth slot*/
				var subjectView46 = document.getElementById("subjectView46").value;
				var teacherView46 = document.getElementById("teacherView46").value;				
                addTimeSlot(classNo,classTeacher,timeView16,subjectView46,teacherView46,th);
        
                var timeView17 = document.getElementById("timeView17").value;       /*fourth colum seventh slot*/
				var subjectView47 = document.getElementById("subjectView47").value;
				var teacherView47 = document.getElementById("teacherView47").value;				
                addTimeSlot(classNo,classTeacher,timeView17,subjectView47,teacherView47,th);
        
                var timeView18 = document.getElementById("timeView18").value;       /*fourth colum eigth slot*/
				var subjectView48 = document.getElementById("subjectView48").value;
				var teacherView48 = document.getElementById("teacherView48").value;				
                addTimeSlot(classNo,classTeacher,timeView18,subjectView48,teacherView48,th);
        
                var fri="friday";
        
			    var timeView1 = document.getElementById("timeView1").value;       /*fifth colum first slot*/
				var subjectView5 = document.getElementById("subjectView5").value;
				var teacherView5 = document.getElementById("teacherView5").value;				
                addTimeSlot(classNo,classTeacher,timeView1,subjectView5,teacherView5,fri);
        
                var timeView12 = document.getElementById("timeView12").value;       /*fifth colum second slot*/
				var subjectView52 = document.getElementById("subjectView52").value;
				var teacherView52 = document.getElementById("teacherView52").value;				
                addTimeSlot(classNo,classTeacher,timeView12,subjectView52,teacherView52,fri);
        
                var timeView13 = document.getElementById("timeView13").value;       /*fifth colum third slot*/
				var subjectView53 = document.getElementById("subjectView53").value;
				var teacherView53 = document.getElementById("teacherView53").value;				
                addTimeSlot(classNo,classTeacher,timeView13,subjectView53,teacherView53,fri);
        
                var timeView14 = document.getElementById("timeView14").value;       /*fifth colum fourth slot*/
				var subjectView54 = document.getElementById("subjectView54").value;
				var teacherView54 = document.getElementById("teacherView54").value;				
                addTimeSlot(classNo,classTeacher,timeView14,subjectView54,teacherView54,fri);
        
                var timeView15 = document.getElementById("timeView15").value;       /*fifth colum fifth slot*/
				var subjectView55 = document.getElementById("subjectView55").value;
				var teacherView55 = document.getElementById("teacherView55").value;				
                addTimeSlot(classNo,classTeacher,timeView15,subjectView55,teacherView55,fri);
        
                var timeView16 = document.getElementById("timeView16").value;       /*fifth colum sixth slot*/
				var subjectView56 = document.getElementById("subjectView56").value;
				var teacherView56 = document.getElementById("teacherView56").value;				
                addTimeSlot(classNo,classTeacher,timeView16,subjectView56,teacherView56,fri);
        
                var timeView17 = document.getElementById("timeView17").value;       /*fifth colum seventh slot*/
				var subjectView57 = document.getElementById("subjectView57").value;
				var teacherView57 = document.getElementById("teacherView57").value;				
                addTimeSlot(classNo,classTeacher,timeView17,subjectView57,teacherView57,fri);
        
                var timeView18 = document.getElementById("timeView18").value;       /*fifth colum eight slot*/
				var subjectView58 = document.getElementById("subjectView58").value;
				var teacherView58 = document.getElementById("teacherView58").value;				
                addTimeSlot(classNo,classTeacher,timeView18,subjectView58,teacherView58,fri);
        

                alert("Time Table sent successfully");
        
   
    }
    
    

    var sid=document.getElementById("schoolid").value;
    function addTimeSlot(classNo,classTeacher,timeView,subjectView,teacherView,date,sid){
                

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
        var x=document.getElementById("schoolid").value; 
        
        getClassTimeTable(clz,x);
        
        
    }
    
    function deleteTable(){
         //getTimeSlot(timeLine,dayLine,subCode,lecCode);
        // getTimeSlot("07.50-08.30","Monday",'subjectView38','teacherView38');//subjectView38
		
		var tu="tuesday";
        
                var timeView12 = document.getElementById("timeView12").value;       /*second colum first slot*/
				var subjectView22 = document.getElementById("subjectView22").value;
				var teacherView22 = document.getElementById("teacherView22").value;				
                addTimeSlot(classNo="manji",classTeacher="ck",timeView12,subjectView22,teacherView22,tu);
    }
    
    
</script>



