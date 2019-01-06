<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>

<html>
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
                                    <span id="totStudents" class="info-box-number">0</span>

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
                                    <span id ="totTeachers" class="info-box-number">0</span> 

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
                                    <span id ="totNoOfNotifaications" class="info-box-number">0</span>

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
                                    <span id="totNonAcadamicStaff" class="info-box-number">0</span>

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
                   
                </div>

            </div>
           

                <!--                        Notification Panel-->


            </div>
        </div>
    </section>
</section>
</div>
</body>
</html>

<?php include_once('../admincommon/footer.php'); ?>

<script>
  

    gettotaalstudents();
    gettotalteachers();
    gettotalnotifications();


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

