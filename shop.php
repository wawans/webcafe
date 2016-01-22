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
include_once 'layout/publics/header.php';
include_once 'layout/publics/'.basename(__FILE__);
include_once 'layout/publics/footer.php';


/* End of file shop.php */