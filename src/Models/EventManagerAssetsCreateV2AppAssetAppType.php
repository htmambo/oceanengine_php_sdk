<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerAssetsCreateV2AppAssetAppType
{
    public const ANDROID_EventManagerAssetsCreateV2AppAssetAppType = 'Android';
    public const IOS_EventManagerAssetsCreateV2AppAssetAppType = 'IOS';

    public const ALLOWED_VALUES = [
        self::ANDROID_EventManagerAssetsCreateV2AppAssetAppType,
        self::IOS_EventManagerAssetsCreateV2AppAssetAppType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerAssetsCreateV2AppAssetAppType', $value));
        }
        return (string) $value;
    }
}
