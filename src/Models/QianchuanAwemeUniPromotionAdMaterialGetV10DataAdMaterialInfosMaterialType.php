<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType
{
    public const CAROUSEL_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType = 'CAROUSEL';
    public const IMAGE_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType = 'IMAGE';
    public const OTHER_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType = 'OTHER';
    public const VIDEO_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::CAROUSEL_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType,
        self::IMAGE_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType,
        self::OTHER_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType,
        self::VIDEO_QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeUniPromotionAdMaterialGetV10DataAdMaterialInfosMaterialType', $value));
        }
        return (string) $value;
    }
}
