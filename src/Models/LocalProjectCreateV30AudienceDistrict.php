<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30AudienceDistrict
{
    public const ALL_LocalProjectCreateV30AudienceDistrict = 'ALL';
    public const LOCAL_LocalProjectCreateV30AudienceDistrict = 'LOCAL';
    public const POI_LocalProjectCreateV30AudienceDistrict = 'POI';
    public const REGION_LocalProjectCreateV30AudienceDistrict = 'REGION';

    public const ALLOWED_VALUES = [
        self::ALL_LocalProjectCreateV30AudienceDistrict,
        self::LOCAL_LocalProjectCreateV30AudienceDistrict,
        self::POI_LocalProjectCreateV30AudienceDistrict,
        self::REGION_LocalProjectCreateV30AudienceDistrict,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30AudienceDistrict', $value));
        }
        return (string) $value;
    }
}
