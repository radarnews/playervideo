<?php
require_once('mega.class.php');
$megafile = new MEGA('http://mega.co.nz/#'.$_GET['v']);
//$megafile->download();
// OR
$megafile->stream_download(); // to download using streams
?>