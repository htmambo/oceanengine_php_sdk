<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesHarmonyOsv
{
    public const Enum_0_0_AudiencePackageGetV30DataAudiencePackagesHarmonyOsv = '0.0';
    public const Enum_5_0_AudiencePackageGetV30DataAudiencePackagesHarmonyOsv = '5.0';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_AudiencePackageGetV30DataAudiencePackagesHarmonyOsv,
        self::Enum_5_0_AudiencePackageGetV30DataAudiencePackagesHarmonyOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesHarmonyOsv', $value));
        }
        return (string) $value;
    }
}
