<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesDeviceType
{
    public const MOBILE_AudiencePackageGetV30DataAudiencePackagesDeviceType = 'MOBILE';
    public const PAD_AudiencePackageGetV30DataAudiencePackagesDeviceType = 'PAD';

    public const ALLOWED_VALUES = [
        self::MOBILE_AudiencePackageGetV30DataAudiencePackagesDeviceType,
        self::PAD_AudiencePackageGetV30DataAudiencePackagesDeviceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesDeviceType', $value));
        }
        return (string) $value;
    }
}
