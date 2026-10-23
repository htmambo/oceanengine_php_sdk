<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportReportLiveRoomAudiencePortraitGetV30OrderType
{
    public const ASC_ReportReportLiveRoomAudiencePortraitGetV30OrderType = 'ASC';
    public const DESC_ReportReportLiveRoomAudiencePortraitGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_ReportReportLiveRoomAudiencePortraitGetV30OrderType,
        self::DESC_ReportReportLiveRoomAudiencePortraitGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportReportLiveRoomAudiencePortraitGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
