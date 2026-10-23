<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectUpdateV30AudienceDistrict
{
    public const ALL_LocalProjectUpdateV30AudienceDistrict = 'ALL';
    public const LOCAL_LocalProjectUpdateV30AudienceDistrict = 'LOCAL';
    public const POI_LocalProjectUpdateV30AudienceDistrict = 'POI';
    public const REGION_LocalProjectUpdateV30AudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectUpdateV30AudienceDistrict,
        self::LOCAL_LocalProjectUpdateV30AudienceDistrict,
        self::POI_LocalProjectUpdateV30AudienceDistrict,
        self::REGION_LocalProjectUpdateV30AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectUpdateV30AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
