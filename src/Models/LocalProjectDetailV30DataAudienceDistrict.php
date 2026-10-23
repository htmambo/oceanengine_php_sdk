<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataAudienceDistrict
{
    public const ALL_LocalProjectDetailV30DataAudienceDistrict = 'ALL';
    public const LOCAL_LocalProjectDetailV30DataAudienceDistrict = 'LOCAL';
    public const POI_LocalProjectDetailV30DataAudienceDistrict = 'POI';
    public const REGION_LocalProjectDetailV30DataAudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectDetailV30DataAudienceDistrict,
        self::LOCAL_LocalProjectDetailV30DataAudienceDistrict,
        self::POI_LocalProjectDetailV30DataAudienceDistrict,
        self::REGION_LocalProjectDetailV30DataAudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataAudienceDistrict', $value));
        }
        return (string) $value;
    }
}
