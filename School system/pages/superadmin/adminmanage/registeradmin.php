<?php include_once('../admincommon/head.php'); ?>
<?php include_once('../admincommon/header.php'); ?>
<?php include_once('../admincommon/sidebar.php'); ?>
<?php include_once('../admincommon/script.php'); ?>
<head>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
<script src="../../../firebase models/db.js"></script>
<script src="../../../firebase models/login.js"></script>
</head>
<section class="content-wrapper">
    <section class="content-header">
    <div class="row">
        <div class="col-md-6">
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
                                <label  >School:</label>
                                <select id="schoolist">

                                </select>
                            </div>
                            <div class="form-group">
                                <label  >Admin Name:</label>
                                <input type="input" class="form-control" id="adminNameTxt" placeholder="Enter Admin Name">
                            </div>
                            <div class="form-group">
                                <label  >Designation :</label>
                                <input type="input" class="form-control" id="adminDesignationTxt" placeholder="Enter Admin Designation">
                            </div>
                            <div class="form-group">
                                <label  >Email:</label>
                                <input type="email" class="form-control" id="adminEmailTxt" placeholder="Enter Admin Email">
                            </div>
                            <div class="form-group">
                                <label  >Password :</label>
                                <input type="password" class="form-control" id="adminPasswordTxt" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <div class="col-md-8"></div>
                                <button style="width:170px" type="submit" class="btn btn-primary">Create Admin</button>
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

function createaccount(params) {
    var adminNameTxt = document.getElementById("adminNameTxt").value;
    var adminDesignationTxt = document.getElementById("adminDesignationTxt").value;
    var adminEmailTxt = document.getElementById("adminEmailTxt").value;
    var adminPasswordTxt = document.getElementById("adminPasswordTxt").value;
    createuser(adminEmailTxt,adminPasswordTxt,"admin","null",school);
}
 
    db.collection("schools")
    .get()
    .then(function(querySnapshot) {
        querySnapshot.forEach(function(doc) {
            var school=doc.data().schoolid;
            
                var sel = document.getElementById("schoolist");
                var opt = document.createElement("option");
                opt.value = school;
                opt.text = school;
                sel.add(opt);
                    
    })
})

</script>

<?php include_once('../admincommon/footer.php'); ?>