<?php include_once('../studentcommon/head.php'); ?>
<?php include_once('../studentcommon/header.php'); ?>
<?php include_once('../studentcommon/sidebar.php'); ?>
<?php include_once('../studentcommon/script.php'); ?>

<body class="skin-blue">
<div class="wrapper">
<section class="content-wrapper">
    <section class="content-header">
        <div class="row">
            <div class="col-md-9">
                <div>
                    <?php include_once('dashboardnotificationPanel.php'); ?>
                </div>

            </div>
            <div class="col-md-3">
                <!-- Calendar -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <?php include_once('dashboardcalendar.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
</div>
</body>


<?php include_once('../studentcommon/footer.php'); ?>


