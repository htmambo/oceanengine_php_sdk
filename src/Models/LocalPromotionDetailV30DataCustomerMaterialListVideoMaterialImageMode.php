<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalPromotionDetailV30DataCustomerMaterialListVideoMaterialImageMode
{
    public const IMAGE_MODE_VIDEO_LocalPromotionDetailV30DataCustomerMaterialListVideoMaterialImageMode = 'IMAGE_MODE_VIDEO';
    public const IMAGE_MODE_VIDEO_VERTICAL_LocalPromotionDetailV30DataCustomerMaterialListVideoMaterialImageMode = 'IMAGE_MODE_VIDEO_VERTICAL';

    public const ALLOWED_VALUES = [
        self::IMAGE_MODE_VIDEO_LocalPromotionDetailV30DataCustomerMaterialListVideoMaterialImageMode,
        self::IMAGE_MODE_VIDEO_VERTICAL_LocalPromotionDetailV30DataCustomerMaterialListVideoMaterialImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalPromotionDetailV30DataCustomerMaterialListVideoMaterialImageMode', $value));
        }
        return (string) $value;
    }
}
