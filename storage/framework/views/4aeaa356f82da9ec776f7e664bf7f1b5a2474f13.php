<ul id="menu" class="page-sidebar-menu">

    <li <?php echo (Request::is('admin') ? 'class="active"' : ''); ?>>
        <a href="<?php echo e(route('admin.dashboard')); ?>">
            <i class="livicon" data-name="dashboard" data-size="18" data-c="#418BCA" data-hc="#418BCA"
               data-loop="true"></i>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li <?php echo ((Request::is('admin/blogcategory') || Request::is('admin/blogcategory/create') || Request::is('admin/blog') ||  Request::is('admin/blog/create')) || Request::is('admin/blog/*') || Request::is('admin/blogcategory/*') ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18"
               data-loop="true"></i>
            <span class="title">Blog</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/blogcategory') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/blogcategory')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Blog Category List
                </a>
            </li>
            <li <?php echo (Request::is('admin/blog') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/blog')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Blog List
                </a>
            </li>
            <li <?php echo (Request::is('admin/blog/create') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/blog/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Blog
                </a>
            </li>
        </ul>
    </li>
    <li <?php echo (Request::is('admin/news') || Request::is('admin/news/*')  ? 'class="active"' : ''); ?>>
        <a href="#">
            <i class="livicon" data-name="move" data-c="#ef6f6c" data-hc="#ef6f6c" data-size="18"
               data-loop="true"></i>
            <span class="title">News</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li <?php echo (Request::is('admin/news') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/news')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    News List
                </a>
            </li>
            <li <?php echo (Request::is('admin/news/create') ? 'class="active"' : ''); ?>>
                <a href="<?php echo e(URL::to('admin/news/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>
                    Add News
                </a>
            </li>
        </ul>
    </li>
    <li <?php echo (Request::is('admin/tasks') ? 'class="active"' : ''); ?>>
        <a href="<?php echo e(URL::to('admin/tasks')); ?>">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18"
               data-loop="true"></i>
            Tasks
            <span class="badge badge-danger" id="taskcount"><?php echo e(Request::get('tasks_count')); ?></span>
        </a>
    </li>
    <!-- Menus generated by CRUD generator -->
    <?php echo $__env->make('admin/layouts/menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</ul>