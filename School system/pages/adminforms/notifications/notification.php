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
<script src="../../../firebase models/admin.js"></script> 
<section class="content-wrapper">
    <section class="content-header">
    <!--        main row-->
        <div class="row">
            <div class="col-md-12">

    <!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Notifications </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                                <label for="exampleInputEmail1">Publisher Name:</label>
                            <input type="text" class="form-control" id="publisherNameText" >
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="email" class="form-control" id="messageTitleTxt" placeholder="Enter Title of Notification">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Content:</label>
                                <textarea class="form-control" id="messageTxt" rows="3" placeholder="Enter messege here"></textarea>
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Attachment:</label>
                                    <input class="form-control" id="attachment" type="text" placeholder="Enter  here">
                                </div>




                            <div class="box-footer">
                                <div class="col-md-10"></div>
                                <button type="button" class="btn btn-primary" onclick="addnotification()" style="width:150px">Publish</button>
                            </div>

                    </form>
                </div><!-- /.box -->
            </div>
            <input type="hidden" id="schoolid" value="">

            <div >
                    <?php include_once('dashboardnotificationPanel.php'); ?>
                </div>

        </div>
        <div>
        </div>
    </section>
</section>

<script>
    getschool("schoolid");

    var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();

if(dd<10) {
    dd = '0'+dd
} 

if(mm<10) {
    mm = '0'+mm
} 

var date = mm + '/' + dd + '/' + yyyy;

var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

function addnotification(){
    var publisherNameText = document.getElementById("publisherNameText").value;
    var messageTitleTxt = document.getElementById("messageTitleTxt").value;
    var messageTxt = document.getElementById("messageTxt").value;
    var attachment = document.getElementById("attachment").value;
    var school=document.getElementById("schoolid").value;
    db.collection("notification").add({
        title:messageTitleTxt,
        time:time,
        schooIId:school,
        publisher: publisherNameText,
        date:date,
        content: messageTxt,
        attachment: attachment

    })
    .then(function(docRef) {
        alert("Notification sent successfully");
       // console.log("Document written with ID: ", docRef.id);
    })
    .catch(function(error) {
        alert("Error adding document: ", error);
    });
}


</script>

<?php include_once('../admincommon/footer.php'); ?>
