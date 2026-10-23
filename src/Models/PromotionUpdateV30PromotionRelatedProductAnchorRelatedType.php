<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionRelatedProductAnchorRelatedType
{
    public const AUTO_PromotionUpdateV30PromotionRelatedProductAnchorRelatedType = 'AUTO';
    public const OFF_PromotionUpdateV30PromotionRelatedProductAnchorRelatedType = 'OFF';
    public const SELECT_PromotionUpdateV30PromotionRelatedProductAnchorRelatedType = 'SELECT';

    public const ALLOWED_VALUES = [
        self::AUTO_PromotionUpdateV30PromotionRelatedProductAnchorRelatedType,
        self::OFF_PromotionUpdateV30PromotionRelatedProductAnchorRelatedType,
        self::SELECT_PromotionUpdateV30PromotionRelatedProductAnchorRelatedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionRelatedProductAnchorRelatedType', $value));
        }
        return (string) $value;
    }
}
