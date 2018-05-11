<?php

$target = $_POST["target"];

$strategy = $_POST["strategy"];

$cmd = 'python /var/www/html/ricco-web/ricco/ricco.py';
$cmd .= " --output-json";
if ($target) {
        $cmd .= " --target ";
        $cmd .= $target;
}
if ($strategy) {
        $cmd .= " --strategy ";
        $cmd .= $strategy;
}
$output = shell_exec($cmd);
echo utf8_encode($output);


//echo $cmd;

?>
