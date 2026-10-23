<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAudienceGetV30FilteringRoi2Type
{
    public const LIVE_ROI2_LocalReportAudienceGetV30FilteringRoi2Type = 'LIVE_ROI2';
    public const POI_ROI2_LocalReportAudienceGetV30FilteringRoi2Type = 'POI_ROI2';

    public const ALLOWED_VALUES = [
        self::LIVE_ROI2_LocalReportAudienceGetV30FilteringRoi2Type,
        self::POI_ROI2_LocalReportAudienceGetV30FilteringRoi2Type,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAudienceGetV30FilteringRoi2Type', $value));
        }
        return (string) $value;
    }
}
