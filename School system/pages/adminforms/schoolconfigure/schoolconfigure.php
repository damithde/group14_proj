<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>


<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/student.js"></script>
<script src="../../../firebase models/admin.js"></script>
<script src="../../../firebase models/login.js"></script>


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
                                                <th>Classes</th>
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
                                <div class="form-group">
                                    <div class="col-md-10"></div>
                                    <div class="col-md-2">
                                        <button type="button" class="btn btn-primary" onclick="saveing()"  style="width:130px">Save Config</button>
                                    </div>
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
    <input type="hidden" id="schoolid" value="MH">
</section>

<script>
getschool("schoolid");
function saveing(){
    var school = document.getElementById("schoolid").value;
    var g6class = document.getElementById("g6class").value.split(',');
    var g6subjects = document.getElementById("g6subjects").value.split(',');
    var g7class = document.getElementById("g7class").value.split(',');
    var g7subjects = document.getElementById("g7subjects").value.split(',');
    var g8class = document.getElementById("g8class").value.split(',');
    var g8subjects = document.getElementById("g8subjects").value.split(',');
    var g9class = document.getElementById("g9class").value.split(',');
    var g9subjects = document.getElementById("g9subjects").value.split(',');
    var g10class = document.getElementById("g10class").value.split(',');
    var g10subjects = document.getElementById("g10subjects").value.split(',');
    var g11class = document.getElementById("g11class").value.split(',');
    var g11subjects = document.getElementById("g11subjects").value.split(',');
    var g12class = document.getElementById("g12class").value.split(',');
    var g12subjects = document.getElementById("g12subjects").value.split(',');
    saveconfig("6",g6class,g6subjects,school);
    saveconfig("7",g7class,g7subjects,school);
    saveconfig("8",g8class,g8subjects,school);
    saveconfig("9",g9class,g9subjects,school);
    saveconfig("10",g10class,g10subjects,school);
    saveconfig("11",g11class,g11subjects,school);
    saveconfig("12",g12class,g12subjects,school);
    alert("details saved sucessfully");
 






}
</script>

<?php include_once('../admincommon/footer.php'); ?>
