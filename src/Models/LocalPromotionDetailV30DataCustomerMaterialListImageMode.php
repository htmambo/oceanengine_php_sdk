<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionDetailV30DataCustomerMaterialListImageMode
{
    public const IMAGE_MODE_VIDEO_LocalPromotionDetailV30DataCustomerMaterialListImageMode = 'IMAGE_MODE_VIDEO';
    public const IMAGE_MODE_VIDEO_VERTICAL_LocalPromotionDetailV30DataCustomerMaterialListImageMode = 'IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::IMAGE_MODE_VIDEO_LocalPromotionDetailV30DataCustomerMaterialListImageMode,
        self::IMAGE_MODE_VIDEO_VERTICAL_LocalPromotionDetailV30DataCustomerMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionDetailV30DataCustomerMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
