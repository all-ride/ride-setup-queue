<?php

$source = 'vendor/ride/cli-queue/src/worker.sh';
$destination = 'application/worker.sh';
$directory = getcwd();

if (!file_exists($destination) && file_exists($script) && $directory) {
    $contents = file_get_contents($source);
    $contents = str_replace('<your-ride-installation>', $directory, $contents);

    file_put_contents($destination, $contents);
    chmod($destination, 0755);
}
