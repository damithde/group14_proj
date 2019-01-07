<?php include_once('../studentcommon/head.php'); ?>
<?php include_once('../studentcommon/header.php'); ?>
<?php include_once('../studentcommon/sidebar.php'); ?>
<?php include_once('../studentcommon/script.php'); ?>

<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>

<body>
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-6">
            

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Term Test </h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table no-margin">
                                <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Term 1</th>
                                    <th>Term 2</th>
                                    <th>Term 3</th>
                                    <th>AVG Marks</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-warning">57</span></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-danger">10</span></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-info">70</span></td>
                                </tr>
                                <tr>
                                    <td><a href="pages/examples/invoice.html">Math in class</a></td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-success">85</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div><!-- /.table-responsive -->
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <!-- <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">View All Exams</a> -->
                    </div><!-- /.box-footer -->
                </div><!-- /.box -->
                

                </div>

                <div class="col-md-6 ">
                    <div>
                        
                    </div>

                    <div>
                         <!-- LINE CHART -->
                        



                        <div class="box box-info">
                            <div class="box-header with-border">
                            <h3 class="box-title">Progress of AVG mark</h3>
                            </div>
                            <div class="box-body chart-responsive">
                            <canvas id="myChart" width="400" height="400"></canvas>
                            </div>
                        <!-- /.box -->
                        </div>





                    </div>

                    <div>
                        
                    </div>


                </div>
        </section>
</section>


</body>


<script>


    var studentfNameLbl
    var studentmNameLbl
    var studentlNameLbl
    var studentiNameLbl
    var studentGenderLbl
    var studentBdyLbl
    var studentReligionLbl
    var studentEmailLbl
    var studentAdtLbl
    var studentMediumLbl
    var studentClassLbl
    var studentSectionLbl
    var studentAddressLbl
    var studentPhoneLbl
    var parentNameLbl
    var parentOccupationLbl
    var parentEmailLbl
    var parentPhoneLbl

    document.getElementById('studentfNameLbl').innerHTML = studentfNameLbl;
    document.getElementById('studentmNameLbl').innerHTML = studentmNameLbl;
    document.getElementById('studentlNameLbl').innerHTML = studentlNameLbl;
    document.getElementById('studentiNameLbl').innerHTML = studentiNameLbl;
    document.getElementById('studentGenderLbl').innerHTML = studentGenderLbl;
    document.getElementById('studentBdyLbl').innerHTML = studentBdyLbl;
    document.getElementById('studentReligionLbl').innerHTML = studentReligionLbl;
    document.getElementById('studentEmailLbl').innerHTML = studentEmailLbl;
    document.getElementById('studentAdtLbl').innerHTML = studentAdtLbl;
    document.getElementById('studentMediumLbl').innerHTML = studentMediumLbl;
    document.getElementById('studentClassLbl').innerHTML = studentClassLbl;
    document.getElementById('studentSectionLbl').innerHTML = studentSectionLbl;
    document.getElementById('studentAddressLbl').innerHTML = studentAddressLbl;
    document.getElementById('studentPhoneLbl').innerHTML = studentPhoneLbl;
    document.getElementById('parentNameLbl').innerHTML = parentNameLbl;
    document.getElementById('parentOccupationLbl').innerHTML = parentOccupationLbl;
    document.getElementById('parentEmailLbl').innerHTML = parentEmailLbl;
    document.getElementById('parentPhoneLbl').innerHTML = parentPhoneLbl;
    
</script>

<?php include_once('../studentcommon/footer.php'); ?>

<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["2014", "2015", "2016", "2017", "2018", "2019"],
        datasets: [{
            // label: '# of Votes',
            data: [65.56, 19.25, 37.25, 54.20, 62.56, 73.56],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>