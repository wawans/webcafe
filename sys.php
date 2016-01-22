<?php
/**
 * 
 * -------------------------------------------------------
 *
 * @author		: Wawan Setyawan
 * @email		: wawans.setyawan@gmail.com
 *
 **/
date_default_timezone_set("ASIA/JAKARTA");

require_once 'sys.conf.php';
require_once 'sys.db.conf.php';
require_once 'sys.function.php';

/* init halaman */
$webc = array();
$query = queryMysql("SELECT * FROM webconf");
while ($data = @mysql_fetch_array($query)) {
    $webc[$data['ref_nama']] = $data['des_isi'];
}
/* End of file sys.php */