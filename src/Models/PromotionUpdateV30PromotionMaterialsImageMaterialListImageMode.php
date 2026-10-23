<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_LARGE_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const SEARCH_AD_SMALL_IMAGE_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionMaterialsImageMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
