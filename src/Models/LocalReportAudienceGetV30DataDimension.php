<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAudienceGetV30DataDimension
{
    public const AD_LocalReportAudienceGetV30DataDimension = 'AD';
    public const CDP_PROMOTION_LocalReportAudienceGetV30DataDimension = 'CDP_PROMOTION';
    public const ORDER_LocalReportAudienceGetV30DataDimension = 'ORDER';
    public const ROI2_PROMOTION_LocalReportAudienceGetV30DataDimension = 'ROI2_PROMOTION';

    public const ALLOWED_VALUES = [
        self::AD_LocalReportAudienceGetV30DataDimension,
        self::CDP_PROMOTION_LocalReportAudienceGetV30DataDimension,
        self::ORDER_LocalReportAudienceGetV30DataDimension,
        self::ROI2_PROMOTION_LocalReportAudienceGetV30DataDimension,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAudienceGetV30DataDimension', $value));
        }
        return (string) $value;
    }
}
