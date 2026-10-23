<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode
{
    public const CREATIVE_IMAGE_MODE_LARGE_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE';
    public const CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_LARGE_VERTICAL';
    public const CREATIVE_IMAGE_MODE_SMALL_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode = 'CREATIVE_IMAGE_MODE_SMALL';
    public const SEARCH_AD_SMALL_IMAGE_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode = 'SEARCH_AD_SMALL_IMAGE';
    public const TOUTIAO_SEARCH_AD_IMAGE_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode = 'TOUTIAO_SEARCH_AD_IMAGE';

    public const ALLOWED_VALUES = [
        self::CREATIVE_IMAGE_MODE_LARGE_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_LARGE_VERTICAL_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode,
        self::CREATIVE_IMAGE_MODE_SMALL_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode,
        self::SEARCH_AD_SMALL_IMAGE_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode,
        self::TOUTIAO_SEARCH_AD_IMAGE_ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsProjectMaterialTypeUpdateV30MaterialListImageMaterialListImageMode', $value));
        }
        return (string) $value;
    }
}
