<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidMode
{
    public const PRICING_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidMode = 'PRICING_ACTION';
    public const PRICING_PLAY_QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidMode = 'PRICING_PLAY';

    public const ALLOWED_VALUES = [
        self::PRICING_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidMode,
        self::PRICING_PLAY_QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataDeliverySettingBidMode', $value));
        }
        return (string) $value;
    }
}
