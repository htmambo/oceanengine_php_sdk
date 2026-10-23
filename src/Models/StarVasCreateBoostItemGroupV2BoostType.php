<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StarVasCreateBoostItemGroupV2BoostType
{
    public const CUSTOM_PACKAGE_StarVasCreateBoostItemGroupV2BoostType = 'CUSTOM_PACKAGE';
    public const CUSTOM_TAG_StarVasCreateBoostItemGroupV2BoostType = 'CUSTOM_TAG';
    public const NONE_StarVasCreateBoostItemGroupV2BoostType = 'NONE';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PACKAGE_StarVasCreateBoostItemGroupV2BoostType,
        self::CUSTOM_TAG_StarVasCreateBoostItemGroupV2BoostType,
        self::NONE_StarVasCreateBoostItemGroupV2BoostType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StarVasCreateBoostItemGroupV2BoostType', $value));
        }
        return (string) $value;
    }
}
