<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsHotMaterialDeriveSubmitV30ExcludeStrategies
{
    public const AIGC_HUMAN_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'AIGC_HUMAN_REPLACE';
    public const AIGC_PRE_VIDEO_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'AIGC_PRE_VIDEO';
    public const CLIP_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'CLIP_REPLACE';
    public const DERIVE_FROM_CHOSEN_HOT_MID_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'DERIVE_FROM_CHOSEN_HOT_MID';
    public const DERIVE_FROM_INDUSTRY_HOT_PATTERN_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'DERIVE_FROM_INDUSTRY_HOT_PATTERN';
    public const HOT_PRE_VIDEO_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'HOT_PRE_VIDEO';
    public const MIX_CUT_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'MIX_CUT';
    public const PRE_VIDEO_CLIP_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'PRE_VIDEO_CLIP_REPLACE';
    public const RAW_MATERIAL_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'RAW_MATERIAL_REPLACE';
    public const ROBOT_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'ROBOT_REPLACE';
    public const SMART_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies = 'SMART_REPLACE';

    public const ALLOWED_VALUES = [
        self::AIGC_HUMAN_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::AIGC_PRE_VIDEO_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::CLIP_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::DERIVE_FROM_CHOSEN_HOT_MID_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::DERIVE_FROM_INDUSTRY_HOT_PATTERN_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::HOT_PRE_VIDEO_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::MIX_CUT_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::PRE_VIDEO_CLIP_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::RAW_MATERIAL_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::ROBOT_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
        self::SMART_REPLACE_ToolsHotMaterialDeriveSubmitV30ExcludeStrategies,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsHotMaterialDeriveSubmitV30ExcludeStrategies', $value));
        }
        return (string) $value;
    }
}
