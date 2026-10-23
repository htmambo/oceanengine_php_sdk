<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpGroupBindAccountDeleteV30AccountsGroupQueriesQueryType
{
    public const DIRECT_EbpGroupBindAccountDeleteV30AccountsGroupQueriesQueryType = 'DIRECT';
    public const TRAVERSE_EbpGroupBindAccountDeleteV30AccountsGroupQueriesQueryType = 'TRAVERSE';

    public const ALLOWED_VALUES = [
        self::DIRECT_EbpGroupBindAccountDeleteV30AccountsGroupQueriesQueryType,
        self::TRAVERSE_EbpGroupBindAccountDeleteV30AccountsGroupQueriesQueryType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpGroupBindAccountDeleteV30AccountsGroupQueriesQueryType', $value));
        }
        return (string) $value;
    }
}
