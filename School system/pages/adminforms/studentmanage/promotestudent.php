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
<script src="../../../firebase models/admin.js"></script>
</head>

<body>
<section class="content-wrapper">
    <section class="content-header">
<!--        main row-->
        <div class="row">
            <div class="col-md-12">
<!--                guardian details-->
                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Promote Student</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="col-md-4">

                    </div>
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
                                        <div class="form-group">
                                            <label  class="text-muted"> Student List:</label>
                                            <textarea class="form-control" id="studentAddressTxt" rows="3" placeholder="Enter Student Admission Numbers seperated by commas"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                    <label>Select grade to promote to  </label>
                                                    <select class="form-control" id = "idgrade" style="margin-left: 15px ; width: 100px" onchange="setTimeout(p ,500)">
                                                            <option value = "6">Six</option>
                                                            <option value = "7">Seven</option>
                                                            <option value = "8">Eight</option>
                                                            <option value = "9">Nine</option>
                                                            <option value = "10">Ten</option>
                                                            <option value = "11">Eleven</option>
                                                            <option value = "12">Twelve</option>
                                                            <option value = "13">Thirteen</option>
                                                          </select>
                                            </div>
                                            <div class="form-group" >
                                                    <label>Select class to promote to </label>
                                                    <select class="form-control" id = "classlist" style="margin-left: 15px ; width: 100px">
         
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="row"></div>
                                        <button type="button" class="btn btn-block btn-primary btn-lg" style="width:300px; margin-left: 200px">Promote</button>
                                    </div>
                                </div>
                                <div class="col-md-6" id="subjectselection">
                                    <label>fefefe</label>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color:red">
                                    
                                        </label>
                                        <hr>
                                    </div>
                                </div>
                            </div>

                        </div>  
                    </form>
                    <div class="box-footer">

                    </div>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>
</body>
<input type="text" id="schoolid" value="blank" >
</html>
<script>
    getschool("schoolid");
    setTimeout(p ,1500);
    function p(){
        var grade=document.getElementById("idgrade").value;
        var school=document.getElementById("schoolid").value;
        $("#classlist").empty();
        db.collection("schools").where("id","==",school)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                db.collection("schools").doc(doc.id).collection("grades").where("grade","==",grade)
                .get()
                .then(function(querySnapshot) {
                    querySnapshot.forEach(function(doc) {
                        var classes=doc.data().classes;
                        classes.forEach(function(cls){
                            var sel = document.getElementById("classlist");
                            var opt = document.createElement("option");
                            opt.value = cls;
                            opt.text = cls;
                            sel.add(opt);
                                
                        })
                        console.log(doc.id, " => ", classes);
                    });
                })
                .catch(function(error) {
                    console.log("Error getting documents: ", error);
                });
               
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
        
        if (grade==10) {
            document.getElementById("studentDev").style.display = 'block';
            document.getElementById("teacherDev").style.display = 'none';        
        }
        else if (grade==12) {
            //show other div
            document.getElementById("studentDev").style.display = 'none';
            document.getElementById("teacherDev").style.display = 'block';
        }
        else{
            document.getElementById("studentDev").style.display = 'none';
            document.getElementById("teacherDev").style.display = 'none';
        }
    
    }




    //onclick of promote
    promotestudent(idlist,tograde,toclass,year,subjects);


</script>

<?php include_once('../admincommon/footer.php'); ?>
