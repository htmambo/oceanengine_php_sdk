<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionListV30DataListPromotionMaterialsDecorationMaterialImageMode
{
    public const CREATIVE_IMAGE_MODE_DECORATION_COUPON_PromotionListV30DataListPromotionMaterialsDecorationMaterialImageMode = 'CREATIVE_IMAGE_MODE_DECORATION_COUPON';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_DECORATION_COUPON_PromotionListV30DataListPromotionMaterialsDecorationMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionListV30DataListPromotionMaterialsDecorationMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
