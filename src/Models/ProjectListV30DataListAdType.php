<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAdType
{
    public const ALL_ProjectListV30DataListAdType = 'ALL';
    public const SEARCH_ProjectListV30DataListAdType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_ProjectListV30DataListAdType,
        self::SEARCH_ProjectListV30DataListAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAdType', $value));
        }
        return (string) $value;
    }
}
