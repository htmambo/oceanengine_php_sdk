<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesCarrierRegionOptimize
{
    public const OFF_AudiencePackageGetV30DataAudiencePackagesCarrierRegionOptimize = 'OFF';
    public const ON_AudiencePackageGetV30DataAudiencePackagesCarrierRegionOptimize = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AudiencePackageGetV30DataAudiencePackagesCarrierRegionOptimize,
        self::ON_AudiencePackageGetV30DataAudiencePackagesCarrierRegionOptimize,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesCarrierRegionOptimize', $value));
        }
        return (string) $value;
    }
}
