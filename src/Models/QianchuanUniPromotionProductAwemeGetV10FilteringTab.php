<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionProductAwemeGetV10FilteringTab
{
    public const ALL_QianchuanUniPromotionProductAwemeGetV10FilteringTab = 'ALL';
    public const BREAKTHROUGH_PRODUCT_QianchuanUniPromotionProductAwemeGetV10FilteringTab = 'BREAKTHROUGH_PRODUCT';
    public const NEW_PRODUCT_QianchuanUniPromotionProductAwemeGetV10FilteringTab = 'NEW_PRODUCT';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanUniPromotionProductAwemeGetV10FilteringTab,
        self::BREAKTHROUGH_PRODUCT_QianchuanUniPromotionProductAwemeGetV10FilteringTab,
        self::NEW_PRODUCT_QianchuanUniPromotionProductAwemeGetV10FilteringTab,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionProductAwemeGetV10FilteringTab', $value));
        }
        return (string) $value;
    }
}
