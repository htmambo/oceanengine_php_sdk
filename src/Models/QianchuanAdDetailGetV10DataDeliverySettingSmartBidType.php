<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataDeliverySettingSmartBidType
{
    public const SMART_BID_CONSERVATIVE_QianchuanAdDetailGetV10DataDeliverySettingSmartBidType = 'SMART_BID_CONSERVATIVE';
    public const SMART_BID_CUSTOM_QianchuanAdDetailGetV10DataDeliverySettingSmartBidType = 'SMART_BID_CUSTOM';

    public const ALLOWED_VALUES = [
        self::SMART_BID_CONSERVATIVE_QianchuanAdDetailGetV10DataDeliverySettingSmartBidType,
        self::SMART_BID_CUSTOM_QianchuanAdDetailGetV10DataDeliverySettingSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataDeliverySettingSmartBidType', $value));
        }
        return (string) $value;
    }
}
