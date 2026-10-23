<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpGroupBindAccountUpdateV30AccountsGroupQueriesQueryType
{
    public const DIRECT_EbpGroupBindAccountUpdateV30AccountsGroupQueriesQueryType = 'DIRECT';
    public const TRAVERSE_EbpGroupBindAccountUpdateV30AccountsGroupQueriesQueryType = 'TRAVERSE';

    public const ALLOWED_VALUES = [
        self::DIRECT_EbpGroupBindAccountUpdateV30AccountsGroupQueriesQueryType,
        self::TRAVERSE_EbpGroupBindAccountUpdateV30AccountsGroupQueriesQueryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpGroupBindAccountUpdateV30AccountsGroupQueriesQueryType', $value));
        }
        return (string) $value;
    }
}
