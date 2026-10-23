<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType
{
    public const CAROUSEL_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType = 'CAROUSEL';
    public const IMAGE_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType = 'IMAGE';
    public const OTHER_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType = 'OTHER';
    public const VIDEO_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::CAROUSEL_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType,
        self::IMAGE_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType,
        self::OTHER_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType,
        self::VIDEO_QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionAdMaterialGetV10FilterMaterialType', $value));
        }
        return (string) $value;
    }
}
