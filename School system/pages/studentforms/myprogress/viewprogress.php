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
<script src="../../../firebase models/student.js"></script>
<script src="../../../firebase models/admin.js"></script>
<script src="../../../firebase models/exam.js"></script>
<script src="../../../firebase models/login.js"></script>
<script src="../../../firebase models/fileupload.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
</head>



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
                            <table id ="tableLoad" class="table no-margin">
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
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
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
                    <input type="hidden" id="stuschool">
                         <!-- <input type="hidden" id="sturegno"> -->

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
                    label: '# AVG of Years',
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
    getschool("stuschool");
    //getstudent("sturegno");

    var school=document.getElementById("stuschool").value;
    console.log("asasasa",school)
    var school ="abc";
    getreports("11","6","sinhala","11","1");

    function getreports(Regno,Class,Grade,Year,Term) {
        var school=document.getElementById("stuschool").value;
        console.log("asasasa",school)

        var output = {};
        db.collection("reports").where("school", "==",school ).where("regno", "==", Regno).where("class", "==", Class).where("grade", "==", Grade).where("year", "==", Year).where("termno", "==", Term)
            .get()
            .then(function (querySnapshot) {
                querySnapshot.forEach(function (doc) {
                    output = doc.data();
                    var dataset = [output.sub1,output.sub2,output.sub3,
                                    output.sub4,output.sub5,output.sub6,
                                    output.sub7,output.sub8,output.sub9];

                    // var yesrs = [];
                    createGraph(dataset);

                    //console.log(doc.id, " => ", doc.data());

                });
            })
            .catch(function (error) {
                console.log("Error getting documents: ", error);
            });
        return output;

    }



    function loadresults(){
        var school=document.getElementById("stuschool").value;
        var examid = document.getElementById("examIdTxt").value;
        var output;
        var i=0;
        db.collection("exam").where("school","==",school).where("regno","==",regno)
        .get()
        .then(function(querySnapshot) {
            querySnapshot.forEach(function(doc) {
                output=doc.data();
                var regno =output.result.regno;
                var result =output.result.results;
                let a = 0;
                regno.forEach(function(entry){
                    getstudentsfromreg(entry)
                    function getstudentsfromreg(reg){
                        var output;
                        db.collection("students").where("school","==",school).where("regno","==",reg)
                        .get()
                        .then(function(querySnapshot) {
                            querySnapshot.forEach(function(doc) {
                                output=doc.data();
                                addrow(entry,output.Fname,result[a]);
                                a++;
                            //console.log(doc.id, " => ", doc.data());
                            });
                        })
                        .catch(function(error) {
                            console.log("Error getting documents: ", error);
                        });
                    }


                    // addrow(entry,result,result[0]);
                })
                
                // this.i=parseInt(i)+1;
                
            //console.log(doc.id, " => ", doc.data());
            });
        })
        .catch(function(error) {
            console.log("Error getting documents: ", error);
        });
    }


    function addrow(a,b,c,d,e) {
        var table = document.getElementById("tableLoad");
        var row = table.insertRow(-1);
        var subject = row.insertCell(0);
        var term1 = row.insertCell(1);
        var term2 = row.insertCell(2);
        var term3 = row.insertCell(1);
        var avg = row.insertCell(2);
        subject.innerHTML = a;
        term1.innerHTML = b;
        term2.innerHTML = c;
        term3.innerHTML = d;
        avg.innerHTML = e;
    }


    function getAVG(mark1,mark2,mark3){
        get r1=parseInt(mark1);
        get r2=parseInt(mark1);
        get r3=parseInt(mark1);
        avg:(t1+r2+r3)/3;
        //getAVG.avg
    }
</script>