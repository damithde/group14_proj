<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<body class="skin-blue">
<div class="wrapper">
<section class="content-wrapper">
    <section class="content-header">
        <!--                Exam results-->
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="col-md-6">
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
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>Admission No</th>
                            <th>Name</th>
                            <th>Attendance</th>
                            <th>No of absent</th>
                            <th>Attendance Level</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-warning">75%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-danger">20%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-success">85%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-warning">75%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-warning">75%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-danger">20%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-success">85%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-warning">75%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-warning">75%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-danger">20%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-success">85%</span></td>
                        </tr>
                        <tr>
                            <td><a href="pages/examples/invoice.html">16000897</a></td>
                            <td>Y.D.K.Medis</td>
                            <td>
                                <label>
                                    <div class="icheckbox_flat-green checked" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" class="flat-red" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                </label>
                            </td>
                            <td>3</td>
                            <td><span class="label label-warning">75%</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- /.table-responsive -->
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Exams</a>
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </section>
</section>
</div>
</body>


<?php include_once('../admincommon/footer.php'); ?>


