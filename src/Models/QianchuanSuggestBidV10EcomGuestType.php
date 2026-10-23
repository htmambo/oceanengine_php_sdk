<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanSuggestBidV10EcomGuestType
{
    public const NO_BUY_QianchuanSuggestBidV10EcomGuestType = 'NO_BUY';
    public const NO_BUY_BRAND_QianchuanSuggestBidV10EcomGuestType = 'NO_BUY_BRAND';
    public const NO_BUY_DOUYIN_QianchuanSuggestBidV10EcomGuestType = 'NO_BUY_DOUYIN';

    public const ALLOWED_VALUES = [
        self::NO_BUY_QianchuanSuggestBidV10EcomGuestType,
        self::NO_BUY_BRAND_QianchuanSuggestBidV10EcomGuestType,
        self::NO_BUY_DOUYIN_QianchuanSuggestBidV10EcomGuestType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanSuggestBidV10EcomGuestType', $value));
        }
        return (string) $value;
    }
}
