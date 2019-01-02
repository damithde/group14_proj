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
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label >No of terms per year:</label>
                                        <select onkeyup="prvGrade()" id="teacherGradeTxt" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label >Meadium:</label>
                                        <div class="checkbox">
                                            <label class="form-control">
                                                <input id="sinhalaMeadium" type="checkbox"> Sinhala
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="form-control">
                                                <input id="englishMeadium" type="checkbox"> English
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label class="form-control">
                                                <input id="tamilMeadium" type="checkbox"> Tamil
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-10">
                                <div class="form-group">
                                    <label >Subjects:</label>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>Grade</th>
                                                <th>No Of Subjects</th>
                                                <th>Is Fixed</th>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>
                                                    <input type="input" class="form-control" id="studentFNameTxt" >
                                                </td>
                                                <td>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <input type="checkbox">
                                                        </span>
                                                        <input type="text" class="form-control">
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
