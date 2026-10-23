<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionMaterialsProductInfoProductNameType
{
    public const CUSTOM_PromotionUpdateV30PromotionMaterialsProductInfoProductNameType = 'CUSTOM';
    public const DPA_PromotionUpdateV30PromotionMaterialsProductInfoProductNameType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionUpdateV30PromotionMaterialsProductInfoProductNameType,
        self::DPA_PromotionUpdateV30PromotionMaterialsProductInfoProductNameType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionMaterialsProductInfoProductNameType', $value));
        }
        return (string) $value;
    }
}
