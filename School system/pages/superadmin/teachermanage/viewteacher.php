<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>


<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <!-- <div class="col-md-2">
            </div> -->
            <!--            left side panel-->
            <div class="col-md-12">
                <!--                student details-->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Teacher Details</h3>
                    </div><!-- /.box-header -->
                    <br>
                    <div class="row">
                        <div class="col-md-3">

                        </div>
                        <div class="col-md-8">
                            <!-- search form -->
                            <form action="#" method="get" class="form-group">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                                </div>
                            </form>
                            <!-- /.search form -->
                        </div>
                    </div>
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <!--Lable field-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Profile picture -->
                                            <div >
                                                <img src="../../../dist/img/user_100x128.png" alt="User Image">
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-edit"></i></a></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa  fa-print"></i></a></label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label><a href="../teachermanage/registerteacher.php"><i class="fa fa-download"></i></a></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!--Lable names-->
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Name:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Gender:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Date Of Birth:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Email:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Admission Date:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Current Class:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Current Section:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Address:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Phone:</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Y.Dinuka Kasun Medis</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Male</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">1995/09/20</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">dinuka.kasunds@gmail.com</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">2015/02/02</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">m1</label>
                                    </div>
                                    <div class="form-group">
                                        <label>12</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">73,Dampe,Madapatha</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">0717275722</label>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
            <!--            right side panel-->
            <div class="col-md-6 ">


            </div>
        </div>
    </section>
</section>

<?php include_once('../admincommon/footer.php'); ?>