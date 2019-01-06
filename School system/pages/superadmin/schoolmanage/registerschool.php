<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
<head></head>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/superadmin.js"></script>
<section class="content-wrapper">
    <section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">School Details</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                            <label  >School Name:</label>
                            <input type="input" class="form-control" id="schoolNameTxt" placeholder="Enter School Name">
                        </div>
                        <div class="form-group">
                            <label  >School ID:</label>
                            <input type="input" class="form-control" id="schoolIdTxt" placeholder="Enter School Name">
                        </div>
                        <div class="form-group">
                            <label  >Location :</label>
                            <input type="input" class="form-control" id="schoolLocationTxt" placeholder="Enter School Location">
                        </div>
                        <div class="form-group">
                            <label  >School Principal:</label>
                            <input type="input" class="form-control" id="schoolprincipal" placeholder="Enter School Name">
                        </div>
                        <div class="form-group">
                                <label  >Contact :</label>
                                <input type="input" class="form-control" id="schoolcontact" placeholder="Enter School Location">
                            </div>
                        <div class="form-group">
                            <div class="col-md-8"></div>
                            <button style="width:170px" type="button" onclick="addschool() " class="btn btn-primary">Register</button>
                        </div>
                            </div>
                        </div>
                        
<hr>
                        <div class="row">
                                <div class="col-md-10">
                                <div class="form-group">
                                <h4 class="box-title">School Details</h4>
                                    <table id="studentResultsTable" class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <th>School Id</th>
                                                <th>School Name</th>
                                                <th>Location</th>
                                                <th>Principal</th>
                                                <th>Contact</th>
                                            </tr>
                                            <tr id = "datarow">
                                                <td id = "schoolId">
                                                    -
                                                </td>
                                                <td id = "schoolName">
                                                    -
                                                </td>
                                                <td id = "location">
                                                    -
                                                </td>
                                                <td id = "principal">
                                                    -
                                                </td>
                                                <td id = "contact">
                                                    -
                                                </td>
                                                
                                            </tr>
                                            
                                        </tbody>
                                    </table>
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
    <div>
    </div>
    </section>
</section>

<script>

function addschool() {
    
    var school = document.getElementById("schoolNameTxt").value;
    var sid = document.getElementById("schoolIdTxt").value;
    var schoolprincipal = document.getElementById("schoolprincipal").value;
    var schoollocation = document.getElementById("schoolLocationTxt").value;
    var contact = document.getElementById("schoolcontact").value;
    var school=[sid,school,schoollocation,contact,schoolprincipal];
    createschool(school);


}


</script>


<script>
    function addrow() {
        var table = document.getElementById("studentResultsTable");
        var row = table.insertRow(-1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        cell1.innerHTML = '<td>-</td>';
        cell2.innerHTML = '<td>-</td>';
        cell3.innerHTML = '<td>-</td>';
        cell4.innerHTML = '<td>-</td>';
        cell5.innerHTML = '<td>-</td>';
    }
</script>

<?php include_once('../admincommon/footer.php'); ?>