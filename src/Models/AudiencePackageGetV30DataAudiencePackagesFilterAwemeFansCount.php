<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount
{
    public const Enum_0_AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount = 0;
    public const Enum_1000_AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount = 1000;
    public const Enum_200_AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount = 200;
    public const Enum_500_AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount = 500;

    public const ALLOWED_VALUES = [
        self::Enum_0_AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount,
        self::Enum_1000_AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount,
        self::Enum_200_AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount,
        self::Enum_500_AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesFilterAwemeFansCount', $value));
        }
        return (string) $value;
    }
}
