<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAdType
{
    public const ALL_StdProjectListV30DataListAdType = 'ALL';
    public const SEARCH_StdProjectListV30DataListAdType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_StdProjectListV30DataListAdType,
        self::SEARCH_StdProjectListV30DataListAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAdType', $value));
        }
        return (string) $value;
    }
}
