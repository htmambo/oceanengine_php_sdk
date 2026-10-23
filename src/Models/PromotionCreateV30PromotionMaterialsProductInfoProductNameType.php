<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionMaterialsProductInfoProductNameType
{
    public const CUSTOM_PromotionCreateV30PromotionMaterialsProductInfoProductNameType = 'CUSTOM';
    public const DPA_PromotionCreateV30PromotionMaterialsProductInfoProductNameType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionCreateV30PromotionMaterialsProductInfoProductNameType,
        self::DPA_PromotionCreateV30PromotionMaterialsProductInfoProductNameType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionMaterialsProductInfoProductNameType', $value));
        }
        return (string) $value;
    }
}
