<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class OcProjectMaterialGetV30DataImageMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_LARGE_OcProjectMaterialGetV30DataImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_OcProjectMaterialGetV30DataImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_OcProjectMaterialGetV30DataImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const SEARCH_AD_SMALL_IMAGE_OcProjectMaterialGetV30DataImageMaterialListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_OcProjectMaterialGetV30DataImageMaterialListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_LARGE_OcProjectMaterialGetV30DataImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_OcProjectMaterialGetV30DataImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_OcProjectMaterialGetV30DataImageMaterialListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_OcProjectMaterialGetV30DataImageMaterialListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_OcProjectMaterialGetV30DataImageMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum OcProjectMaterialGetV30DataImageMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
