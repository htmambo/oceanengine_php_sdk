<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionRelatedProductVideoMaterialListIsCarryMaterial
{
    public const TRUE_PromotionListV30DataListPromotionRelatedProductVideoMaterialListIsCarryMaterial = 'TRUE';
    public const FALSE_PromotionListV30DataListPromotionRelatedProductVideoMaterialListIsCarryMaterial = 'FALSE';

    public const ALLOWED_VALUES = [
        self::TRUE_PromotionListV30DataListPromotionRelatedProductVideoMaterialListIsCarryMaterial,
        self::FALSE_PromotionListV30DataListPromotionRelatedProductVideoMaterialListIsCarryMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionRelatedProductVideoMaterialListIsCarryMaterial', $value));
        }
        return (string) $value;
    }
}
