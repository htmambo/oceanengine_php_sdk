<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionProductGetV10OrderField
{
    public const SELL_NUM_QianchuanUniPromotionProductGetV10OrderField = 'SELL_NUM';
    public const STOCK_QianchuanUniPromotionProductGetV10OrderField = 'STOCK';
    public const AUDIT_TIME_QianchuanUniPromotionProductGetV10OrderField = 'AUDIT_TIME';

    public const ALLOWED_VALUES = [
        self::SELL_NUM_QianchuanUniPromotionProductGetV10OrderField,
        self::STOCK_QianchuanUniPromotionProductGetV10OrderField,
        self::AUDIT_TIME_QianchuanUniPromotionProductGetV10OrderField,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionProductGetV10OrderField', $value));
        }
        return (string) $value;
    }
}
