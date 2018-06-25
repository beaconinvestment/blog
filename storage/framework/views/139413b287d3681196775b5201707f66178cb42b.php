<?php $__env->startSection('title'); ?>
Blog
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/tabbular.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/blog.css')); ?>">
    <!--end of page level css-->
<?php $__env->stopSection(); ?>


<?php $__env->startSection('top'); ?>
    <div class="breadcum">
        <div class="container">
            <ol class="breadcrumb">
                <li>
                    <a href="<?php echo e(route('home')); ?>"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="<?php echo e(route('blog')); ?>">Blog</a>
                </li>
            </ol>
            <div class="pull-right">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>
                
                <a href="<?php echo e(URL::to('admin/blog/create')); ?>">Blog</a>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <!-- Container Section Strat -->
    <div class="container">
        <h2>Blog</h2>
        <div class="row">
            <div class="content">
                <div class="col-md-8">
                    <?php $__empty_1 = true; $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <!-- BEGIN FEATURED POST -->
                    <div class="featured-post-wide thumbnail">
                        <?php if($blog->image): ?>
                        <img src="<?php echo e(URL::to('/uploads/blog/'.$blog->image)); ?>" class="img-responsive" alt="Image">
                        <?php endif; ?>
                        <div class="featured-text relative-left">
                            <h3 class="primary"><a href="<?php echo e(URL::to('blogitem/'.$blog->slug)); ?>"><?php echo e($blog->title); ?></a></h3>
                            <p>
                                <?php echo $blog->content; ?>

                            </p>
                            <p>
                                <strong>Tags: </strong>
                                <?php $__empty_2 = true; $__currentLoopData = $blog->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                    <a href="<?php echo e(URL::to('blog/'.mb_strtolower($tag).'/tag')); ?>"><?php echo e($tag); ?></a>,
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    No Tags
                                <?php endif; ?>
                            </p>
                            <p class="additional-post-wrap">
                                <span class="additional-post">
                                    <i class="livicon" data-name="user" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i> by&nbsp;<a href="#"><?php echo e($blog->author->first_name . ' ' . $blog->author->last_name); ?></a>
                                </span>
                                <span class="additional-post">
                                    <i class="livicon" data-name="clock" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i><a href="#"> <?php echo e($blog->created_at->diffForHumans()); ?></a>
                                </span>
                                <span class="additional-post">
                                    <i class="livicon" data-name="comment" data-size="13" data-loop="true" data-c="#5bc0de" data-hc="#5bc0de"></i><a href="#"> <?php echo e($blog->comments->count()); ?> comments</a>
                                </span>
                            </p>
                            <hr>
                            <p class="text-right">
                                <a href="<?php echo e(URL::to('blogitem/'.$blog->slug)); ?>" class="btn btn-primary text-white">Read more</a>
                            </p>
                        </div>
                        <!-- /.featured-text -->
                    </div>
                    <!-- /.featured-post-wide -->
                    <!-- END FEATURED POST -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <h3>No Posts Exists!</h3>
                    <?php endif; ?>
                    <ul class="pager">
                        <?php echo $blogs->render(); ?>

                    </ul>
                </div>
                <!-- /.col-md-8 -->
                <div class="col-md-4">
                    <!-- END POPULAR POST -->
                    <!-- Tabbable-Panel Start -->
                    <h3 class="martop">Tab Widget</h3>
                    <div class="tabbable-panel">
                        <!-- Tabbablw-line Start -->
                        <div class="tabbable-line">
                            <!-- Nav Nav-tabs Start -->
                            <ul class="nav nav-tabs ">
                                <li class="active">
                                    <a href="#tab_default_1" data-toggle="tab">
                                        Recent Posts </a>
                                </li>
                                
                                    
                                        
                                
                            </ul>
                            <!-- //Nav Nav-tabs End -->
                            <!-- Tab-content Start -->
                            <div class="tab-content">
                                <?php $__currentLoopData = $recents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="tab-pane active" id="tab_default_1">
                                    <div class="media">
                                        <div class="media-left media-middle tab col-sm-12 col-xs-12">

                                            <a href="<?php echo e(URL::to('blogitem/'.$recent->slug)); ?>">

                                                <?php if($blog->image): ?>
                                                    <img src="<?php echo e(URL::to('/uploads/blog/'.$recent->image)); ?>" class="img-responsive" alt="Image">
                                                <?php endif; ?>
                                                    <h4 class="text-primary"><?php echo $recent->title; ?></h4>
                                                    <p>
                                                    <?php echo $recent->content; ?>

                                                    </p>
                                                
                                            </a>

                                        </div>
                                    </div>
                                    
                                    
                                        
                                            
                                        
                                    
                                    
                                    
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                                    
                                        
                                            
                                                
                                            
                                        
                                    
                                    
                                    
                                        
                                    
                                    
                                    
                                    
                                        
                                            
                                                
                                            
                                        
                                    
                                    
                                    
                                        
                                    
                                    
                                    
                                

                            </div>
                            <!-- //Tab-content End -->
                        </div>
                        <!-- //Tabbablw-line End -->
                    </div>
                    <!-- Tabbable_panel End -->
                    
                        
                        
                            
                                
                                    
                                
                                
                                    
                                                        
                                                    
                                    
                                        
                                    
                                    
                                        
                                    
                                
                            
                            
                            
                                
                                    
                                
                                
                                    
                                                        
                                                    
                                    
                                        
                                    
                                    
                                        
                                    
                                
                            
                            
                            
                                
                                    
                                
                                
                                    
                                                        
                                                    
                                    
                                        
                                    
                                    
                                        
                                    
                                
                            
                        
                    
                    <div class="thumbnail">
                        <h3>Tags</h3>
                        <div class="primary text-center">
                            <?php $__empty_1 = true; $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <a href="<?php echo e(URL::to('blog/'.$tag.'/tag')); ?>"><?php echo e($tag); ?></a>,
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                No Tags
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-4 -->
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>