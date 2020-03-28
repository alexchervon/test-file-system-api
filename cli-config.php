<?php
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Slim\Container;

require_once __DIR__ . '/src/App/App.php';

/** @var Container $container */
$container = $app->getContainer();

return ConsoleRunner::createHelperSet($container[EntityManager::class]);
