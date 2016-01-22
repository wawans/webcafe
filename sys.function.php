<?php
/**
 * 
 * -------------------------------------------------------
 *
 * @author		: Wawan Setyawan
 * @email		: wawans.setyawan@gmail.com
 *
 **/


function queryMysql($query)
{
    $result = mysql_query($query) or die(mysql_error());
    return $result;
}
function destroySession()
{
    $_SESSION=array();
    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time()-2592000, '/');
    session_destroy();
}
function sanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    $var = stripslashes($var);
    return @mysql_real_escape_string($var);
}
function redirect($url) {
    if (!headers_sent()) {
        header('Location: ' . $url);
    } else {
        die('Could not redirect; Output was already sent to the browser.');
    }
}


/* End of file sys.function.php */