<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2HarmonyOsv
{
    public const Enum_0_0_AudiencePackageCreateV2HarmonyOsv = '0.0';
    public const NONE_AudiencePackageCreateV2HarmonyOsv = 'NONE';
    public const Enum_5_0_AudiencePackageCreateV2HarmonyOsv = '5.0';

    public const ALLOWED_VALUES = [
        self::Enum_0_0_AudiencePackageCreateV2HarmonyOsv,
        self::NONE_AudiencePackageCreateV2HarmonyOsv,
        self::Enum_5_0_AudiencePackageCreateV2HarmonyOsv,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2HarmonyOsv', $value));
        }
        return (string) $value;
    }
}
