<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportReportLiveRoomAudiencePortraitGetV30Dimension
{
    public const PROVINCE_ReportReportLiveRoomAudiencePortraitGetV30Dimension = 'PROVINCE';
    public const AGE_ReportReportLiveRoomAudiencePortraitGetV30Dimension = 'AGE';
    public const PLATFORM_ReportReportLiveRoomAudiencePortraitGetV30Dimension = 'PLATFORM';
    public const CITY_ReportReportLiveRoomAudiencePortraitGetV30Dimension = 'CITY';
    public const GENDER_ReportReportLiveRoomAudiencePortraitGetV30Dimension = 'GENDER';

    public const ALLOWED_VALUES = [
        self::PROVINCE_ReportReportLiveRoomAudiencePortraitGetV30Dimension,
        self::AGE_ReportReportLiveRoomAudiencePortraitGetV30Dimension,
        self::PLATFORM_ReportReportLiveRoomAudiencePortraitGetV30Dimension,
        self::CITY_ReportReportLiveRoomAudiencePortraitGetV30Dimension,
        self::GENDER_ReportReportLiveRoomAudiencePortraitGetV30Dimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportReportLiveRoomAudiencePortraitGetV30Dimension', $value));
        }
        return (string) $value;
    }
}
