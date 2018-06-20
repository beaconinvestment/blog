<?php $__env->startSection('title'); ?>
    Tasks
    ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8##
<?php $__env->stopSection(); ?>


<?php $__env->startSection('header_styles'); ?>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/pages/todolist.css')); ?>"/>
    <meta name="_token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/vendors/smalotDatepicker/css/bootstrap-datetimepicker.min.css')); ?>">
    
    <!-- end of page level css -->
    <style>
        .datetimepicker-dropdown-bottom-left:before{
            right:inherit;
        }
    </style>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <!--section starts-->
        <h1>Tasks</h1>
        <ol class="breadcrumb">
            <li>
                <a href="<?php echo e(route('admin.dashboard')); ?>">
                    <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                    Dashboard
                </a>
            </li>
            <li>Tasks</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <div class="row">
            <!-- To do list -->
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary todolist">
                    <div class="panel-heading border-light">
                        <h4 class="panel-title">
                            <i class="livicon" data-name="medal" data-size="18" data-color="white" data-hc="white"
                               data-l="true"></i>
                            To Do List
                        </h4>
                    </div>
                    <div class="panel-body nopadmar">
                        <div class="panel-body">
                            <div class="row list_of_items">
                            </div>
                        <div class="add_list adds">
                            <?php echo Form::open(['class'=>'form', 'id'=>'main_input_box']); ?>

                            <div class="form-group">
                                <?php echo Form::label('task_description', 'Task description: '); ?>

                                <?php echo Form::text('task_description', null, ['class' => 'form-control','id'=>'task_description', 'required' => 'required']); ?>

                            </div>
                            <div class="form-group">
                                <?php echo Form::label('task_deadline', 'Deadline: '); ?>

                                <?php echo Form::text('task_deadline', null, ['class' => 'form-control datepicker', 'id'=>'task_deadline', 'onkeydown'=>'return false', 'data-date-format'=> 'YYYY/MM/DD', 'required' => 'required','autocomplete'=>'off']); ?>

                            </div>
                            <button type="submit" class="btn btn-primary add_button">
                                Add Task
                            </button>
                            <?php echo Form::close(); ?>

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- content -->
    <div class="modal fade" id="editConfirmModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Alert</h4>
                </div>
                <div class="modal-body">
                    <p>You are already editing a row, you must save or cancel that row before edit/delete a new row</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/moment/js/moment.min.js')); ?>"></script>

    <script type="text/javascript" src="<?php echo e(asset('assets/vendors/smalotDatepicker/js/bootstrap-datetimepicker.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('assets/js/pages/tasklist.js')); ?>"></script>

    <script>
        var currentDate = new Date();
        $(".datepicker").datetimepicker({
            startDate: currentDate,
            format: "yyyy/mm/dd",
            autoclose: true,
            time:false,
            pickerPosition: "bottom-right",
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin/layouts/default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>