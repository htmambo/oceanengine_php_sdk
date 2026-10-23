<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius
{
    public const KM_10_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius = 'KM_10';
    public const KM_12_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius = 'KM_12';
    public const KM_15_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius = 'KM_15';
    public const KM_20_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius = 'KM_20';
    public const KM_6_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius = 'KM_6';
    public const KM_8_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius = 'KM_8';

    public const ALLOWED_VALUES = [
        self::KM_10_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius,
        self::KM_12_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius,
        self::KM_15_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius,
        self::KM_20_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius,
        self::KM_6_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius,
        self::KM_8_LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAudiencePoiAroundPoiAroundRadius', $value));
        }
        return (string) $value;
    }
}
