<?php include_once('dashboardhead.php'); ?>
<?php include_once('dashboardheader.php'); ?>
<?php include_once('dashboardsidebar.php'); ?>
<?php //include_once('right_panel.php'); ?>

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


<?php include_once('dashboardfooter.php'); ?>
<?php include_once('dashboardscript.php'); ?>

