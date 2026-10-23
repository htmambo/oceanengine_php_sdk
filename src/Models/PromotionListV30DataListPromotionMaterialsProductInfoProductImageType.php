<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsProductInfoProductImageType
{
    public const CUSTOM_PromotionListV30DataListPromotionMaterialsProductInfoProductImageType = 'CUSTOM';
    public const DPA_PromotionListV30DataListPromotionMaterialsProductInfoProductImageType = 'DPA';

    public const ALLOWED_VALUES = [
        self::CUSTOM_PromotionListV30DataListPromotionMaterialsProductInfoProductImageType,
        self::DPA_PromotionListV30DataListPromotionMaterialsProductInfoProductImageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsProductInfoProductImageType', $value));
        }
        return (string) $value;
    }
}
