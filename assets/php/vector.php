<?php

$target = $_POST["target"];

$vector = $_POST["vector"];
$cmd = 'python /var/www/html/ricco-web/ricco/ricco.py';
$cmd .= " --output-json";
if ($target) {
        $cmd .= " --target ";
        $cmd .= $target;
}
if ($vector) {
        $cmd .= " --vector ";
        $cmd .= $vector;
}
//echo shell_exec($cmd);
$output = shell_exec($cmd);

echo utf8_encode($output);
//echo $output



?>
