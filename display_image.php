


<?php
// ; Whether to allow include/require to open URLs (like http:// or ftp://) as files.
// ; http://php.net/allow-url-include
// allow_url_include = Off
// Never allow users to supply info to functions that access the file system
// eval, system, exec, file_get_contents, passthru, include, require, file_put_contents, fopen
// http://localhost/badstuff2.php?language=hackmsg.php%00
if (isset($_GET['product']))
{
$language = $_GET['product'];
include($language);
}
?>
