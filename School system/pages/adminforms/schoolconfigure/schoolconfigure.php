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
                        <h3 class="box-title">Configuration</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="col-md-4">

                    </div>
                    <form role="form">
                        <div class="box-body">
                            <!-- <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">No of terms per year:</label>
                                        <select onkeyup="prvGrade()" id="teacherGradeTxt" class="form-control">
                                        <option value="6">1</option>
                                        <option value="7">2</option>
                                        <option value="8">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div> -->

                            <div class="row">
                                <div class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Term Details:</label>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Term</th>
                                                <th>No of days</th>
                                                <th>From</th>
                                                <th>To</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <input type="input" class="form-control" id="studentFNameTxt" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="date1"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="date"/>
                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <input type="input" class="form-control" id="studentFNameTxt" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="date"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="date"/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <input type="input" class="form-control" id="studentFNameTxt" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="date"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="date"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Meadium:</label>
                                        <div class="checkbox">
                                            <label class="form-control">
                                                <input type="checkbox"> Sinhala
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="form-control">
                                                <input type="checkbox"> English
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="form-control">
                                                <input type="checkbox"> Tamil
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Subjects:</label>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Grade</th>
                                                <th>No Of Classes</th>
                                                <th>Subjects</th>
                                            </tr>
                                            <tr>
                                                <td>Grade 6</td>
                                                <td>
                                                    <input type="input" class="form-control" id="g6class" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input style="width:350px" type="text" id="g6subjects" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Grade 7</td>
                                                <td>
                                                    <input type="input" class="form-control" id="g7class" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input style="width:350px" type="text" id="g7subjects" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Grade 8</td>
                                                <td>
                                                    <input type="input" class="form-control" id="g8class" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input style="width:350px" type="text" id="g8subjects" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Grade 9</td>
                                                <td>
                                                    <input type="input" class="form-control" id="g9class" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input style="width:350px" type="text" id="g9subjects" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Grade 10</td>
                                                <td>
                                                    <input type="input" class="form-control" id="g10class" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input style="width:350px" type="text" id="g10subjects" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Grade 11</td>
                                                <td>
                                                    <input type="input" class="form-control" id="g11class" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input style="width:350px" type="text" id="g11subjects" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Grade 12</td>
                                                <td>
                                                    <input type="input" class="form-control" id="g12class" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input style="width:350px" type="text" id="g12subjects" class="form-control">
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
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

<script>
    var stdFName = document.getElementById("studentIdText").value;
    var stdLName = document.getElementById("studentNameTxt").value;
    var stdLName = document.getElementById("messageTxt").value;
</script>

<?php include_once('../admincommon/footer.php'); ?>
