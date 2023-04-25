<?php
$needleArray = [
    '-MassTamilan.com',
    '-MassTamilan.io',
];
$dirname = getcwd();
$ds = DIRECTORY_SEPARATOR;
$dir = scandir($dirname, SCANDIR_SORT_ASCENDING);

foreach ($dir as $fileName) {
    $newFileName = str_replace($needleArray, '', $fileName);
    if ($newFileName !== $fileName) {

        echo "Renaming filename {$dirname}{$ds}{$fileName} to {$dirname}{$ds}" . $newFileName . "\n";

        rename($dirname . $ds. $fileName,  $dirname . $ds . $newFileName);
    }
}