<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2CarrierRegionOptimize
{
    public const OFF_AudiencePackageUpdateV2CarrierRegionOptimize = 'OFF';
    public const ON_AudiencePackageUpdateV2CarrierRegionOptimize = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AudiencePackageUpdateV2CarrierRegionOptimize,
        self::ON_AudiencePackageUpdateV2CarrierRegionOptimize,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2CarrierRegionOptimize', $value));
        }
        return (string) $value;
    }
}
