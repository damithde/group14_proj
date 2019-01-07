<?php include_once('dashboardhead.php'); ?>
<?php include_once('dashboardheader.php'); ?>
<?php include_once('dashboardsidebar.php'); ?>
<?php include_once('dashboardscript.php'); ?> 
<script src="../../../firebase models/login.js"></script>

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
        </div>

                


                <!--                        Notification Panel-->

                <input type="hidden" id="schoolid" value="abc">
            </div>
        </div>
    </section>
</section>
</div>

</body>
<?php include_once('dashboardfooter.php'); ?>

<script>
    
    loadnotification();   
    
    
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




    
</script>

