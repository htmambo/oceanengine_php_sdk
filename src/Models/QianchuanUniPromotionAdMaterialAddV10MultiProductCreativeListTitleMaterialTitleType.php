<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListTitleMaterialTitleType
{
    public const COMMODITY_CARD_QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListTitleMaterialTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListTitleMaterialTitleType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::COMMODITY_CARD_QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListTitleMaterialTitleType,
        self::CUSTOM_QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListTitleMaterialTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdMaterialAddV10MultiProductCreativeListTitleMaterialTitleType', $value));
        }
        return (string) $value;
    }
}
