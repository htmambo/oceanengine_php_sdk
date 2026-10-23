<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAudienceGetV30AudienceDimension
{
    public const AC_LocalReportAudienceGetV30AudienceDimension = 'AC';
    public const AGE_LocalReportAudienceGetV30AudienceDimension = 'AGE';
    public const CITY_LocalReportAudienceGetV30AudienceDimension = 'CITY';
    public const DISTRICT_LocalReportAudienceGetV30AudienceDimension = 'DISTRICT';
    public const EIGHT_GROUP_LABEL_LocalReportAudienceGetV30AudienceDimension = 'EIGHT_GROUP_LABEL';
    public const GENDER_LocalReportAudienceGetV30AudienceDimension = 'GENDER';
    public const PLATFORM_LocalReportAudienceGetV30AudienceDimension = 'PLATFORM';
    public const PROVINCE_LocalReportAudienceGetV30AudienceDimension = 'PROVINCE';

    public const ALLOWED_VALUES = [
        self::AC_LocalReportAudienceGetV30AudienceDimension,
        self::AGE_LocalReportAudienceGetV30AudienceDimension,
        self::CITY_LocalReportAudienceGetV30AudienceDimension,
        self::DISTRICT_LocalReportAudienceGetV30AudienceDimension,
        self::EIGHT_GROUP_LABEL_LocalReportAudienceGetV30AudienceDimension,
        self::GENDER_LocalReportAudienceGetV30AudienceDimension,
        self::PLATFORM_LocalReportAudienceGetV30AudienceDimension,
        self::PROVINCE_LocalReportAudienceGetV30AudienceDimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAudienceGetV30AudienceDimension', $value));
        }
        return (string) $value;
    }
}
