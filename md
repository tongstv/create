#!/usr/bin/env php
<?php
system("php ../artisan create module " . $argv[1], $out);

echo "Create Module ".$argv[1]." Done!";
?>
