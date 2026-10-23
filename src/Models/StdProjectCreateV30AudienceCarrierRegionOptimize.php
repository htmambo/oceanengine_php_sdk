<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceCarrierRegionOptimize
{
    public const OFF_StdProjectCreateV30AudienceCarrierRegionOptimize = 'OFF';
    public const ON_StdProjectCreateV30AudienceCarrierRegionOptimize = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectCreateV30AudienceCarrierRegionOptimize,
        self::ON_StdProjectCreateV30AudienceCarrierRegionOptimize,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceCarrierRegionOptimize', $value));
        }
        return (string) $value;
    }
}
