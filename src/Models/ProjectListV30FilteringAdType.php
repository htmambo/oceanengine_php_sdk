<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30FilteringAdType
{
    public const ALL_ProjectListV30FilteringAdType = 'ALL';
    public const SEARCH_ProjectListV30FilteringAdType = 'SEARCH';

    public const ALLOWED_VALUES = [
        self::ALL_ProjectListV30FilteringAdType,
        self::SEARCH_ProjectListV30FilteringAdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30FilteringAdType', $value));
        }
        return (string) $value;
    }
}
