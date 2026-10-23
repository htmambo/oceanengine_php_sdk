<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_LARGE_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const SEARCH_AD_SMALL_IMAGE_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_LARGE_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30ProjectMaterialsImageMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
