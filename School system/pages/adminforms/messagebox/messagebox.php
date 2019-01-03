<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
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
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <div>
                                    <label for="exampleInputEmail1">Student Id:</label>
                                    <input type="email" class="form-control" id="studentIdText" placeholder="Enter Student Id">
                                </div>
                            </div>
                            <div class="form-group">
                                <label  > Student List:</label>
                                <textarea class="form-control" id="studentAddressTxt" rows="3" placeholder="Enter Student Admission Numbers seperated by commas"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Student Email:</label>
                                <input type="email" class="form-control" id="studentNameTxt" placeholder="Enter Studenr Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Message:</label>
                                <textarea class="form-control" id="messageTxt" rows="3" placeholder="Enter messege here"></textarea>
                            </div>
                            <div class="box-footer">
                                <div class="col-md-10"></div>
                                <button type="submit" class="btn btn-primary" style="width:150px">Send</button>
                            </div>

                    </form>
                </div><!-- /.box -->
            </div>
        </div>
        <div>
        </div>
    </section>
</section>

<script>
    var stdFName = document.getElementById("studentIdText").value;
    var stdLName = document.getElementById("studentNameTxt").value;
    var stdLName = document.getElementById("messageTxt").value;
</script>

<?php include_once('../admincommon/footer.php'); ?>
