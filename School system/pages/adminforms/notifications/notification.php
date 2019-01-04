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
                        <h3 class="box-title">Notifications </h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label >
                                                    <input type="checkbox"> Student
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label >
                                                    <input type="checkbox"> Teacher
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label >
                                                    <input type="checkbox"> General
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="email" class="form-control" id="messageTitleTxt" placeholder="Enter Title of Notification">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Content:</label>
                                <textarea class="form-control" id="messageTxt" rows="3" placeholder="Enter messege here"></textarea>
                            </div>




                            <div class="box-footer">
                                <div class="col-md-10"></div>
                                <button type="button" class="btn btn-primary" style="width:150px">Publish</button>
                            </div>

                    </form>
                </div><!-- /.box -->
            </div>

            <div >
                    <?php include_once('dashboardnotificationPanel.php'); ?>
                </div>

        </div>
        <div>
        </div>
    </section>
</section>

<script>
    var publisherNameText = document.getElementById("publisherNameText").value;
    var messageTitleTxt = document.getElementById("messageTitleTxt").value;
    var messageTxt = document.getElementById("messageTxt").value;
</script>

<?php include_once('../admincommon/footer.php'); ?>
