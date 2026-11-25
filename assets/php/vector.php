<?php

$target = $_POST["target"];

$vector = $_POST["vector"];
$cmd = 'python /var/www/html/ricco-web/ricco/ricco.py';
$cmd .= " --output-json";
if ($target) {
        $cmd .= " --target=" . escapeshellarg($target);
}
if ($vector) {
        if (!preg_match('/^[A-Za-z0-9_]+$/', $vector)) {
                http_response_code(400);
                exit("Invalid vector");
        }
        $cmd .= " --vector " . $vector;
}
//echo shell_exec($cmd);
$output = shell_exec($cmd);

echo utf8_encode($output);
//echo $output



?>
