<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('blogcategory/title.create'); ?> :: ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1>
        <?php echo app('translator')->getFromJson('blogcategory/title.create'); ?>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i> Dashboard
            </a>
        </li>
        <li><?php echo app('translator')->getFromJson('blogcategory/title.blogcategories'); ?></li>
        <li class="active">
            <?php echo app('translator')->getFromJson('blogcategory/title.create'); ?>
        </li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary ">
                <div class="panel-heading">
                    <h4 class="panel-title"> <i class="livicon" data-name="users-add" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        <?php echo app('translator')->getFromJson('blogcategory/title.create'); ?>
                    </h4>
                </div>
                <div class="panel-body">
                    <?php echo Form::open(array('url' => URL::to('admin/blogcategory'), 'method' => 'post', 'class' => 'form-horizontal', 'files'=> true)); ?>

                    <div class="form-group <?php echo e($errors->first('title', 'has-error')); ?>">
                        <label for="title" class="col-sm-2 control-label">
                            <?php echo app('translator')->getFromJson('blogcategory/form.name'); ?>
                        </label>
                        <div class="col-sm-5">
                            <?php echo Form::text('title', null, array('class' => 'form-control', 'placeholder'=>trans('blogcategory/form.categoryname'))); ?>

                        </div>
                        <div class="col-sm-4">
                            <?php echo $errors->first('title', '<span class="help-block">:message</span> '); ?>

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-4">
                            <a class="btn btn-danger" href="<?php echo e(URL::to('admin/blogcategory/')); ?>">
                                <?php echo app('translator')->getFromJson('button.cancel'); ?>
                            </a>
                            <button type="submit" class="btn btn-success">
                                <?php echo app('translator')->getFromJson('button.save'); ?>
                            </button>
                        </div>
                    </div>
                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- row-->
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>