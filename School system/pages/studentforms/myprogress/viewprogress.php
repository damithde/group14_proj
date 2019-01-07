<?php include_once('../studentcommon/head.php'); ?>
<?php include_once('../studentcommon/header.php'); ?>
<?php include_once('../studentcommon/sidebar.php'); ?>
<?php include_once('../studentcommon/script.php'); ?>
<head>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase-storage.js"></script>
    <script src="../../../firebase models/db.js"></script>
    <script src="../../../firebase models/timeTable.js"></script>
    <script src="../../../firebase models/admin.js"></script>
    <script src="../../../firebase models/login.js"></script>
</head>
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
                                    <td>Maths</td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-warning">57</span></td>
                                </tr>
                                <tr>
                                    <td>Sinhala</td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-danger">10</span></td>
                                </tr>
                                <tr>
                                    <td>English</td>
                                    <td>2012/02/02</td>
                                    <td>Math</td>
                                    <td>4</td>
                                    <td><span class="label label-info">70</span></td>
                                </tr>
                                <tr>
                                    <td>Tamil</td>
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

<?php include_once('../studentcommon/footer.php'); ?>

<script>
    function createGraph(dataset){
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["2014", "2015", "2016", "2017", "2018", "2019"],
                datasets: [{
                    // label: '# of Votes',
                    //data: [65.56, 19.25, 37.25, 54.20, 62.56, 73.56],
                    data:dataset,
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
    }
</script>

<script>
    var School ="abc";
    getreports("11","6","sinhala","11","1");
    function getreports(Regno,Class,Grade,Year,Term) {
        var output = {};
        db.collection("reports").where("school", "==",School ).where("regno", "==", Regno).where("class", "==", Class).where("grade", "==", Grade).where("year", "==", Year).where("termno", "==", Term)
            .get()
            .then(function (querySnapshot) {
                querySnapshot.forEach(function (doc) {
                    output = doc.data();
                    var dataset = [output.sub1,output.sub2,output.sub3,
                                    output.sub4,output.sub5,output.sub6,
                                    output.sub7,output.sub8,output.sub9];
                    createGraph(dataset);

                    //console.log(doc.id, " => ", doc.data());

                });
            })
            .catch(function (error) {
                console.log("Error getting documents: ", error);
            });
        return output;

    }
</script>