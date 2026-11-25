<?php

$target = $_POST["target"];

$strategy = $_POST["strategy"];

$cmd = 'python /var/www/html/ricco-web/ricco/ricco.py';
$cmd .= " --output-json";
if ($target) {
        $cmd .= " --target=" . escapeshellarg($target);
}
if ($strategy) {
        if (!preg_match('/^[A-Za-z0-9_]+$/', $strategy)) {
                http_response_code(400);
                exit("Invalid strategy");
        }
        $cmd .= " --strategy " . $strategy;
}
$output = shell_exec($cmd);
echo utf8_encode($output);


//echo $cmd;

?>
