<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerAssetsCreateV2AppAssetAppCreateType
{
    public const NORMAL_EventManagerAssetsCreateV2AppAssetAppCreateType = 'NORMAL';
    public const UG_EventManagerAssetsCreateV2AppAssetAppCreateType = 'UG';

    public const ALLOWED_VALUES = [
        self::NORMAL_EventManagerAssetsCreateV2AppAssetAppCreateType,
        self::UG_EventManagerAssetsCreateV2AppAssetAppCreateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerAssetsCreateV2AppAssetAppCreateType', $value));
        }
        return (string) $value;
    }
}
