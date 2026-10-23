<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdControlTaskCreateV10SmartBidType
{
    public const SMART_BID_CONSERVATIVE_QianchuanUniPromotionAdControlTaskCreateV10SmartBidType = 'SMART_BID_CONSERVATIVE';
    public const SMART_BID_CUSTOM_QianchuanUniPromotionAdControlTaskCreateV10SmartBidType = 'SMART_BID_CUSTOM';

    public const ALLOWED_VALUES = [
        self::SMART_BID_CONSERVATIVE_QianchuanUniPromotionAdControlTaskCreateV10SmartBidType,
        self::SMART_BID_CUSTOM_QianchuanUniPromotionAdControlTaskCreateV10SmartBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdControlTaskCreateV10SmartBidType', $value));
        }
        return (string) $value;
    }
}
