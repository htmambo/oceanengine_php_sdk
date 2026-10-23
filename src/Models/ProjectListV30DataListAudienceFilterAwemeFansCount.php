<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceFilterAwemeFansCount
{
    public const Enum_1000_ProjectListV30DataListAudienceFilterAwemeFansCount = 1000;
    public const Enum_200_ProjectListV30DataListAudienceFilterAwemeFansCount = 200;
    public const Enum_500_ProjectListV30DataListAudienceFilterAwemeFansCount = 500;

    public const ALLOWED_VALUES = [
        self::Enum_1000_ProjectListV30DataListAudienceFilterAwemeFansCount,
        self::Enum_200_ProjectListV30DataListAudienceFilterAwemeFansCount,
        self::Enum_500_ProjectListV30DataListAudienceFilterAwemeFansCount,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceFilterAwemeFansCount', $value));
        }
        return (string) $value;
    }
}
