<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderCreateV10DeliverySettingBidMode
{
    public const PRICING_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingBidMode = 'PRICING_ACTION';

    public const ALLOWED_VALUES = [
        self::PRICING_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingBidMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderCreateV10DeliverySettingBidMode', $value));
        }
        return (string) $value;
    }
}
