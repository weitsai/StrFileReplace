<?php
define('STR_FILE_PATH', isset($argv[1]) ? $argv[1] : false);

$handle = fopen(STR_FILE_PATH, "r");
$fileString = fread($handle,filesize(STR_FILE_PATH));
$newFileString = preg_replace('/{.*}/', '', $fileString);
$fp = fopen('newSrtFile.srt', 'w');
fwrite($fp, $newFileString);
fclose($fp);