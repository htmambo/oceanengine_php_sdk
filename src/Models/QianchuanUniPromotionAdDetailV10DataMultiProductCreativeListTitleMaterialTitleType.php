<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType
{
    public const AWEME_CAROUSEL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType = 'AWEME_CAROUSEL';
    public const AWEME_VIDEO_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType = 'AWEME_VIDEO';
    public const COMMODITY_CARD_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType = 'COMMODITY_CARD';
    public const CUSTOM_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType = 'CUSTOM';
    public const DEFAULT_CAROUSEL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType = 'DEFAULT_CAROUSEL';

    public const ALLOWED_VALUES = [
        self::AWEME_CAROUSEL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType,
        self::AWEME_VIDEO_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType,
        self::COMMODITY_CARD_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType,
        self::CUSTOM_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType,
        self::DEFAULT_CAROUSEL_QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniPromotionAdDetailV10DataMultiProductCreativeListTitleMaterialTitleType', $value));
        }
        return (string) $value;
    }
}
