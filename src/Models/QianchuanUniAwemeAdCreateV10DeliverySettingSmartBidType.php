<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAdCreateV10DeliverySettingSmartBidType
{
    public const SMART_BID_CONSERVATIVE_QianchuanUniAwemeAdCreateV10DeliverySettingSmartBidType = 'SMART_BID_CONSERVATIVE';
    public const SMART_BID_CUSTOM_QianchuanUniAwemeAdCreateV10DeliverySettingSmartBidType = 'SMART_BID_CUSTOM';

    public const ALLOWED_VALUES = [
        self::SMART_BID_CONSERVATIVE_QianchuanUniAwemeAdCreateV10DeliverySettingSmartBidType,
        self::SMART_BID_CUSTOM_QianchuanUniAwemeAdCreateV10DeliverySettingSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAdCreateV10DeliverySettingSmartBidType', $value));
        }
        return (string) $value;
    }
}
