<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('blog/title.bloglist'); ?>
##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/datatables/css/dataTables.bootstrap.css')); ?>" />
    <link href="<?php echo e(asset('assets/css/pages/tables.css')); ?>" rel="stylesheet" type="text/css" />
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<section class="content-header">
    <h1><?php echo app('translator')->getFromJson('blog/title.bloglist'); ?></h1>
    <ol class="breadcrumb">
        <li>
            <a href="<?php echo e(route('admin.dashboard')); ?>"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                <?php echo app('translator')->getFromJson('general.dashboard'); ?>
            </a>
        </li>
        <li><a href="#"><?php echo app('translator')->getFromJson('blog/title.blog'); ?></a></li>
        <li class="active"><?php echo app('translator')->getFromJson('blog/title.bloglist'); ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content paddingleft_right15">
    <div class="row">
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h4 class="panel-title pull-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    <?php echo app('translator')->getFromJson('blog/title.bloglist'); ?>
                </h4>
                <div class="pull-right">
                    <a href="<?php echo e(URL::to('admin/blog/create')); ?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-plus"></span> <?php echo app('translator')->getFromJson('button.create'); ?></a>
                </div>
            </div>
            <br />
            <div class="panel-body">
                <div class="table-responsive">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr class="filters">
                            <th><?php echo app('translator')->getFromJson('blog/table.id'); ?></th>
                            <th><?php echo app('translator')->getFromJson('blog/table.title'); ?></th>
                            <th><?php echo app('translator')->getFromJson('blog/table.comments'); ?></th>
                            <th><?php echo app('translator')->getFromJson('blog/table.created_at'); ?></th>
                            <th><?php echo app('translator')->getFromJson('blog/table.actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($blogs)): ?>
                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($blog->id); ?></td>
                                <td><?php echo e($blog->title); ?></td>
                                <td><?php echo e($blog->comments->count()); ?></td>
                                <td><?php echo e($blog->created_at->diffForHumans()); ?></td>
                                <td>
                                    <a href="<?php echo e(URL::to('admin/blog/' . $blog->id )); ?>"><i class="livicon"
                                                                                                     data-name="info"
                                                                                                     data-size="18"
                                                                                                     data-loop="true"
                                                                                                     data-c="#428BCA"
                                                                                                     data-hc="#428BCA"
                                                                                                     title="<?php echo app('translator')->getFromJson('blog/table.view-blog-comment'); ?>"></i></a>
                                    <a href="<?php echo e(URL::to('admin/blog/' . $blog->id . '/edit' )); ?>"><i class="livicon"
                                                                                                     data-name="edit"
                                                                                                     data-size="18"
                                                                                                     data-loop="true"
                                                                                                     data-c="#428BCA"
                                                                                                     data-hc="#428BCA"
                                                                                                     title="<?php echo app('translator')->getFromJson('blog/table.update-blog'); ?>"></i></a>
                                    <a href="<?php echo e(route('admin.blog.confirm-delete', $blog->id)); ?>" data-toggle="modal"
                                       data-target="#delete_confirm"><i class="livicon" data-name="remove-alt"
                                                                        data-size="18" data-loop="true" data-c="#f56954"
                                                                        data-hc="#f56954"
                                                                        title="<?php echo app('translator')->getFromJson('blog/table.delete-blog'); ?>"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>    <!-- row-->
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/jquery.dataTables.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/datatables/js/dataTables.bootstrap.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>

<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content"></div>
  </div>
</div>
<script>
$(function () {
	$('body').on('hidden.bs.modal', '.modal', function () {
		$(this).removeData('bs.modal');
	});
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>