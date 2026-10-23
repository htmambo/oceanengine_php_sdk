<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeEstimateProfitV10DeliverySettingBidType
{
    public const AUTO_BID_QianchuanAwemeEstimateProfitV10DeliverySettingBidType = 'AUTO_BID';
    public const MANUAL_BID_QianchuanAwemeEstimateProfitV10DeliverySettingBidType = 'MANUAL_BID';

    public const ALLOWED_VALUES = [
        self::AUTO_BID_QianchuanAwemeEstimateProfitV10DeliverySettingBidType,
        self::MANUAL_BID_QianchuanAwemeEstimateProfitV10DeliverySettingBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeEstimateProfitV10DeliverySettingBidType', $value));
        }
        return (string) $value;
    }
}
