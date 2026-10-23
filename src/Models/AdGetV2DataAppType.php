<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAppType
{
    public const APP_ANDROID_AdGetV2DataAppType = 'APP_ANDROID';
    public const APP_IOS_AdGetV2DataAppType = 'APP_IOS';

    public const ALLOWED_VALUES = [
        self::APP_ANDROID_AdGetV2DataAppType,
        self::APP_IOS_AdGetV2DataAppType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAppType', $value));
        }
        return (string) $value;
    }
}
