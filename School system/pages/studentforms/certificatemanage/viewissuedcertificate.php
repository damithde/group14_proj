<?php include_once('certificatehead.php'); ?>
<?php include_once('certificateheader.php'); ?>
<?php include_once('certificatesidebar.php'); ?>
<?php include_once('certificatescript.php'); ?>

<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
<!--            left side panel-->
            <div class="col-md-12">
<!--                certificate details-->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">certificate Details</h3>
                    </div><!-- /.box-header -->
                    <br>
                    <div class="row">
                        <div class="col-md-8">
                            <!-- search form -->
                            <form action="#" method="get" class="form-group">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                                </div>
                            </form>
                            <!-- /.search form -->
                        </div>
                    </div>
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                        <!--Lable field-->
                            <div class="row">
                                
                            <table class="table no-margin">
                            <thead>
                            <tr>
                                <th>Student Id</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Date</th>
                                <th>Details</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1102</td>
                                <td>Kamal Perera</td>
                                <td>Certificate</td>
                                <td>2012-02-15</td>
                                <td><span class="label label-info"><a href="pages/examples/invoice.html">View</a></span></td>
                            </tr>
                            <tr>
                                <td>1120</td>
                                <td>Manjitha Teshara</td>
                                <td>Certificate</td>
                                <td>2012-02-15</td>
                                <td><span class="label label-info"><a href="pages/examples/invoice.html">View</a></span></td>
                            </tr>
                            <tr>
                                <td>2130</td>
                                <td>Ruwan Gunawardana</td>
                                <td>Certificate</td>
                                <td>2012-02-15</td>
                                <td><span class="label label-info"><a href="pages/examples/invoice.html">View</a></span></td>
                            </tr>
                            <tr>
                                <td>4562</td>
                                <td>Rukmal Perera</td>
                                <td>Certificate</td>
                                <td>2012-02-15</td>
                                <td><span class="label label-info"><a href="pages/examples/invoice.html">View</a></span></td>
                            </tr>
                            </tbody>
                        </table>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                        </div>
                    </form>
                </div><!-- /.box -->
            </div>
    </section>
</section>

