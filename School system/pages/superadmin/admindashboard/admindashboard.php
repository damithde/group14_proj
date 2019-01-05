<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<body class="skin-blue">
<div class="wrapper">
<section class="content-wrapper">
<section class="content-header">
    <div class="row">
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box bg-green">
                                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Students</span>
                                    <span id="totStudents" class="info-box-number">41,410</span>

                                    <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <!-- <span class="progress-description">
                                    70% Increase in 30 Days
                                    </span> -->
                                </div>
                                <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box bg-blue">
                                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Teachers</span>
                                    <span id ="totTeachers" class="info-box-number">41,410</span> 

                                    <div class="progress">
                                    <div id ="totTeachersNo" class="progress-bar" ></div>
                                    </div>
                                    <!-- <span class="progress-description">
                                    70% Increase in 30 Days
                                    </span> -->
                                </div>
                                <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box bg-orange">
                                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Number of Notifications</span>
                                    <span id ="totNoOfNotifaications" class="info-box-number">41,410</span>

                                    <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <!-- <span class="progress-description">
                                    70% Increase in 30 Days
                                    </span> -->
                                </div>
                                <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box bg-red">
                                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Non Acadamic Staff Total</span>
                                    <span id="totNonAcadamicStaff" class="info-box-number">41,410</span>

                                    <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                    <!-- <span class="progress-description">
                                    70% Increase in 30 Days
                                    </span> -->
                                </div>
                                <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                        </div>

                        



                        
                        <div class="row">
                            
                        </div>

                        </div>

                </div>

                <div>
                    <?php include_once('dashboardnotificationPanel.php'); ?>
                </div>

            </div>
            <div class="col-md-3">
                <!-- Calendar -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <?php include_once('dashboardcalendar.php'); ?>
                    </div>
                </div>

                <div >
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title">Attendance Details</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="progress">
                                <div id = "studentcount" class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    Present Students 4000
                                    <span id ="studentpresent" class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                            <div class="progress">
                                <div id = "teachercount" class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    Present Teachers 100
                                    <span id ="teacherpresent" class="sr-only">70% Complete</span>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>


                <!--                        Notification Panel-->


            </div>
        </div>
    </section>
</section>
</div>
</body>


<?php include_once('../admincommon/footer.php'); ?>

<script>
    var studentcount = "test";
    var studentpresent
    var teachercount
    var teacherpresent

    var totNonAcadamicStaff
    var totNoOfNotifaications 
    var totTeachers
    var totStudents
    var totTeachersNo ="width: 90%";

    document.getElementById('totNonAcadamicStaff').innerHTML = totNonAcadamicStaff;
    document.getElementById('totNoOfNotifaications').innerHTML = totNoOfNotifaications;
    document.getElementById('totTeachers').innerHTML = totTeachers;
    document.getElementById('totStudentsNo').style.width = "90%";

    document.getElementById('totStudents').innerHTML = totStudents;




function gettotaalstudents(){
    
    var output,count;
    count=0;
    db.collection("students")
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            count++;
            
           //console.log(doc.id, " => ", doc.data());
        });
        document.getElementById("totStudents").innerHTML=count;
    })
    
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
}


function gettotalteachers(){
    
    var output,count;
    count=0;
    db.collection("teachers")
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            count++;
            
           //console.log(doc.id, " => ", doc.data());
        });
        document.getElementById("totTeachers").innerHTML=count;
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
}

function gettotalnotifications(){
    
    var output,count;
    count=0;
    db.collection("notification")
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            count++;
            
           //console.log(doc.id, " => ", doc.data());
        });
        document.getElementById("totNoOfNotifaications").innerHTML=count;
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
}

</script>

