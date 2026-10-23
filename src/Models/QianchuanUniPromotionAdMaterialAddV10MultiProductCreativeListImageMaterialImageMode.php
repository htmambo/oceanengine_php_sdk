<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListImageMaterialImageMode
{
    public const RECTANGLE_QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListImageMaterialImageMode = 'RECTANGLE';
    public const SQUARE_QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListImageMaterialImageMode = 'SQUARE';

    public const ALLOWED_VALUES = [
        self::RECTANGLE_QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListImageMaterialImageMode,
        self::SQUARE_QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListImageMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListImageMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
