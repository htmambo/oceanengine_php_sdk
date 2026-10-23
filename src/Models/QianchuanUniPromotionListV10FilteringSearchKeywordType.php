<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionListV10FilteringSearchKeywordType
{
    public const PRODUCT_QianchuanUniPromotionListV10FilteringSearchKeywordType = 'PRODUCT';
    public const AWEME_QianchuanUniPromotionListV10FilteringSearchKeywordType = 'AWEME';
    public const AD_QianchuanUniPromotionListV10FilteringSearchKeywordType = 'AD';

    public const ALLOWED_VALUES = [
        self::PRODUCT_QianchuanUniPromotionListV10FilteringSearchKeywordType,
        self::AWEME_QianchuanUniPromotionListV10FilteringSearchKeywordType,
        self::AD_QianchuanUniPromotionListV10FilteringSearchKeywordType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionListV10FilteringSearchKeywordType', $value));
        }
        return (string) $value;
    }
}
