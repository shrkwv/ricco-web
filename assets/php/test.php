<?php


$cmd = "python /var/www/html/ricco-web/ricco/ricco.py --output-json --target 32.0752424,34.7749973 --vector panoramio_by_box";


//echo shell_exec($cmd);
$output = shell_exec($cmd);

echo utf8_encode($output);
//echo $output


//echo $cmd;

?>
