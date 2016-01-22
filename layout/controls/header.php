<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Dashboard - La Cafe</title>
    <style type="text/css">
        <?php if (substr($_SERVER['SCRIPT_NAME'],-9) == 'login.php') { ?>
        @import url("<?= WEBURL ?>ui-controls/css/inlog.css");
        <?php } ?>
        @import url('<?= WEBURL ?>ui-controls/css/style_text.css');
        @import url('<?= WEBURL ?>ui-controls/css/c-grey.css'); /* COLOR FILE CAN CHANGE TO c-blue.ccs, c-grey.ccs, c-orange.ccs, c-purple.ccs or c-red.ccs */
        @import url('<?= WEBURL ?>ui-controls/css/form.css');
        @import url('<?= WEBURL ?>ui-controls/css/messages.css');
    </style>

    <style type="text/css">
<?php if (substr($_SERVER['SCRIPT_NAME'],-9) != 'login.php') { ?>
        @import url("<?= WEBURL ?>ui-controls/css/style.css");
        @import url('<?= WEBURL ?>ui-controls/css/datepicker.css');
        @import url('<?= WEBURL ?>ui-controls/css/menu.css');
        @import url('<?= WEBURL ?>ui-controls/css/statics.css');
        @import url('<?= WEBURL ?>ui-controls/css/tabs.css');
<?php } ?>
    </style>
    <script type="text/javascript" src="<?= WEBURL ?>ui-controls/js/jquery-1.6.1.min.js"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="<?= WEBURL ?>ui-controls/js/excanvas.min.js"></script>
    <![endif]-->
</head>

<body>