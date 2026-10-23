<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataDownloadMode
{
    public const DEFAULT_AdGetV2DataDownloadMode = 'DEFAULT';
    public const APP_STORE_DELIVERY_AdGetV2DataDownloadMode = 'APP_STORE_DELIVERY';

    public const ALLOWED_VALUES = [
        self::DEFAULT_AdGetV2DataDownloadMode,
        self::APP_STORE_DELIVERY_AdGetV2DataDownloadMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataDownloadMode', $value));
        }
        return (string) $value;
    }
}
