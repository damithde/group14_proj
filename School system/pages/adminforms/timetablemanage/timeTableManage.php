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
            <div class="box-header with-border">
                <h3 class="box-title">Create Time Table</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <thead>
                           <p>Time Table for</p> 
                <label class="col-md-5">
                        <input id="up_radio" type="radio" name="optionsRadios" value="class" checked="checked">
                        Class
                    </label>
                    <label class="radio inline">
                        <input id="ov_radio" type="radio" name="optionsRadios" value="teacher">  
                        Teacher
                    </label>
                            
                        </thead>
                </div>
                <div class="table-responsive">
                   <form role="form" action="" method="POST">
                       
                        <div id="classDev" class="login-box-body" >
                            <form class="">
                                <label>Class No</label><input name="classNo"><label>Class Teacher</label><input name="classTeacher">
                            </form>
                       
                       </div>
                        <div id="teacherDev" class="login-box-body" style="display:none">
                            <form class="">
                                <label>Teacher Reg No</label><input name="teacherRegNo"><label>Teacher Name</label><input name="teacherName">
                            </form>
                            
                       </div>
                       
                    <table class="table no-margin">
                        
                        
                        <thead>
                            <tr>
                                <th>Time Perod</th>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wendsday</th>
                                <th>Thersday</th>
                                <th>Friday</th>
                            </tr>
                        </thead>
                        
                            <p>test student</p>
                        <tbody>
                        <tr>
                            <td><input name="time2" class="tableTxtEdit" value="07.30-07.50"></td>
                            <td></td>
                            <td></td>
                            <td style="font-size:25px;font-weight: bold;" class="tableTxtEdit">Reminding Religion</td>
                            <td></td>
                            <td></td>
                            
                            
                        </tr>
                        <tr>
                            <td><input id="timeView1" class="tableTxtEdit" value="07.50-08.30"></td>
                            <td><input id="subjectView1" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView2" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView3" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView4" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView5" class="tableTxtEdit" value=""></td>
                           
                            
                        </tr>
                        <tr>
                            <td><input id="timeView12" class="tableTxtEdit" value="08.30-09.10"></td>
                            <td><input id="subjectView12" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView22" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView32" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView42" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView52" class="tableTxtEdit" value=""></td>
                        </tr>
                        <tr>
                            <td><input id="timeView13" class="tableTxtEdit" value="09.10-09.50"></td>
                            <td><input id="subjectView13" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView23" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView33" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView43" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView53" class="tableTxtEdit" value=""></td>
                        </tr>
                        <tr>
                            <td><input id="timeView14" class="tableTxtEdit" value="09.50-10.30"></td>
                            <td><input id="subjectView14" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView24" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView34" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView44" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView54" class="tableTxtEdit" value=""></td>
                        </tr>
                        <tr>
                            <td><input id="time2interval" class="tableTxtEdit" value="10.30-10.50"></td>
                            <td></td>
                            <td></td>
                            <td style="font-size:25px;font-weight: bold;" class="tableTxtEdit">Interval</td>
                            <td></td>
                            <td></td>
                           
                        </tr>
                        <tr>
                            <td><input id="timeView15" class="tableTxtEdit" value="10.50-11.30"></td>
                            <td><input id="subjectView15" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView25" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView35" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView45" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView55" class="tableTxtEdit" value=""></td>
                           
                        </tr>
                        <tr>
                            <td><input id="timeView16" class="tableTxtEdit" value="11.30-12.10"></td>
                            <td><input id="subjectView16" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView26" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView36" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView46" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView56" class="tableTxtEdit" value=""></td>
                           
                        </tr>
                            
                        <tr>
                            <td><input id="timeView17" class="tableTxtEdit" value="12.10-12.50"></td>
                            <td><input id="subjectView17" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView27" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView37" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView47" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView57" class="tableTxtEdit" value=""></td>
                           
                        </tr>
                        <tr>
                            
                            <td><input id="timeView18" class="tableTxtEdit" value="12.50-13.30"></td>
                            <td><input id="subjectView18" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView28" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView38" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView48" class="tableTxtEdit" value=""></td>
                            <td><input id="subjectView58" class="tableTxtEdit" value=""></td>
                               
                        </tr>
                            
                        <tr><td></td>
                            <td></td>
                            <td></td>
                            <td><button id="search" type="button" class="btn btn-primary">Search</button></td>
                            <td><button id="add" type="button" class="btn btn-primary" onclick="datasubmission()">Add</button></td>
                            <td><button id="delete" type="button" class="btn btn-primary">Delete</button></td>
                          
                            </tr>
                            
                        </tbody>
                        
                    </table>
                        
                    </form>
                </div><!-- /.table-responsive -->
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
               
            </div><!-- /.box-footer -->
        </div><!-- /.box -->
    </section>
</section>
</div>
<?php include_once('../admincommon/footer.php'); ?>
    
    <script>

	$('input[name="optionsRadios"]').on('change', function(){
        if ($(this).val()=='class') {
            
            
            document.getElementById("classDev").style.display = 'block';
            document.getElementById("teacherDev").style.display = 'none';

        } else  {
        
            // $("#cont").text("show Overwritten");
            document.getElementById("classDev").style.display = 'none';
            document.getElementById("teacherDev").style.display = 'block';
        }
    });
    
</script>
    
<script>
    
    </script>
    
    </body>




