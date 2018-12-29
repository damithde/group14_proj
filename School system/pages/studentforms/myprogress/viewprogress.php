<?php include_once('../studentcommon/head.php'); ?>
<?php include_once('../studentcommon/header.php'); ?>
<?php include_once('../studentcommon/sidebar.php'); ?>
<?php include_once('../studentcommon/script.php'); ?>


<body class="skin-blue">
<div class="wrapper">
<section class="content-wrapper">
    <section class="content-header">
            <!--            left side panel-->
            <div class="col-md-9">
            <!--                student details-->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Class Teacher's Note</h3>
                    </div><!-- /.box-header -->
                    <br>
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <label class="text-muted" id="classTeacherNote"> - </label>
                        </div><!-- /.box-body -->
                        <!-- <div class="box-footer">
                        </div> -->
                    </form>
                </div><!-- /.box -->
            </div>

            <div class="col-md-3">
            <!--                student details-->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Your Possition</h3>
                    </div><!-- /.box-header -->
                    <br>
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class ="col-md-5"></div>
                            <label id="studentpossition"><h1>45</h1></label>
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>

        <div class="col-md-12">
            <!--                Exam results-->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Term test results</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>Subject Name</th>
                                <th>Term test 1 </th>
                                <th>Term Test 2 </th>
                                <th>Term Test 3</th>
                            </tr>
                            </thead>
                            <script>
                                var cars = ["BMW", "Volvo", "Saab", "Ford", "Fiat", "Audi"];
                                var text = "";
                                var i;
                                for (i = 0; i < cars.length; i++) {
                                text += cars[i] + "<br>";
                                }
                                document.getElementById("demo").innerHTML = text;
                                <tbody>
                                    <tr>
                                        <td>Math</td>
                                        <td><span class="label label-success">527</span></td>
                                        <td><span class="label label-danger">57</span></td>
                                        <td><span class="">--</span></td>
                                    </tr>
                                </tbody>
                                </script>
                            <tbody>
                            <!-- <tr>
                                <td>Math</td>
                                <td><span class="label label-success">57</span></td>
                                <td><span class="label label-danger">57</span></td>
                                <td><span class="">--</span></td>
                            </tr>
                            <tr>
                            <td>Math</td>
                                <td><span class="label label-warning">57</span></td>
                                <td><span class="label label-danger">57</span></td>
                                <td><span class="">--</span></td>
                            </tr>
                            <tr>
                            <td>Math</td>
                                <td><span class="label label-danger">57</span></td>
                                <td><span class="label label-danger">57</span></td>
                                <td><span class="">--</span></td>
                            </tr>
                            <tr>
                            <td>Math</td>
                                <td><span class="label label-warning">57</span></td>
                                <td><span class="label label-danger">57</span></td>
                                <td><span class="">--</span></td>
                            </tr>
                            <tr>
                            <td>Math</td>
                                <td><span class="label label-warning">57</span></td>
                                <td><span class="label label-info">57</span></td>
                                <td><span class="">--</span></td>
                            </tr>
                            <tr>
                            <td>Math</td>
                                <td><span class="label label-warning">57</span></td>
                                <td><span class="label label-danger">57</span></td>
                                <td><span class="">--</span></td>
                            </tr> -->
                            </tbody>
                        </table>
                    </div><!-- /.table-responsive -->
                </div><!-- /.box-body -->
            </div><!-- /.box -->

        </div>
    </section>
</section>
</div>
</body>

<?php include_once('../studentcommon/footer.php'); ?>
