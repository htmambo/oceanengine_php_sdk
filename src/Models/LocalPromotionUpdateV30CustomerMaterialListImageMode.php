<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionUpdateV30CustomerMaterialListImageMode
{
    public const IMAGE_MODE_VIDEO_LocalPromotionUpdateV30CustomerMaterialListImageMode = 'IMAGE_MODE_VIDEO';
    public const IMAGE_MODE_VIDEO_VERTICAL_LocalPromotionUpdateV30CustomerMaterialListImageMode = 'IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::IMAGE_MODE_VIDEO_LocalPromotionUpdateV30CustomerMaterialListImageMode,
        self::IMAGE_MODE_VIDEO_VERTICAL_LocalPromotionUpdateV30CustomerMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionUpdateV30CustomerMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
