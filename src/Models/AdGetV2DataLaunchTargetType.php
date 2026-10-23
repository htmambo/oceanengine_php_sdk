<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataLaunchTargetType
{
    public const LIVE_CONVERT_AdGetV2DataLaunchTargetType = 'LIVE_CONVERT';
    public const APP_AdGetV2DataLaunchTargetType = 'APP';
    public const EXTERNAL_AdGetV2DataLaunchTargetType = 'EXTERNAL';

    public const ALLOWED_VALUES = [
        self::LIVE_CONVERT_AdGetV2DataLaunchTargetType,
        self::APP_AdGetV2DataLaunchTargetType,
        self::EXTERNAL_AdGetV2DataLaunchTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataLaunchTargetType', $value));
        }
        return (string) $value;
    }
}
