<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandDataV30DataReportType
{
    public const AD_ReportBrandDataV30DataReportType = 'AD';
    public const CAMPAIGN_ReportBrandDataV30DataReportType = 'CAMPAIGN';
    public const CREATIVE_ReportBrandDataV30DataReportType = 'CREATIVE';
    public const MATERIAL_ReportBrandDataV30DataReportType = 'MATERIAL';
    public const ORDER_ReportBrandDataV30DataReportType = 'ORDER';

    public const ALLOWED_VALUES = [
        self::AD_ReportBrandDataV30DataReportType,
        self::CAMPAIGN_ReportBrandDataV30DataReportType,
        self::CREATIVE_ReportBrandDataV30DataReportType,
        self::MATERIAL_ReportBrandDataV30DataReportType,
        self::ORDER_ReportBrandDataV30DataReportType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandDataV30DataReportType', $value));
        }
        return (string) $value;
    }
}
