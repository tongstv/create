#!/usr/bin/env php
<?php
system("php ../artisan create ctl " . $argv[1], $out);
echo "Create controller ".$argv[1]." Done!";
?>
