<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2HideIfExists
{
    public const Enum_0_AudiencePackageUpdateV2HideIfExists = 0;
    public const Enum_1_AudiencePackageUpdateV2HideIfExists = 1;
    public const Enum_2_AudiencePackageUpdateV2HideIfExists = 2;

    public const ALLOWED_VALUES = [
        self::Enum_0_AudiencePackageUpdateV2HideIfExists,
        self::Enum_1_AudiencePackageUpdateV2HideIfExists,
        self::Enum_2_AudiencePackageUpdateV2HideIfExists,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2HideIfExists', $value));
        }
        return (string) $value;
    }
}
