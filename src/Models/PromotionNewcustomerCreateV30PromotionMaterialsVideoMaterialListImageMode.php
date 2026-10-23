<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PromotionNewcustomerCreateV30PromotionMaterialsVideoMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_VIDEO_PromotionNewcustomerCreateV30PromotionMaterialsVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO';
    public const CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionNewcustomerCreateV30PromotionMaterialsVideoMaterialListImageMode = 'CREATIVE_IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_VIDEO_PromotionNewcustomerCreateV30PromotionMaterialsVideoMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_VIDEO_VERTICAL_PromotionNewcustomerCreateV30PromotionMaterialsVideoMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PromotionNewcustomerCreateV30PromotionMaterialsVideoMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
