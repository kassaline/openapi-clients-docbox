<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
                   ->withPaths([
                       __DIR__ . '/lib',
                       __DIR__ . '/test',
                   ])
                   ->withPreparedSets(true, true, true, true, true, true, true, true, true)
                   ->withPhpSets(true)
                   ->withRules([
                       AddVoidReturnTypeWhereNoReturnRector::class,
                   ])
                   ->withSets([
                       LaravelSetList::LARAVEL_110,
                       LevelSetList::UP_TO_PHP_83,
                       SetList::PHP_83,
                   ])
;
