<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>


<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">

            <!--            left side panel-->


                <!--                student details-->
                <div class="box box-primary">
                
                    <div class="box-header with-border">
                        <div class="col-md-6">
                            <form action="#" method="get" class="form-group">

                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Enter Reg Number..."/>
                                    <span class="input-group-btn">
                                                                           <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                                                                   </span>

                                </div>
                            </form>
                        </div>
                        <div class="col-md-12">
                        <h3 class="box-title">Student Report</h3>
                    </div><!-- /.box-header -->


                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <!--Lable field-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-4">
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
                                                <label class="text-muted" for="exampleInputEmail1">Registration Number:</label>
                                            </div>


                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Name:</label>
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Term Test:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Year:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Class:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" >Position:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Maths:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Science:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">English:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Sinhala:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Histry:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Buddhist:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Commerce:</label>
                                            </div>

                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Geography:</label>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-muted" for="exampleInputEmail1">Tamil:</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Y.Dinuka Kasun Medis</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">16000897</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">II</label>
                                    </div>
                                    <div class="form-group">
                                        <label>2018</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">11-B</label>

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">10</label>

                                    </div>
                                    <div class="form-group">

                                        <td><span class="label label-success">75</span></td>

                                    </div>
                                    <div class="form-group">
                                        <td><span class="label label-success">62</span></td>
                                    </div>
                                    <div class="form-group">
                                        <td><span class="label label-success">82</span></td>
                                    </div>

                                    <div class="form-group">
                                        <td><span class="label label-success">55</span></td>
                                    </div>
                                    <div class="form-group">
                                        <td><span class="label label-success">70</span></td>
                                    </div>
                                    <div class="form-group">
                                        <td><span class="label label-success">60</span></td>
                                    </div>
                                    <div class="form-group">
                                        <td><span class="label label-success">80</span></td>
                                    </div>
                                    <div class="form-group">
                                        <td><span class="label label-success">65</span></td>
                                    </div>
                                    <div class="form-group">
                                        <td><span class="label label-success">60</span></td>
                                    </div>
                                    <div class="form-group">
                                        <td><span class="label label-success">50</span></td>
                                    </div>

                                </div>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</section>
<?php include_once('../teachercommon/footer.php'); ?>

