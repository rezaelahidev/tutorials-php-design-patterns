<?php


require __DIR__ . '/vendor/autoload.php';

$design_category = $argv[1];
$design_pattern = $argv[2];

if (!file_exists(__DIR__ . "/src/{$design_category}/{$design_pattern}/use-case.php")) {

    echo 'Design Pattern was not exists!';

    die();
}

include __DIR__ . "/src/{$design_category}/{$design_pattern}/use-case.php";
