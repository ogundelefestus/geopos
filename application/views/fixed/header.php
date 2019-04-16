<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="<?= LTR ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <?php if (@$title) {
        echo "<title>$title</title >";
    } else {
        echo "<title>Geo POS</title >";
    }
    ?>
    <link rel="apple-touch-icon" href="<?= assets_url() ?>app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= assets_url() ?>app-assets/images/ico/favicon.ico">



    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?= assets_url() ?>appassetsnew/plugins/morris/morris.css">

    <!-- BEGIN New theme CSS-->
    <link href="<?= assets_url() ?>appassetsnew/css/bootstrap.min.css<?= APPVER ?>" rel="stylesheet" type="text/css">
    <link href="<?= assets_url() ?>appassetsnew/css/icons.css<?= APPVER ?>" rel="stylesheet" type="text/css">
    <link href="<?= assets_url() ?>appassetsnew/css/style.css<?= APPVER ?>" rel="stylesheet" type="text/css">
    <!-- END New theme CSS-->
    <script src="<?= assets_url() ?>app-assets/vendors/js/jquery-3.3.1.min.js"></script>
   <!-- <script src="<?= assets_url() ?>app-assets/vendors/js/vendors.min.js"></script>-->
    <script type="text/javascript" src="<?= assets_url() ?>app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?= assets_url() ?>app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>

    <script src="<?php echo assets_url(); ?>assets/portjs/raphael.min.js" type="text/javascript"></script>
    <script src="<?php echo assets_url(); ?>assets/portjs/morris.min.js" type="text/javascript"></script>
    <script src="<?php echo assets_url('assets/myjs/datepicker.min.js') . APPVER; ?>"></script>
    <script src="<?php echo assets_url('assets/myjs/summernote-bs4.min.js') . APPVER; ?>"></script>
    <script src="<?php echo assets_url('assets/myjs/select2.min.js') . APPVER; ?>"></script>
    <script type="text/javascript">var baseurl = '<?php echo base_url() ?>';
        var crsf_token = '<?=$this->security->get_csrf_token_name()?>';
        var crsf_hash = '<?=$this->security->get_csrf_hash(); ?>';
    </script>
    <script src="<?php echo assets_url(); ?>assets/portjs/accounting.min.js" type="text/javascript"></script>
    <?php accounting() ?>
</head>
<?php
//if (MENU) {
    include_once('header-va.php');
//} else {
//    include_once('header-ha.php');
//}