<?php

declare(strict_types=1);

use Rector\CodingStyle\Rector\ArrowFunction\StaticArrowFunctionRector;
use Rector\CodingStyle\Rector\Closure\StaticClosureRector;
use Rector\CodingStyle\Rector\PostInc\PostIncDecToPreIncDecRector;
use Rector\Config\RectorConfig;
use Rector\Naming\Rector\ClassMethod\RenameParamToMatchTypeRector;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/app',
        __DIR__ . '/bootstrap',
        __DIR__ . '/config',
        __DIR__ . '/public',
        __DIR__ . '/resources',
        __DIR__ . '/routes',
        __DIR__ . '/tests',
    ])
    ->withPhpSets(php83: true)
    ->withSkip([
        PostIncDecToPreIncDecRector::class,
        RenameParamToMatchTypeRector::class, // This breaks many DI things in Laravel/Filament
    ])
    ->withRules([
        //        StaticArrowFunctionRector
        StaticArrowFunctionRector::class,
        StaticClosureRector::class,
    ])
    ->withPreparedSets(
        true,
        true,
        true,
        true,
        true,
        true,
        true,
        true,
        true
    )
    ->withSets([
        LaravelSetList::LARAVEL_110,
    ]);
