<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidType
{
    public const AUTO_BID_QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidType = 'AUTO_BID';
    public const MANUAL_BID_QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidType = 'MANUAL_BID';

    public const ALLOWED_VALUES = [
        self::AUTO_BID_QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidType,
        self::MANUAL_BID_QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidType', $value));
        }
        return (string) $value;
    }
}
