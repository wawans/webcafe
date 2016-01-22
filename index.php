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

$menu = queryMysql("SELECT * from menu ORDER BY RAND() LIMIT 16");
$men1 = queryMysql("SELECT * from menu ORDER BY tgl_rekam desc LIMIT 8");
include_once 'layout/publics/header.php';
include_once 'layout/publics/'.basename(__FILE__);
include_once 'layout/publics/footer.php';


/* End of file index.php */