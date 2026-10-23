<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy
{
    public const AIGC_HUMAN_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'AIGC_HUMAN_REPLACE';
    public const AIGC_PRE_VIDEO_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'AIGC_PRE_VIDEO';
    public const CLIP_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'CLIP_REPLACE';
    public const DERIVE_FROM_CHOSEN_HOT_MID_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'DERIVE_FROM_CHOSEN_HOT_MID';
    public const DERIVE_FROM_INDUSTRY_HOT_PATTERN_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'DERIVE_FROM_INDUSTRY_HOT_PATTERN';
    public const HOT_PRE_VIDEO_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'HOT_PRE_VIDEO';
    public const MIX_CUT_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'MIX_CUT';
    public const PRE_VIDEO_CLIP_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'PRE_VIDEO_CLIP_REPLACE';
    public const RAW_MATERIAL_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'RAW_MATERIAL_REPLACE';
    public const ROBOT_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'ROBOT_REPLACE';
    public const SMART_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy = 'SMART_REPLACE';

    public const ALLOWED_VALUES = [
        self::AIGC_HUMAN_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::AIGC_PRE_VIDEO_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::CLIP_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::DERIVE_FROM_CHOSEN_HOT_MID_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::DERIVE_FROM_INDUSTRY_HOT_PATTERN_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::HOT_PRE_VIDEO_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::MIX_CUT_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::PRE_VIDEO_CLIP_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::RAW_MATERIAL_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::ROBOT_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
        self::SMART_REPLACE_ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsHotMaterialDeriveListV30DataDataDeriveMaterialsStrategyDetailStrategy', $value));
        }
        return (string) $value;
    }
}
