<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsVideoMaterialListIsHiddenWatermark
{
    public const TRUE_PromotionListV30DataListPromotionMaterialsVideoMaterialListIsHiddenWatermark = 'TRUE';
    public const FALSE_PromotionListV30DataListPromotionMaterialsVideoMaterialListIsHiddenWatermark = 'FALSE';

    public const ALLOWED_VALUES = [
        self::TRUE_PromotionListV30DataListPromotionMaterialsVideoMaterialListIsHiddenWatermark,
        self::FALSE_PromotionListV30DataListPromotionMaterialsVideoMaterialListIsHiddenWatermark,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsVideoMaterialListIsHiddenWatermark', $value));
        }
        return (string) $value;
    }
}
