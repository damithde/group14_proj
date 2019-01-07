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
    <script src="../../../firebase models/login.js"></script>
    <script src="../../../firebase models/admin.js">
    </script>
    <script>getschool("schoolid");</script>
</head>

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
                                <span class="info-box-icon"><i class="fa fa-users"></i></span>

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
                                <span class="info-box-icon"><i class="fa fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Total Teachers</span>
                                    <span id ="totTeachers" class="info-box-number">0</span> 

                                    <div class="progress">
                                    <div id ="totTeachersNo" class="progress-bar" ></div>
                                    </div>
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
                                <span class="info-box-icon"><i class="fa fa-envelope-square"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Number of Notifications</span>
                                    <span id ="totNoOfNotifaications" class="info-box-number">0</span>

                                    <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                    </div>
                                </div>
                                <!-- /.info-box-content -->
                                </div>
                                <!-- /.info-box -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="info-box bg-red">
                                <span class="info-box-icon"><i class="fa fa-users"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">No of Leaves</span>
                                    <span id="totNonAcadamicStaff" class="info-box-number">1</span>

                                    <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                    </div>
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
                <div >
                    <div class="box box-primary">
                            <div class="box-header with-border">
                                <div class="fa fa-bullhorn">
                                    <h3 class="box-title">School Notifications And Notices</h3>
                                </div>
                                <div class="box-tools pull-right">
                        <!--            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>-->
                        <!--            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                                </div>
                            </div><!-- /.box-header -->
                            <div id="noti" class="box-body">
                                <ul class="products-list product-list-in-box" id="list">
                                    <li class="item">
            
                                       
                                    </li><!-- /.item -->
                                    
                                    </ul>
                            </div><!-- /.box-body -->
                            <div class="box-footer text-center">
                                <!-- <a href="javascript::;" class="uppercase">View All Notifications</a> -->
                            </div><!-- /.box-footer -->
                        </div><!-- /.box -->
                </div>
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
                                <div id = "studentcount" class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                    Present Students:
                                    <span id ="studentpresent" class="sr-only">0%</span>
                                </div>
                                <label id="c"></label>
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
<input type="hidden" id="schoolid" value="abc">
</body>


<?php include_once('../admincommon/footer.php'); ?>

<script>
    
    loadnotification();
    gettotaalstudents();
    gettotalteachers();
    gettotalnotifications();
    var x=getstudentspresent();
    
    
    
function loadnotification(){
    var output;
    var school=document.getElementById("schoolid").value;
    db.collection("notification").where("schooIId","==",school)
    .get()
    .then(function(querySnapshot) {
        var i=0;
        querySnapshot.forEach(function(doc) {

            output=doc.data();
            
            el = document.createElement('li');
            el.id = 'l'+i;
            document.getElementById('list').appendChild(el);
           
            var iDiv = document.createElement('h4');
            iDiv.id = 'block'+i;
            iDiv.innerHTML= output.title;
            el.appendChild(iDiv);

            var nSpan = document.createElement('span')
            nSpan.innerHTML = output.content;
            el.appendChild(nSpan);

            var h = document.createElement('hr')
            el.appendChild(h);
            
            i++;
           //console.log(doc.id, " => ", doc.data());
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
}


function gettotaalstudents(){
    var school=document.getElementById("schoolid").value;
    var output,count;
    count=0;
    db.collection("students").where("school","==",school)
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
    var school=document.getElementById("schoolid").value;
    var output,count;
    count=0;
    db.collection("teachers").where("school","==",school)
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
    var school=document.getElementById("schoolid").value;
    var output,count;
    count=0;
    db.collection("notification").where("schooIId","==",school)
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


function getstudentspresent(){
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
    dd = '0' + dd;
    }

    if (mm < 10) {
    mm = '0' + mm;
    }

    today =  yyyy+'-'+mm+'-'+dd;
    console.log(today);
    var school=document.getElementById("schoolid").value;
    var output,count;
    count=0;
    db.collection("attendance").where("school","==",school).where("present","==",true).where("date","==",today)
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            count++;
            
           //console.log(doc.id, " => ", doc.data());
        });
        var ts=document.getElementById("totStudents").innerHTML
        document.getElementById("studentcount").style.width=(count*100/parseInt(ts, 10))+"%";
        document.getElementById("c").innerHTML=": "+count;
       // document.getElementById("studentcount").setAttribute("style","width:100%");
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
}







    
</script>

