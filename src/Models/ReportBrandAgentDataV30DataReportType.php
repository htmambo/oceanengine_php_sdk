<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportBrandAgentDataV30DataReportType
{
    public const AD_ReportBrandAgentDataV30DataReportType = 'AD';
    public const CAMPAIGN_ReportBrandAgentDataV30DataReportType = 'CAMPAIGN';
    public const CREATIVE_ReportBrandAgentDataV30DataReportType = 'CREATIVE';
    public const MATERIAL_ReportBrandAgentDataV30DataReportType = 'MATERIAL';
    public const ORDER_ReportBrandAgentDataV30DataReportType = 'ORDER';

    public const ALLOWED_VALUES = [
        self::AD_ReportBrandAgentDataV30DataReportType,
        self::CAMPAIGN_ReportBrandAgentDataV30DataReportType,
        self::CREATIVE_ReportBrandAgentDataV30DataReportType,
        self::MATERIAL_ReportBrandAgentDataV30DataReportType,
        self::ORDER_ReportBrandAgentDataV30DataReportType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportBrandAgentDataV30DataReportType', $value));
        }
        return (string) $value;
    }
}
