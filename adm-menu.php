<?php
/**
 * 
 * -------------------------------------------------------
 *
 * @author		: Wawan Setyawan
 * @email		: wawans.setyawan@gmail.com
 *
 **/

ob_start();
session_start();
include 'sys.php';
$query = queryMysql("SELECT * FROM menu");
include_once 'layout/controls/header.php';
include_once 'layout/controls/'.basename(__FILE__);
include_once 'layout/controls/footer.php';


/* End of file adm-adm-menu.php */