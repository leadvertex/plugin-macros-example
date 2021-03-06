<?php
use Leadvertex\Plugin\Core\Macros\Factories\WebAppFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$factory = new WebAppFactory();
$factory->addUploadAction();
$application = $factory->build();
$application->run();