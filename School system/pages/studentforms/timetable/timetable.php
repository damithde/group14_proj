<?php include_once('../studentcommon/head.php'); ?>
<?php include_once('../studentcommon/header.php'); ?>
<?php include_once('../studentcommon/sidebar.php'); ?>
<?php include_once('../studentcommon/script.php'); ?>

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
                            <td id=tim1>07.50-08.30</td>
                            <td id="mon1">-</td>
                            <td id="tue1">-</td>
                            <td id="wen1">-</td>
                            <td id="thr1">-</td>
                            <td id="fri1">-</td>
                        </tr>
                        <tr>
                            <td id=tim2>08.30-09.10</td>
                            <td id="mon2">-</td>
                            <td id="tue2">-</td>
                            <td id="wen2">-</td>
                            <td id="thr2">-</td>
                            <td id="fri2">-</td>
                        </tr>
                        <tr>
                            <td id=tim3>09.10-09.50</td>
                            <td id="mon3">-</td>
                            <td id="tue3">-</td>
                            <td id="wen3">-</td>
                            <td id="thr3">-</td>
                            <td id="fri3">-</td>
                        </tr>
                        <tr>
                            <td id=tim4>09.50-10.30</td>
                            <td id="mon4">-</td>
                            <td id="tue4">-</td>
                            <td id="wen4">-</td>
                            <td id="thr4">-</td>
                            <td id="fri4">-</td>
                        </tr>
                        <td>
                            <h2>INTERVAL</h2>
                        </td>
                        <tr>
                            <td id=tim5>10.50-11.30</td>
                            <td id="mon5">-</td>
                            <td id="tue5">-</td>
                            <td id="wen5">-</td>
                            <td id="thr5">-</td>
                            <td id="fri5">-</td>
                        </tr>
                        <tr>
                            <td id=tim6>11.30-12.10</td>
                            <td id="mon6">-</td>
                            <td id="tue6">-</td>
                            <td id="wen6">-</td>
                            <td id="thr6">-</td>
                            <td id="fri6">-</td>
                        </tr>
                        <tr>
                            <td id=tim7>12.10-12.50</td>
                            <td id="mon7">-</td>
                            <td id="tue7">-</td>
                            <td id="wen7">-</td>
                            <td id="thr7">-</td>
                            <td id="fri7">-</td>
                        </tr>
                        <tr>
                            <td id=tim8>12.50-13.30</td>
                            <td id="mon8">-</td>
                            <td id="tue8">-</td>
                            <td id="wen8">-</td>
                            <td id="thr8">-</td>
                            <td id="fri8">-</td>
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
    getClassTimeTable("2019/11A","mal2017");
    function getClassTimeTable(clzNo,school){
        var output;
        db.collection("timetable").where("classNo","==",clzNo).where("schoolId","==",school)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                output=doc.data();
                //document.getElementById('classNo').value = output.classNo;
                // document.getElementById('classTeacher').value = output.classTeacher;//document.getElementById("mytext").value = "My value";

            var d1="monday";
            getTimeSlot("07.50-08.30",d1,'mon1',clzNo,school);//subjectVie
            getTimeSlot("08.30-09.10",d1,'mon2',clzNo,school);
            getTimeSlot("09.10-09.50",d1,'mon3',clzNo,school);
            getTimeSlot("09.50-10.30",d1,'mon4',clzNo,school);
            getTimeSlot("10.50-11.30",d1,'mon5',clzNo,school);
            getTimeSlot("11.30-12.10",d1,'mon6',clzNo,school);
            getTimeSlot("12.10-12.50",d1,'mon7',clzNo,school);
            getTimeSlot("12.50-13.30",d1,'mon8',clzNo,school);
            
            var d2="tuesday";
            getTimeSlot("07.50-08.30",d2,'tue1',clzNo,school);//subjectVie
            getTimeSlot("08.30-09.10",d2,'tue2',clzNo,school);
            getTimeSlot("09.10-09.50",d2,'tue3',clzNo,school);
            getTimeSlot("09.50-10.30",d2,'tue4',clzNo,school);
            getTimeSlot("10.50-11.30",d2,'tue5',clzNo,school);
            getTimeSlot("11.30-12.10",d2,'tue6',clzNo,school);
            getTimeSlot("12.10-12.50",d2,'tue7',clzNo,school);
            getTimeSlot("12.50-13.30",d2,'tue8',clzNo,school);
            
            var d3="wednesday";
            getTimeSlot("07.50-08.30",d3,'wen1',clzNo,school);//subjectVie
            getTimeSlot("08.30-09.10",d3,'wen2',clzNo,school);
            getTimeSlot("09.10-09.50",d3,'wen3',clzNo,school);
            getTimeSlot("09.50-10.30",d3,'wen4',clzNo,school);
            getTimeSlot("10.50-11.30",d3,'wen5',clzNo,school);
            getTimeSlot("11.30-12.10",d3,'wen6',clzNo,school);
            getTimeSlot("12.10-12.50",d3,'wen7',clzNo,school);
            getTimeSlot("12.50-13.30",d3,'wen8',clzNo,school);
            
            var d4="thursday";
            getTimeSlot("07.50-08.30",d4,'thr1',clzNo,school);//subjectVie
            getTimeSlot("08.30-09.10",d4,'thr2',clzNo,school);
            getTimeSlot("09.10-09.50",d4,'thr3',clzNo,school);
            getTimeSlot("09.50-10.30",d4,'thr4',clzNo,school);
            getTimeSlot("10.50-11.30",d4,'thr5',clzNo,school);
            getTimeSlot("11.30-12.10",d4,'thr6',clzNo,school);
            getTimeSlot("12.10-12.50",d4,'thr7',clzNo,school);
            getTimeSlot("12.50-13.30",d4,'thr8',clzNo,school);
            
            var d5="friday";
            getTimeSlot("07.50-08.30",d5,'fri1',clzNo,school);//subjectVie
            getTimeSlot("08.30-09.10",d5,'fri2',clzNo,school);
            getTimeSlot("09.10-09.50",d5,'fri3',clzNo,school);
            getTimeSlot("09.50-10.30",d5,'fri4',clzNo,school);
            getTimeSlot("10.50-11.30",d5,'fri5',clzNo,school);
            getTimeSlot("11.30-12.10",d5,'fri6',clzNo,school);
            getTimeSlot("12.10-12.50",d5,'fri7',clzNo,school);
            getTimeSlot("12.50-13.30",d5,'fri8',clzNo,school);
                /*****************************/
            
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
    
        
        
        
        //alert("get time table sucess fully ",output);
        return output;
    }
</script>

<script>
    function getTimeSlot(timeLine,dayLine,subCode,classNoCk,school){
        
        var output;
        db.collection("timetable").where("classNo","==",classNoCk).where("time","==",timeLine).where("date","==",dayLine).where("schoolId","==",school)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                output=doc.data();
                document.getElementById(subCode).innerHTML = output.subjectCode.split("/").reverse()[0];
                //document.getElementById(lecCode).value = output.regno;
            
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
        
    }                               
</script>



