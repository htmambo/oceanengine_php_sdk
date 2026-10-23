<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionCreateV30PromotionRelatedProductVideoMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
