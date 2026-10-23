<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringSmartBidType
{
    public const SMART_BID_CONSERVATIVE_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringSmartBidType = 'SMART_BID_CONSERVATIVE';
    public const SMART_BID_CUSTOM_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringSmartBidType = 'SMART_BID_CUSTOM';

    public const ALLOWED_VALUES = [
        self::SMART_BID_CONSERVATIVE_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringSmartBidType,
        self::SMART_BID_CUSTOM_QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDimensionDataRoomGetV10FilteringSmartBidType', $value));
        }
        return (string) $value;
    }
}
