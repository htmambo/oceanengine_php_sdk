<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceFilterAwemeFansCount
{
    public const Enum_0_ProjectUpdateV30AudienceFilterAwemeFansCount = 0;
    public const Enum_1000_ProjectUpdateV30AudienceFilterAwemeFansCount = 1000;
    public const Enum_200_ProjectUpdateV30AudienceFilterAwemeFansCount = 200;
    public const Enum_500_ProjectUpdateV30AudienceFilterAwemeFansCount = 500;

    public const ALLOWED_VALUES = [
        self::Enum_0_ProjectUpdateV30AudienceFilterAwemeFansCount,
        self::Enum_1000_ProjectUpdateV30AudienceFilterAwemeFansCount,
        self::Enum_200_ProjectUpdateV30AudienceFilterAwemeFansCount,
        self::Enum_500_ProjectUpdateV30AudienceFilterAwemeFansCount,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceFilterAwemeFansCount', $value));
        }
        return (string) $value;
    }
}
