<?php $__env->startSection('title'); ?>
    <?php echo app('translator')->getFromJson('news/title.newslist'); ?>
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(asset('assets/vendors/datatables/css/dataTables.bootstrap.css')); ?>"/>
    <link href="<?php echo e(asset('assets/css/pages/tables.css')); ?>" rel="stylesheet" type="text/css"/>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h1><?php echo app('translator')->getFromJson('news/title.newslist'); ?></h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>"> <i class="livicon" data-name="home" data-size="16"
                                                             data-color="#000"></i>
                    <?php echo app('translator')->getFromJson('general.dashboard'); ?>
                </a>
            </li>
            <li><a href="#"><?php echo app('translator')->getFromJson('news/title.news'); ?></a></li>
            <li class="active"><?php echo app('translator')->getFromJson('news/title.newslist'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content paddingleft_right15">
        <div class="row">
            <div class="panel panel-primary ">
                <div class="panel-heading clearfix">
                    <h4 class="panel-title pull-left"><i class="livicon" data-name="users" data-size="16"
                                                         data-loop="true" data-c="#fff" data-hc="white"></i>
                        <?php echo app('translator')->getFromJson('news/title.newslist'); ?>
                    </h4>
                    <div class="pull-right">
                        <a href="<?php echo e(URL::to('admin/news/create')); ?>" class="btn btn-sm btn-default"><span
                                    class="glyphicon glyphicon-plus"></span> <?php echo app('translator')->getFromJson('button.create'); ?></a>
                    </div>
                </div>
                <br/>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table">
                            <thead>
                            <tr class="filters">
                                <th><?php echo app('translator')->getFromJson('news/table.id'); ?></th>
                                <th><?php echo app('translator')->getFromJson('news/table.title'); ?></th>
                                <th><?php echo app('translator')->getFromJson('news/table.created_at'); ?></th>
                                <th style="width: 70px"><?php echo app('translator')->getFromJson('news/table.actions'); ?></th>
                            </tr>
                            </thead>
                            <tbody>

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
        $(function () {
            var table = $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '<?php echo route('admin.news.data'); ?>',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title', name: 'title'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'actions', name: 'actions', orderable: false, searchable: false}
                ]
            });
            table.on('draw', function () {
                $('.livicon').each(function () {
                    $(this).updateLivicon();
                });
            });
        });

    </script>

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title"
         aria-hidden="true">
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