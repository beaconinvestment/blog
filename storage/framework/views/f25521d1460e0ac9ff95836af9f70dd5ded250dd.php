<?php $__env->startSection('title'); ?>
Advanced Maps
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>    
    
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/gmaps/css/examples.css')); ?>" />
    <link href="<?php echo e(asset('assets/css/pages/advancedmaps_custom.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<section class="content-header">
                <h1>Advanced Maps</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li><a href="#"> Maps</a></li>
                    <li class="active">Advanced Maps</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="livicon" data-name="search" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Search Place</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <form method="post" id="geocoding_form">
                                    <div class="input">
                                        <input type="text" id="address" name="address" size="28" />
                                        <input type="submit" value="Search" class="search_margin" />
                                    </div>
                                </form>
                                <br />
                                <div id="map1" class="gmap responsive_map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="livicon" data-name="search" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i> Search Routes</h4>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                                <div id="map" class="large responsive_map"></div>
                                <div class="row">
                                    <div class="col-md-12 mt-15">
                                    <a href="#" class="btn btns btn-responsive btn-small btn-primary btn_margin" id="get_route">Get route</a>
                                    <a href="#" class="btn btns btn-responsive btn-small btn-primary btn_margin" id="back">&laquo; Back</a>
                                    <a href="#" class="btn btns btn-responsive btn-small btn-primary btn_margin" id="forward">Forward &raquo;</a>
                                        </div>
                                </div>
                                <div class="row">
                                    <ul id="steps"></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </section>
        
    <?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?key=AIzaSyADWjiTRjsycXf3Lo0ahdc7dDxcQb475qw&libraries=places"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/gmaps/js/gmaps.min.js')); ?>" ></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/pages/adv_maps.js')); ?>" ></script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>