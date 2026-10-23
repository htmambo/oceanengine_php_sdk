<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringSmartBidType
{
    public const SMART_BID_CONSERVATIVE_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringSmartBidType = 'SMART_BID_CONSERVATIVE';
    public const SMART_BID_CUSTOM_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringSmartBidType = 'SMART_BID_CUSTOM';

    public const ALLOWED_VALUES = [
        self::SMART_BID_CONSERVATIVE_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringSmartBidType,
        self::SMART_BID_CUSTOM_QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringSmartBidType', $value));
        }
        return (string) $value;
    }
}
