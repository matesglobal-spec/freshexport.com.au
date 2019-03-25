<?php
$system_name = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$logged_in_user = $this->db->get_where('users', array('status' => 1, 'user_id' => $this->session->userdata('user_id')))->row();
$logged_in_user_type = $this->session->userdata('login_type');
$loggd_in_user_id = $this->session->userdata('user_id');
?>
<!DOCTYPE html>
<html lang="en">
    <!-- INCLUDES THE CSS FILES AND MAIN JQUERY LIBRARY -->
    <?php include 'includes_top.php'; ?>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
        	<?php include 'header.php'; ?>
            <!-- INCLUDES THE NAVIGATION MENU FOR USERS -->
            <?php include $logged_in_user_type . '/navigation.php'; ?>
            <div class="main-content">
                <!-- INCLUDES THE MAIN BODY FOR EACH PAGE -->
                <?php include $logged_in_user_type . '/' . $page_name . '.php'; ?>

                <!-- INCLUDES THE FOOTER -->
                <?php include 'footer.php'; ?>
            </div>
        </div>
        <!-- INCLUDES ALL JAVASCRIPT FILES -->
        <?php include 'modal.php'; ?>
        <?php include 'includes_bottom.php'; ?>
    </body>
</html>
