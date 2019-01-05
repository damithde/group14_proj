
<?php include '../../../email.php' ?>
<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<html>
  <head>
      <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script> 
      <script src="../../../firebase models/db.js"></script>
      <script src="../../../firebase models/teacher.js"></script>
      <script src="../../../firebase models/admin.js"></script>
      <script src="../../../firebase models/fileupload.js"></script>
  </head>

<style>
    .tag-input-ctn {
    border: 1px solid #ccc;
    padding: 2px 3px;
    display: inline-block;
    width: 500px;
    border-radius: 3px;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.075);
    }
    .tag-input-ctn input {
    display: inline-block;
    float: left;
    height: 18px;
    padding: 0px;
    font-size: 13px;
    line-height: 18px;
    color: black;
    border: 0px;
    margin: 2px;
    }
    .tag-input-ctn input:focus {
    outline: 0;
    box-shadow: 0px;
    }
    .tag-input-ctn .input-tag {
    padding: 2px 4px;
    line-height: 12px;
    font-size: 11px;
    background-color: #e3eaf6;
    display: inline-block;
    float: left;
    border-radius: 2px;
    margin: 2px 5px 2px 0px;
    border: 1px solid #a9b6d2;
    }
    .tag-input-ctn .input-tag .delete-tag {
    display: inline-block;
    font-size: 12px;
    cursor: pointer;
    padding: 0px 2px;
    }
    .tag-input-ctn .input-tag .delete-tag:hover {
    background-color: #96b4d2;
    }

</style>

<section class="content-wrapper">
    <section class="content-header">
    <!--        main row-->
        <div class="row">
            <div class="col-md-12">

    <!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Message </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form id="i" method="post" >
                        <div class="box-body">
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1">Student Id:</label>
                                    <label style="color:#CCCCCC">(Seperate with commas)</label>
                                    <input type="text" class="form-control" id="studentIdText" placeholder="Enter Student Id"> 
                                    <button type="button" onclick="setid()" class="btn btn-primary" style="width:150px">set</button>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Message:</label>
                                <textarea class="form-control" id="messageTxt" name="messageTxt" rows="3" placeholder="Enter messege here"></textarea>
                            </div>
                            <div class="box-footer">
                                <div class="col-md-10"></div>
                                <input type="submit" id="sub" name="sub" class="btn btn-primary" style="width:150px" value="SEND">                            </div>
                            <div class="box-footer">

                            
                            

                    </form>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
    <input type="hidden" id="schoolid" name="schoolid" value="">
    <input type="hidden" id="emailid" name="emailid" value="null">
</section>

<script>
  getschool("schoolid");

function setid(){
    var stid = document.getElementById("studentIdText").value.split(',');
    var m = document.getElementById("messageTxt").value;
    var school = document.getElementById("schoolid").value;
    
    stid.forEach(function(stid){
    db.collection("students").where("school","==",school).where("regno","==",stid)
    .get()
    .then(function(querySnapshot) {
      
        querySnapshot.forEach(function(doc) {
            output=doc.data();
            console.log(doc.id, " => ", doc.data());
            document.getElementById("emailid").value=output.email+','+document.getElementById("emailid").value ;
            console.log(document.getElementById("emailid").value);
        });
    })
    .catch(function(error) {
        console.log("Error getting documents: ", error);
    });
  })
}


</script>
</html>
<?php include_once('../admincommon/footer.php');

if (isset($_POST["sub"])) {
  echo "Yes, mail is set";    
}else{  
  echo "N0, mail is not set";
}

if(array_key_exists('sub',$_POST)){
  echo 'bjhbjb';
  if ( ! empty($_POST['emailid'])){
    $e=$_POST['emailid'];
}
  
$messege=$_POST['messageTxt'];
$emails=array("damithdesilva2@gmail.com");
$subject="Notice";
sendmail($emails,$subject,$messege);
}



?>

