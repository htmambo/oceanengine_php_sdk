<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionMaterialsProductInfoProductSellingPointType
{
    public const CUSTOM_PromotionCreateV30PromotionMaterialsProductInfoProductSellingPointType = 'CUSTOM';
    public const DPA_PromotionCreateV30PromotionMaterialsProductInfoProductSellingPointType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionCreateV30PromotionMaterialsProductInfoProductSellingPointType,
        self::DPA_PromotionCreateV30PromotionMaterialsProductInfoProductSellingPointType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionMaterialsProductInfoProductSellingPointType', $value));
        }
        return (string) $value;
    }
}
