<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy
{
    public const AIGC_HUMAN_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'AIGC_HUMAN_REPLACE';
    public const AIGC_PRE_VIDEO_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'AIGC_PRE_VIDEO';
    public const CLIP_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'CLIP_REPLACE';
    public const DERIVE_FROM_CHOSEN_HOT_MID_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'DERIVE_FROM_CHOSEN_HOT_MID';
    public const DERIVE_FROM_INDUSTRY_HOT_PATTERN_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'DERIVE_FROM_INDUSTRY_HOT_PATTERN';
    public const HOT_PRE_VIDEO_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'HOT_PRE_VIDEO';
    public const MIX_CUT_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'MIX_CUT';
    public const PRE_VIDEO_CLIP_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'PRE_VIDEO_CLIP_REPLACE';
    public const RAW_MATERIAL_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'RAW_MATERIAL_REPLACE';
    public const ROBOT_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'ROBOT_REPLACE';
    public const SMART_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy = 'SMART_REPLACE';

    public const ALLOWED_VALUES = [
        self::AIGC_HUMAN_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::AIGC_PRE_VIDEO_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::CLIP_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::DERIVE_FROM_CHOSEN_HOT_MID_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::DERIVE_FROM_INDUSTRY_HOT_PATTERN_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::HOT_PRE_VIDEO_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::MIX_CUT_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::PRE_VIDEO_CLIP_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::RAW_MATERIAL_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::ROBOT_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
        self::SMART_REPLACE_ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsHotMaterialDeriveGetV30DataTaskDetailsDeriveMaterialsStrategyDetailStrategy', $value));
        }
        return (string) $value;
    }
}
