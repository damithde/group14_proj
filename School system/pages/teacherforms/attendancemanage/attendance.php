<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>

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

                    <!-- search form -->

                    <div class="form-group">
                        <div class="col-md-3"
                    <div id="studentMediumTxt" class="form-group">
                        <label  >Grade:</label>
                        <select class="form-control">
                            <option value="6">Grade 6</option>
                            <option value="7">Grade 7</option>
                            <option value="8">Grade 8</option>
                            <option value="9">Grade 9</option>
                            <option value="10">Grade 10</option>
                            <option value="11">Grade 11</option>
                            <option value="12">Grade 12</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <div class="col-md-3"

                        <div id="studentMediumTxt" class="form-group">
                            <label  >Class:</label>
                            <select class="form-control">
                                <option value="sinhala">All</option>
                                <option value="english">A</option>
                                <option value="tamil">B</option>
                                <option value="english">C</option>
                                <option value="tamil">D</option>
                                <option value="english">E</option>
                                <option value="tamil">F</option>
                                <option value="english">G</option>
                                <option value="tamil">H</option>
                            </select>
                        </div>
                        <div class="form-group">


                            <label>Date :</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" class="form-control pull-right" id="date"/>
                            </div><!-- /.input group -->
                        </div>
                    </div>

                        <button type="button" class="btn btn-primary">Load student</button>





                <div class="box-body"
                <div class="col-md-6"
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <th>Registration No</th>
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
            <!-- /.box-footer -->
        </div><!-- /.box -->
    </section>
</section>
</div>
</body>


<?php include_once('../teachercommon/footer.php'); ?>


