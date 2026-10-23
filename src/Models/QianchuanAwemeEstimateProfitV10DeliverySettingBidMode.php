<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeEstimateProfitV10DeliverySettingBidMode
{
    public const PRICING_ACTION_QianchuanAwemeEstimateProfitV10DeliverySettingBidMode = 'PRICING_ACTION';

    public const ALLOWED_VALUES = [
        self::PRICING_ACTION_QianchuanAwemeEstimateProfitV10DeliverySettingBidMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeEstimateProfitV10DeliverySettingBidMode', $value));
        }
        return (string) $value;
    }
}
