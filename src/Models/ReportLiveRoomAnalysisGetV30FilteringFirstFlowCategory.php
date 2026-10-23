<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory
{
    public const AD_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory = 'AD';
    public const BRAND_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory = 'BRAND';
    public const DOU_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory = 'DOU';
    public const NATURAL_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory = 'NATURAL';
    public const OTHER_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory = 'OTHER';

    public const ALLOWED_VALUES = [
        self::AD_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory,
        self::BRAND_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory,
        self::DOU_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory,
        self::NATURAL_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory,
        self::OTHER_ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportLiveRoomAnalysisGetV30FilteringFirstFlowCategory', $value));
        }
        return (string) $value;
    }
}
