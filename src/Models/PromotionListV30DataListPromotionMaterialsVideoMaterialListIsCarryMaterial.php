<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsVideoMaterialListIsCarryMaterial
{
    public const TRUE_PromotionListV30DataListPromotionMaterialsVideoMaterialListIsCarryMaterial = 'TRUE';
    public const FALSE_PromotionListV30DataListPromotionMaterialsVideoMaterialListIsCarryMaterial = 'FALSE';

    public const ALLOWED_VALUES = [
        self::TRUE_PromotionListV30DataListPromotionMaterialsVideoMaterialListIsCarryMaterial,
        self::FALSE_PromotionListV30DataListPromotionMaterialsVideoMaterialListIsCarryMaterial,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsVideoMaterialListIsCarryMaterial', $value));
        }
        return (string) $value;
    }
}
