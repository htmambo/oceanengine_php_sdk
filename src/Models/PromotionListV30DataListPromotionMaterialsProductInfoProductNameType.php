<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsProductInfoProductNameType
{
    public const CUSTOM_PromotionListV30DataListPromotionMaterialsProductInfoProductNameType = 'CUSTOM';
    public const DPA_PromotionListV30DataListPromotionMaterialsProductInfoProductNameType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionListV30DataListPromotionMaterialsProductInfoProductNameType,
        self::DPA_PromotionListV30DataListPromotionMaterialsProductInfoProductNameType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsProductInfoProductNameType', $value));
        }
        return (string) $value;
    }
}
