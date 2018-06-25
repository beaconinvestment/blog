<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('blog/title.edit'); ?>
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <link href="<?php echo e(asset('assets/vendors/summernote/summernote.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/vendors/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css')); ?>">
    <link href="<?php echo e(asset('assets/css/pages/blog.css')); ?>" rel="stylesheet" type="text/css">

    <!--end of page level css-->
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<section class="content-header">
    <!--section starts-->
    <h1><?php echo app('translator')->getFromJson('blog/title.edit'); ?></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>"> <i class="livicon" data-name="home" data-size="14" data-c="#000" data-loop="true"></i>
                <?php echo app('translator')->getFromJson('general.home'); ?>
            </a>
        </li>
        <li>
            <a href="#"><?php echo app('translator')->getFromJson('blog/title.blog'); ?></a>
        </li>
        <li class="active"><?php echo app('translator')->getFromJson('blog/title.edit'); ?></li>
    </ol>
</section>
<!--section ends-->
<section class="content paddingleft_right15">
    <!--main content-->
    <div class="row">
        <div class="the-box no-border">
           <?php echo Form::model($blog, ['url' => URL::to('admin/blog/' . $blog->id), 'method' => 'put', 'class' => 'bf', 'files'=> true]); ?>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group <?php echo e($errors->first('title', 'has-error')); ?>">
                            <?php echo Form::text('title', null, array('class' => 'form-control input-lg', 'placeholder'=>trans('blog/form.ph-title'))); ?>

                            <span class="help-block"><?php echo e($errors->first('title', ':message')); ?></span>
                        </div>
                        <div class='box-body pad <?php echo e($errors->first('content', 'has-error')); ?>'>
                            <?php echo Form::textarea('content',null, array('class' => 'textarea form-control','rows'=>'5','placeholder'=>trans('blog/form.ph-content'), 'style'=>'style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"')); ?>

                            <span class="help-block"><?php echo e($errors->first('content', ':message')); ?></span>
                        </div>
                    </div>
                    <!-- /.col-sm-8 -->
                    <div class="col-sm-4">
                        <div class="form-group <?php echo e($errors->first('blog_category_id', 'has-error')); ?>">
                            <label for="blog_category" class="">Blog Category</label>
                            <?php echo Form::select('blog_category_id',$blogcategory ,null, array('class' => 'form-control select2','id'=>'blog_category', 'placeholder'=>trans('blog/form.select-category'))); ?>

                            <span class="help-block"><?php echo e($errors->first('blog_category_id', ':message')); ?></span>
                        </div>
                        <div class="form-group">
                            <?php echo Form::text('tags', $blog->tagList, array('class' => 'form-control input-lg', 'data-role'=>"tagsinput", 'placeholder'=>trans('blog/form.tags'))); ?>

                        </div>
                        <label><?php echo app('translator')->getFromJson('blog/form.lb-featured-img'); ?></label>
                        <div class="form-group">

                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 200px; max-height: 200px;">
                                    <?php if(!empty($blog->image)): ?>

                                        <img src="<?php echo e(URL::to('uploads/blog/'.$blog->image)); ?>" class="img-responsive" alt="Image">
                                    <?php else: ?>
                                        <img src="<?php echo e(asset('assets/images/authors/no_avatar.jpg')); ?>" alt="..."
                                             class="img-responsive"/>
                                    <?php endif; ?>

                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">Change image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image" id="pic" accept="image/*" />
                                            </span>
                                    <span class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success blog_submit"><?php echo app('translator')->getFromJson('blog/form.update'); ?></button>
                            <a href="<?php echo e(URL::to('admin/blog')); ?>" class="btn btn-danger"><?php echo app('translator')->getFromJson('blog/form.cancel'); ?></a>
                        </div>
                    </div>
                    <!-- /.col-sm-4 --> </div>
                <!-- /.row -->
                <?php echo Form::close(); ?>

        </div>
    </div>
    <!--main content ends-->
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <script src="<?php echo e(asset('assets/vendors/summernote/summernote.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/select2/js/select2.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(asset('assets/vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js')); ?>" type="text/javascript" ></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/pages/add_newblog.js')); ?>" ></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>