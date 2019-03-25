<div class="sidebar-menu">
    <header class="logo-env" >

        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo site_url('login'); ?>">
                <img src="<?php echo base_url();?>uploads/logo.png"  style="max-height:60px;"/>
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">

                <i class="entypo-menu"></i>
            </a>
        </div>

        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>

    <div style=""></div>	
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->


        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/dashboard'); ?>">
                <i class="entypo-gauge"></i>
                <span><?php echo get_phrase('dashboard'); ?></span>
            </a>
        </li>

        <!--  To-do list -->
        <li class="<?php
        if ($page_name == 'assign_task' ||
                $page_name == 'assigned_tasklist' ||
                $page_name == 'todo')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('To_Do_list'); ?></span>
            </a>
            <ul>
                <!-- To-do ADD -->
                <li class="<?php if ($page_name == 'assign_task') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/todolist/assign_task'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('assign_task'); ?></span>
                    </a>
                </li>

                <!-- To-do list -->
                <li class="<?php if ($page_name == 'assigned_tasklist') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/todolist/assigned_tasklist'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('assigned_tasklist'); ?></span>
                    </a>
                </li>
                <!-- To-do -->
                <li class="<?php if ($page_name == 'todo') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/todolist/todo'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('ToDo'); ?></span>
                    </a>
                </li>

            </ul>
        </li>

        <!--  EMPLOYEE -->
        <li class="<?php
        if ($page_name == 'employee_add' ||
                $page_name == 'employee_list' || $page_name == 'employee_edit'|| $page_name == 'employee_profile')
            echo 'opened active has-sub';
        ?> ">
            <a href="#">
                <i class="entypo-users"></i>
                <span><?php echo get_phrase('employee'); ?></span>
            </a>
            <ul>
                <!-- EMPLOYEE ADD -->
                <li class="<?php if ($page_name == 'employee_add') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/employee/employee_add'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('add_employee'); ?></span>
                    </a>
                </li>
                <!-- EMPLOYEE LIST -->
                <li class="<?php if ($page_name == 'employee_list' || $page_name == 'employee_edit' || $page_name == 'employee_profile') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/employee/list'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('employee_list'); ?></span>
                    </a>
                </li>

            </ul>
        </li>

        <!-- DEPARTMENT -->
        <li class="<?php if ($page_name == 'department') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/department/list'); ?>">
                <i class="entypo-archive"></i>
                <span><?php echo get_phrase('department'); ?></span>
            </a>
        </li>

        <!-- RECRUITMENT -->
        <li class="<?php if($page_name == 'vacancy' || $page_name == 'application') echo 'opened active'; ?>">
            <a href="#">
                <i class="entypo-user-add"></i>
                <span><?php echo get_phrase('recruitment'); ?></span>
            </a>
            <ul>
                <li class="<?php if($page_name == 'vacancy') echo 'active'; ?>">
                    <a href="<?php echo site_url('admin/vacancy'); ?>">
                        <span>
                            <i class="entypo-dot"></i>
                            <?php echo get_phrase('vacancies'); ?>
                        </span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="<?php if ($page_name == 'application') echo 'active'; ?>">
                    <a href="<?php echo site_url('admin/application'); ?>">
                        <span>
                            <i class="entypo-dot"></i>
                            <?php echo get_phrase('applications'); ?>
                        </span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- DAILY ATTENDANCE -->
        <li class="<?php if($page_name == 'manage_attendance' ||
            $page_name == 'manage_attendance_view' || $page_name == 'attendance_report' ||
            $page_name == 'attendance_report_view') echo 'opened active'; ?>">
            <a href="#">
                <i class="entypo-chart-area"></i>
                <span><?php echo get_phrase('attendance'); ?></span>
            </a>
            <ul>
                <li class="<?php if(($page_name == 'manage_attendance' || $page_name == 'manage_attendance_view')) echo 'active'; ?>">
                    <a href="<?php echo site_url('admin/manage_attendance'); ?>">
                        <span>
                            <i class="entypo-dot"></i>
                            <?php echo get_phrase('daily_atendance'); ?>
                        </span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="<?php if (( $page_name == 'attendance_report' || $page_name == 'attendance_report_view')) echo 'active'; ?>">
                    <a href="<?php echo site_url('admin/attendance_report'); ?>">
                        <span>
                            <i class="entypo-dot"></i>
                            <?php echo get_phrase('attendance_report'); ?>
                        </span>
                    </a>
                </li>
            </ul>
        </li>
        
        <!-- LEAVE -->
        <li class="<?php if ($page_name == 'leave') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/leave'); ?>">
                <i class="entypo-flight"></i>
                <span><?php echo get_phrase('leave'); ?></span>
            </a>
        </li>

        <!-- PAYROLL -->
        <li class="<?php
            if ($page_name == 'payroll_add' || $page_name == 'payroll_add_view'
                || $page_name == 'payroll_list')
                echo 'opened active has-sub'; ?>">
            <a href="#">
                <i class="entypo-tag"></i>
                <span><?php echo get_phrase('payroll'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'payroll_add' || $page_name == 'payroll_add_view') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/payroll'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('create_payslip'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'payroll_list') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/payroll_list'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('payslip_list'); ?></span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- -AWARD -->
        <li class="<?php if ($page_name == 'award') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/award'); ?>">
                <i class="entypo-trophy"></i>
                <span><?php echo get_phrase('award'); ?></span>
            </a>
        </li>

        <!-- EXPENSE -->
        <li class="<?php if ($page_name == 'expense') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/expense'); ?>">
                <i class="entypo-credit-card"></i>
                <span><?php echo get_phrase('expense'); ?></span>
            </a>
        </li>

        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/noticeboard'); ?>">
                <i class="entypo-doc-text-inv"></i>
                <span><?php echo get_phrase('noticeboard'); ?></span>
            </a>
        </li>

        <!-- MESSAGE -->
        <li class="<?php if ($page_name == 'message') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/message'); ?>">
                <i class="entypo-mail"></i>
                <span><?php echo get_phrase('message'); ?></span>
            </a>
        </li>

        <!-- SETTINGS -->
        <!-- <li class="<?php if ($page_name == 'system_settings' || $page_name == 'manage_language') echo 'opened active'; ?>">
            <a href="#">
                <i class="entypo-lifebuoy"></i>
                <span><?php echo get_phrase('settings'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/system_settings'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('general_settings'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'manage_language') echo 'active'; ?> ">
                    <a href="<?php echo site_url('admin/manage_language'); ?>">
                        <span><i class="entypo-dot"></i> <?php echo get_phrase('language_settings'); ?></span>
                    </a>
                </li>
            </ul>
        </li> -->

        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo site_url('admin/manage_profile'); ?>">
                <i class="entypo-lock"></i>
                <span><?php echo get_phrase('account'); ?></span>
            </a>
        </li>
    </ul>

</div>