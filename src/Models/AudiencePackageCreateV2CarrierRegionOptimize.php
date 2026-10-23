<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2CarrierRegionOptimize
{
    public const OFF_AudiencePackageCreateV2CarrierRegionOptimize = 'OFF';
    public const ON_AudiencePackageCreateV2CarrierRegionOptimize = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AudiencePackageCreateV2CarrierRegionOptimize,
        self::ON_AudiencePackageCreateV2CarrierRegionOptimize,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2CarrierRegionOptimize', $value));
        }
        return (string) $value;
    }
}
