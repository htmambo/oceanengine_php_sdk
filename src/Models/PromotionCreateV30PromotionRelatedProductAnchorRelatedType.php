<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionRelatedProductAnchorRelatedType
{
    public const AUTO_PromotionCreateV30PromotionRelatedProductAnchorRelatedType = 'AUTO';
    public const OFF_PromotionCreateV30PromotionRelatedProductAnchorRelatedType = 'OFF';
    public const SELECT_PromotionCreateV30PromotionRelatedProductAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_PromotionCreateV30PromotionRelatedProductAnchorRelatedType,
        self::OFF_PromotionCreateV30PromotionRelatedProductAnchorRelatedType,
        self::SELECT_PromotionCreateV30PromotionRelatedProductAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionRelatedProductAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
