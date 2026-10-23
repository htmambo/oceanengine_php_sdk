<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataInventoryCatalog
{
    public const SCENE_AdGetV2DataInventoryCatalog = 'SCENE';
    public const UNIVERSAL_AdGetV2DataInventoryCatalog = 'UNIVERSAL';
    public const UNIVERSAL_SMART_AdGetV2DataInventoryCatalog = 'UNIVERSAL_SMART';
    public const SMART_AdGetV2DataInventoryCatalog = 'SMART';
    public const MANUAL_AdGetV2DataInventoryCatalog = 'MANUAL';

    public const ALLOWED_VALUES = [
        self::SCENE_AdGetV2DataInventoryCatalog,
        self::UNIVERSAL_AdGetV2DataInventoryCatalog,
        self::UNIVERSAL_SMART_AdGetV2DataInventoryCatalog,
        self::SMART_AdGetV2DataInventoryCatalog,
        self::MANUAL_AdGetV2DataInventoryCatalog,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataInventoryCatalog', $value));
        }
        return (string) $value;
    }
}
