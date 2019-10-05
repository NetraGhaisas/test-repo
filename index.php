<?php 
// include_once("test.html");
$basic_info = fopen("php://output", 'w');
header("Content-disposition: attachment; filename=test.csv");
header("Content-Type: text/csv");
header('Content-Length: ' . filesize("php://output"));
readfile("php://output");
?>
