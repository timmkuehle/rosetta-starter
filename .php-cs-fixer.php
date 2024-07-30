<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;
use Rosetta\LangSupport\PhpSupport;

require __DIR__ . '/vendor/autoload.php';

$finder = Finder::create();
$config = new Config();

$finder->in(__DIR__);
$finder->name('*.php');

$config = PhpSupport::getPhpCsFixerConfig($finder);

return $config;
