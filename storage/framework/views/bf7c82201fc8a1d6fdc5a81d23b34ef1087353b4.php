<?php $__env->startSection('title'); ?>
    Logger View
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header_styles'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/pages/log_viewer.css')); ?>">
<link href="<?php echo e(asset('assets/vendors/sweetalert/css/sweetalert.css')); ?>" rel="stylesheet"/>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>Logger Views</h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    <?php echo app('translator')->getFromJson('general.dashboard'); ?>
                </a>
            </li>
            <li class="active">Logger view</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
                <div class="col-xs-12">

                <div class="panel panel-primary">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title pull-left">
                            <i class="livicon" data-name="edit" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Logger View
                        </h4>
                        <div class="pull-right">
                            <a href="<?php echo e(URL::to('admin/log_viewers/logs')); ?>" class="btn btn-sm btn-default m-r-5"><span class="glyphicon glyphicon-plus"></span> Logs</a>
                            <i class="glyphicon glyphicon-chevron-up clickable"></i>
                            <i class="glyphicon glyphicon glyphicon-remove removepanel clickable"></i>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php if(($percents)): ?>
                                <div class="col-lg-3 col-sm-5">
                                    <canvas id="stats-doughnut-chart" height="300" width="300px"></canvas>
                                </div>
                                <div class="col-lg-9  col-sm-7">
                                    <section class="box-body">
                                        <div class="row">
                                            <?php $__currentLoopData = $percents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-lg-4 col-md-12  ">
                                                    <div class="info-box level level-<?php echo e($level); ?> <?php echo e($item['count'] === 0 ? 'level-empty' : ''); ?>">
                                <span class="info-box-icon">
                                    <?php echo log_styler()->icon($level); ?>

                                </span>

                                                        <div class="info-box-content">
                                                            <span class="info-box-text"><?php echo e($item['name']); ?></span>
                                                            <span class="info-box-number">
                                        <?php echo e($item['count']); ?> entries - <?php echo $item['percent']; ?> %
                                    </span>
                                                            <div class="progress">
                                                                <div class="progress-bar" style="width: <?php echo e($item['percent']); ?>%"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </section>
                                </div>
                                <?php else: ?>
                                <h4>Currently there is no logs </h4>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                </div>
        </div>
        <!--main content ends-->
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/sweetalert/js/sweetalert.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/sweetalert/js/sweetalert-dev.js')); ?>"></script>
    <script>
        Chart.defaults.global.responsive      = true;
        Chart.defaults.global.scaleFontFamily = "'Source Sans Pro'";
        Chart.defaults.global.animationEasing = "easeOutQuart";
    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '<?php echo e(url('admin/log_viewers/logcheck')); ?>',
                type: 'GET',

                success: function (result) {
                    console.log(result);
                    if (result.status == false) {
                        swal({
                            title: 'error',
                            text: result.message,
                            type: "error",
                            closeOnConfirm: false,
                            showLoaderOnConfirm: true
                        });
                    }
                }
            });
        });
        $(function() {
            new Chart($('canvas#stats-doughnut-chart'), {
                type: 'doughnut',
                data: <?php echo $chartData; ?>,
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }
            });
        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>