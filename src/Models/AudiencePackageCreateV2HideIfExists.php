<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2HideIfExists
{
    public const Enum_0_AudiencePackageCreateV2HideIfExists = 0;
    public const Enum_1_AudiencePackageCreateV2HideIfExists = 1;
    public const Enum_2_AudiencePackageCreateV2HideIfExists = 2;

    public const ALLOWED_VALUES = [
        self::Enum_0_AudiencePackageCreateV2HideIfExists,
        self::Enum_1_AudiencePackageCreateV2HideIfExists,
        self::Enum_2_AudiencePackageCreateV2HideIfExists,
    ];

    public static function isValid(int|string $value): bool
    {
        return in_array((string) $value, array_map('strval', static::ALLOWED_VALUES), true);
    }

    public static function fromValue(int|string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2HideIfExists', $value));
        }
        return (string) $value;
    }
}
