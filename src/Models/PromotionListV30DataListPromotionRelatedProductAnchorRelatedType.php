<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionRelatedProductAnchorRelatedType
{
    public const AUTO_PromotionListV30DataListPromotionRelatedProductAnchorRelatedType = 'AUTO';
    public const OFF_PromotionListV30DataListPromotionRelatedProductAnchorRelatedType = 'OFF';
    public const SELECT_PromotionListV30DataListPromotionRelatedProductAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_PromotionListV30DataListPromotionRelatedProductAnchorRelatedType,
        self::OFF_PromotionListV30DataListPromotionRelatedProductAnchorRelatedType,
        self::SELECT_PromotionListV30DataListPromotionRelatedProductAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionRelatedProductAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
