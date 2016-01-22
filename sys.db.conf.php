<?php
/**
 * 
 * -------------------------------------------------------
 *
 * @author		: Wawan Setyawan
 * @email		: wawans.setyawan@gmail.com
 *
 **/

$db['hostname'] = "127.0.0.1";
$db['hostport'] = "3306";
$db['username'] = "root";
$db['password'] = "admin";
$db['database'] = "lacafe";

@mysql_connect($db['hostname'], $db['username'], $db['password'],true) or die("Tidak dapat terhubung karna " . @mysql_error());
@mysql_select_db($db['database']) or die("Tidak terhubung ke database karna".@mysql_error());


/* End of file sys.db.conf.php */