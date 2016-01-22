<?php
session_start();
require 'sys.php';

if ((empty($_POST['username'])) || (empty($_POST['password']))) {
    //die (ucwords('Isi Semua fill'));
    redirect('login.php?log=false');
    exit;
}

$una = sanitizeString($_POST['username']);
$pas = sanitizeString($_POST['password']);

$query = queryMysql("SELECT nip,akses FROM pengguna WHERE username='{$una}' AND password='{$pas}'");
if (mysql_num_rows($query) == 0) {
    //die (ucwords('User dan/atau Password Salah'));
    redirect('login.php?log=false');
    exit;
}
elseif (mysql_num_rows($query) == 1) {
    $result = @mysql_fetch_array($query);
    $_SESSION['USER'] = $result['nip'];
    $_SESSION['HAK'] = $result['akses'];
    $_SESSION['OK'] = true;
    redirect('dashboard.php?log=true');
    exit;
}
