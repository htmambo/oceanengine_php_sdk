<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO';
    public const CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_CALIBRATION_FREE_VIDEO_PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_UNION_SPLASH_VIDEO_PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionUpdateV30PromotionMaterialsVideoMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
