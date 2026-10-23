<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceDeviceType
{
    public const PAD_AdGetV2DataAudienceDeviceType = 'PAD';
    public const MOBILE_AdGetV2DataAudienceDeviceType = 'MOBILE';

    public const ALLOWED_VALUES = [
        self::PAD_AdGetV2DataAudienceDeviceType,
        self::MOBILE_AdGetV2DataAudienceDeviceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceDeviceType', $value));
        }
        return (string) $value;
    }
}
