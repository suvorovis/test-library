<?php
const SOME_CONST = '123';
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * @return \suvorov\TestMain
 */
function ajsdfhk(): \suvorov\TestMain
{
    $p = new \suvorov\TestMain();
    echo $p->execute();
    return $p;
}

$p = SOME_CONST;

$g = SOME_CONST;

$p = ajsdfhk();

$p = new \suvorov\Folder\SomeNewClass();
$p->execute();