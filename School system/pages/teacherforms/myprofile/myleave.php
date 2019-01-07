<?php include_once('../teachercommon/head.php'); ?>
<?php include_once('../teachercommon/header.php'); ?>
<?php include_once('../teachercommon/sidebar.php'); ?>
<?php include_once('../teachercommon/script.php'); ?>



<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
    <script src="../../../firebase models/db.js"></script>
    <script src="../../../firebase models/leave.js"></script>
    <script src="../../../firebase models/admin.js"></script>
    <script src="../../../firebase models/login.js"></script>


<section class="content-wrapper">
    <section class="content-header">
        <section class="content-header">
            <div class="row">
                <div class="col-md-9">

                            <div >
                                <div class="row">
                                    <!-- ./col -->



                                    <!--            left side panel-->

                                    <!--                student details-->


                                    <div class="box-header with-border">
                                    </div>
                                    <!--                guardian details-->
                                    <div class="box box-primary">
                                        <div class="box-header  with-border">
                                            <h3 class="box-title">Application For Leave </h3>
                                        </div><!-- /.box-header -->
                                        <!-- form start -->

                                        <form role="form" >


                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name:</label>
                                                    <input type="text" class="form-control" id="nameTxt" placeholder="Enter Name">
                                                </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">School:</label>

                                                <input type="text" class="form-control" id="schoolTxt"  disabled>
                                            </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Teacher ID:</label>
                                                    <input type="text" class="form-control" id="TidTxt" placeholder="Enter Teacher ID">
                                                </div>


                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Number Of Leave days:</label>
                                                    <input type="text" class="form-control" id="ldayTxt" placeholder="Enter No Of days">
                                                </div>
                                                <div class="form-group">
                                                    <label>Date Of Commencing leave:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="startdate"/>
                                                    </div><!-- /.input group -->
                                                </div>

                                                <div class="form-group">
                                                    <label>Date Of Assuming duties:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control pull-right" id="enddate"/>
                                                    </div><!-- /.input group -->
                                                </div>
                                                <div class="form-group">

                                                    <div id="typeTxt" class="form-group">
                                                        <label  >Leave Type:</label>
                                                        <select class="form-control">
                                                            <option value="1">Sick</option>
                                                            <option value="2">Casual</option>
                                                            <option value="3">Other</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Reasons For Leave:</label>
                                                    <input type="text" class="form-control" id="reasonTxt" placeholder="Enter Reason">
                                                </div>
                                                <div class="box-footer">

                                                    <button type="button" class="btn btn-primary" onclick="datasubmissionleave()" >Send</button>
                                                </div>

                                        </form>
                                    </div><!-- /.box -->
                                </div>
                            </div>
                            <div>
                            </div>



        </section>
    </section>
    <script>
        getschool("schoolTxt");

        function datasubmissionleave(){



            var TeName = document.getElementById("nameTxt").value;
            var schools=document.getElementById("schoolTxt").value;

            var TeId = document.getElementById("TidTxt").value;
            var TeLdays = document.getElementById('ldayTxt').value;
            var Testart = document.getElementById('startdate').value;
            var Teend = document.getElementById('enddate').value;

            var Tetype = document.getElementById("typeTxt").value;
            var Tereason = document.getElementById("reasonTxt").value;


            var leave= [TeName,schools,TeId,TeLdays,Testart,Teend,Tetype,Tereason];
            addleave(leave);

        }





    </script>
<?php include_once('../teachercommon/footer.php'); ?>