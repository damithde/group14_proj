<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>

<body class="skin-blue">
<div class="wrapper">
<section class="content-wrapper">
    <section class="content-header">
        <!--                Exam results-->

                <div class="box box-primary">
                    <div class="box-header  with-border">
                        <h3 class="box-title">Exam Results</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <div class="col-md-4">

                    </div>
                    <form role="form">
                        <div class="box-body">

                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label  >Select Year:</label>
                                                    <select class="form-control">
                                                        <option value="6">2019</option>
                                                        <option value="7">2018</option>
                                                        <option value="8">2017</option>
                                                        <option value="9">2016</option>
                                                        <option value="10">2015</option>
                                                        <option value="11">2014</option>
                                                        <option value="1">2013</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label  >Select Grade:</label>
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
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label  >Select Class:</label>
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
                                            </div>
                                        </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label class="text-muted">Search by Exam ID</label>
                                                    <div class="input-group">
                                                        <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Admission No"/>
                                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label class="text-muted">Search by Exam Date</label>
                                                    <div class="input-group">
                                                        <input id="lNameSearch" type="date" name="q" class="form-control" placeholder="Search by First Name"/>
                                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                    <label class="text-muted">Search by Subject:</label>
                                                    <div class="input-group">
                                                        <input id="lNameSearch" type="text" name="q" class="form-control" placeholder="Search by Last Name"/>
                                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-8">
                                                <div id="studentMediumTxt" class="form-group">
                                                <button style="width:150px" type="button" class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        <hr>
                            <div class="row">
                                <div class="col-md-10">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Student Details Details:</label>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Exam Id</th>
                                                <th>Exam Name</th>
                                                <th>Date</th>
                                                <th>Results</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="../studentmanage/viewstudent.php">1600254</a>
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                                <td>
                                                    -
                                                </td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                </div>
                            </div>

                        </div>  
                    </form>
                    <div class="box-footer">

                    </div>
                </div><!-- /.box -->


    </section>
</section>
</div>
</body>


<?php include_once('../admincommon/footer.php'); ?>


