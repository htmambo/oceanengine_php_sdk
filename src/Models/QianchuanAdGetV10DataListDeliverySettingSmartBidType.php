<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListDeliverySettingSmartBidType
{
    public const SMART_BID_CONSERVATIVE_QianchuanAdGetV10DataListDeliverySettingSmartBidType = 'SMART_BID_CONSERVATIVE';
    public const SMART_BID_CUSTOM_QianchuanAdGetV10DataListDeliverySettingSmartBidType = 'SMART_BID_CUSTOM';

    public const ALLOWED_VALUES = [
        self::SMART_BID_CONSERVATIVE_QianchuanAdGetV10DataListDeliverySettingSmartBidType,
        self::SMART_BID_CUSTOM_QianchuanAdGetV10DataListDeliverySettingSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListDeliverySettingSmartBidType', $value));
        }
        return (string) $value;
    }
}
