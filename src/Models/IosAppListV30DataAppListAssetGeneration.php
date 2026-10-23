<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class IosAppListV30DataAppListAssetGeneration
{
    public const LEGACY_IosAppListV30DataAppListAssetGeneration = 'LEGACY';
    public const OC_USABLE_IosAppListV30DataAppListAssetGeneration = 'OC_USABLE';

    public const ALLOWED_VALUES = [
        self::LEGACY_IosAppListV30DataAppListAssetGeneration,
        self::OC_USABLE_IosAppListV30DataAppListAssetGeneration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum IosAppListV30DataAppListAssetGeneration', $value));
        }
        return (string) $value;
    }
}
