<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceCarrierRegionOptimize
{
    public const OFF_ProjectUpdateV30AudienceCarrierRegionOptimize = 'OFF';
    public const ON_ProjectUpdateV30AudienceCarrierRegionOptimize = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_ProjectUpdateV30AudienceCarrierRegionOptimize,
        self::ON_ProjectUpdateV30AudienceCarrierRegionOptimize,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceCarrierRegionOptimize', $value));
        }
        return (string) $value;
    }
}
