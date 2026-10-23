<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2DeviceType
{
    public const PAD_AudiencePackageCreateV2DeviceType = 'PAD';
    public const MOBILE_AudiencePackageCreateV2DeviceType = 'MOBILE';

    public const ALLOWED_VALUES = [
        self::PAD_AudiencePackageCreateV2DeviceType,
        self::MOBILE_AudiencePackageCreateV2DeviceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2DeviceType', $value));
        }
        return (string) $value;
    }
}
