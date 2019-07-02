<?php
/**
 * PHP 7 Null Coalesce operator
 */
declare(strict_types = 1);

$name = $_GET['name'] ?? 'N/A';
var_dump($name);

$_GET['name'] = 'New Operator';
$name = $_GET['name'] ?? 'N/A';
var_dump($name);

$_GET['name'] = '';
$name = $_GET['name'] ?? 'N/A';
var_dump($name);

$_GET['name'] = null;
$name = $_GET['name'] ?? 'N/A';
var_dump($name);

$arrayData['name'] = '';
$name = $arrayData['lain'] ?? 'N/A';
var_dump($name);