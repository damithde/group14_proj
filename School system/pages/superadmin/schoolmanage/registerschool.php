<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
<head></head>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<section class="content-wrapper">
    <section class="content-header">
    <div class="row">
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">School Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label  >School Name:</label>
                            <input type="input" class="form-control" id="schoolNameTxt" placeholder="Enter School Name">
                        </div>
                        <div class="form-group">
                            <label  >Location :</label>
                            <input type="input" class="form-control" id="schoolLocationTxt" placeholder="Enter School Location">
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        
                    </div><!-- /.box-body -->

                    <div class="box-footer">

                    </div>
                </form>
            </div><!-- /.box -->
        </div>


    </div>
    <div>
    </div>
    </section>
</section>


<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/student.js"></script>
<script>
    var stdFName = document.getElementById("schoolNameTxt").value;
    var stdLName = document.getElementById("schoolLocationTxt").value;
    

</script>

<?php include_once('../admincommon/footer.php'); ?>