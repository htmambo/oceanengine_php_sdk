<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE';
    public const CREATIVE_IMAGE_MODE_LARGE_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH';
    public const SEARCH_AD_SMALL_IMAGE_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_SINGLE_IMAGE_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionRelatedProductImageMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
