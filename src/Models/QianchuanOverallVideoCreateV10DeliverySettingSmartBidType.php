<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallVideoCreateV10DeliverySettingSmartBidType
{
    public const SMART_BID_CUSTOM_QianchuanOverallVideoCreateV10DeliverySettingSmartBidType = 'SMART_BID_CUSTOM';

    public const ALLOWED_VALUES = [
        self::SMART_BID_CUSTOM_QianchuanOverallVideoCreateV10DeliverySettingSmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallVideoCreateV10DeliverySettingSmartBidType', $value));
        }
        return (string) $value;
    }
}
