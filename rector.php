<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use Rector\TypeDeclaration\Rector\Property\TypedPropertyFromAssignsRector;
use RectorLaravel\Set\LaravelSetList;

return static function (RectorConfig $rectorConfig): void {
    // A. run whole set
    $rectorConfig->sets([
        SetList::DEAD_CODE,
        SetList::CODE_QUALITY,
        SetList::PHP_82,
        SetList::TYPE_DECLARATION,
        LaravelSetList::LARAVEL_100,
    ]);

    // B. or single rule
    $rectorConfig->rule(TypedPropertyFromAssignsRector::class);
};
