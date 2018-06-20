<?php $__env->startSection('title'); ?>
    Google Maps
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/gmaps/css/examples.css')); ?>"/>
    <link href="<?php echo e(asset('assets/css/pages/googlemaps_custom.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1>Google Maps</h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li><a href="#">Maps</a></li>
            <li class="active">Google Maps</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">Basic</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-top" class="gmap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">Terrain</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-terrain" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">Satellite</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-satellite" class="gmap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-warning">
                    <div class="panel-heading">
                        <h4 class="panel-title">Markers</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-markers" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4 class="panel-title">Styled Maps</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-styled" class="gmap"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Basic charts strats here-->
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">Map Types</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                    </div>
                    <div class="panel-body" style="padding:10px !important;">
                        <div id="gmap-types" class="gmap"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
    </section>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/pages/maps_api.js')); ?>"></script>
    <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?key=AIzaSyADWjiTRjsycXf3Lo0ahdc7dDxcQb475qw&libraries=places"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/gmaps/js/gmaps.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/pages/custommaps.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>