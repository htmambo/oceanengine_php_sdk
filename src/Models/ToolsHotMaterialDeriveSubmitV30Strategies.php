<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsHotMaterialDeriveSubmitV30Strategies
{
    public const AIGC_HUMAN_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies = 'AIGC_HUMAN_REPLACE';
    public const AIGC_PRE_VIDEO_ToolsHotMaterialDeriveSubmitV30Strategies = 'AIGC_PRE_VIDEO';
    public const CLIP_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies = 'CLIP_REPLACE';
    public const DERIVE_FROM_CHOSEN_HOT_MID_ToolsHotMaterialDeriveSubmitV30Strategies = 'DERIVE_FROM_CHOSEN_HOT_MID';
    public const DERIVE_FROM_INDUSTRY_HOT_PATTERN_ToolsHotMaterialDeriveSubmitV30Strategies = 'DERIVE_FROM_INDUSTRY_HOT_PATTERN';
    public const HOT_PRE_VIDEO_ToolsHotMaterialDeriveSubmitV30Strategies = 'HOT_PRE_VIDEO';
    public const MIX_CUT_ToolsHotMaterialDeriveSubmitV30Strategies = 'MIX_CUT';
    public const PRE_VIDEO_CLIP_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies = 'PRE_VIDEO_CLIP_REPLACE';
    public const RAW_MATERIAL_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies = 'RAW_MATERIAL_REPLACE';
    public const ROBOT_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies = 'ROBOT_REPLACE';
    public const SMART_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies = 'SMART_REPLACE';

    public const ALLOWED_VALUES = [
        self::AIGC_HUMAN_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::AIGC_PRE_VIDEO_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::CLIP_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::DERIVE_FROM_CHOSEN_HOT_MID_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::DERIVE_FROM_INDUSTRY_HOT_PATTERN_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::HOT_PRE_VIDEO_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::MIX_CUT_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::PRE_VIDEO_CLIP_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::RAW_MATERIAL_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::ROBOT_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies,
        self::SMART_REPLACE_ToolsHotMaterialDeriveSubmitV30Strategies,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsHotMaterialDeriveSubmitV30Strategies', $value));
        }
        return (string) $value;
    }
}
