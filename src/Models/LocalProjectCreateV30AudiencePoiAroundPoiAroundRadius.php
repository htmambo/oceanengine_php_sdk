<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius
{
    public const KM_10_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius = 'KM_10';
    public const KM_12_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius = 'KM_12';
    public const KM_15_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius = 'KM_15';
    public const KM_20_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius = 'KM_20';
    public const KM_25_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius = 'KM_25';
    public const KM_30_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius = 'KM_30';
    public const KM_6_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius = 'KM_6';
    public const KM_8_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius = 'KM_8';

    public const ALLOWED_VALUES = [
        self::KM_10_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius,
        self::KM_12_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius,
        self::KM_15_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius,
        self::KM_20_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius,
        self::KM_25_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius,
        self::KM_30_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius,
        self::KM_6_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius,
        self::KM_8_LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AudiencePoiAroundPoiAroundRadius', $value));
        }
        return (string) $value;
    }
}
