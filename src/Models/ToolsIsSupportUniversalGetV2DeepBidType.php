<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsIsSupportUniversalGetV2DeepBidType
{
    public const AUTO_MIN_SECOND_STAGE_ToolsIsSupportUniversalGetV2DeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const BID_PER_ACTION_ToolsIsSupportUniversalGetV2DeepBidType = 'BID_PER_ACTION';
    public const DEEP_BID_DEFAULT_ToolsIsSupportUniversalGetV2DeepBidType = 'DEEP_BID_DEFAULT';
    public const DEEP_BID_MIN_ToolsIsSupportUniversalGetV2DeepBidType = 'DEEP_BID_MIN';
    public const DEEP_BID_PACING_ToolsIsSupportUniversalGetV2DeepBidType = 'DEEP_BID_PACING';
    public const MIN_SECOND_STAGE_ToolsIsSupportUniversalGetV2DeepBidType = 'MIN_SECOND_STAGE';
    public const PACING_SECOND_STAGE_ToolsIsSupportUniversalGetV2DeepBidType = 'PACING_SECOND_STAGE';
    public const ROI_COEFFICIENT_ToolsIsSupportUniversalGetV2DeepBidType = 'ROI_COEFFICIENT';
    public const ROI_PACING_ToolsIsSupportUniversalGetV2DeepBidType = 'ROI_PACING';
    public const SMARTBID_ToolsIsSupportUniversalGetV2DeepBidType = 'SMARTBID';

    public const ALLOWED_VALUES = [
        self::AUTO_MIN_SECOND_STAGE_ToolsIsSupportUniversalGetV2DeepBidType,
        self::BID_PER_ACTION_ToolsIsSupportUniversalGetV2DeepBidType,
        self::DEEP_BID_DEFAULT_ToolsIsSupportUniversalGetV2DeepBidType,
        self::DEEP_BID_MIN_ToolsIsSupportUniversalGetV2DeepBidType,
        self::DEEP_BID_PACING_ToolsIsSupportUniversalGetV2DeepBidType,
        self::MIN_SECOND_STAGE_ToolsIsSupportUniversalGetV2DeepBidType,
        self::PACING_SECOND_STAGE_ToolsIsSupportUniversalGetV2DeepBidType,
        self::ROI_COEFFICIENT_ToolsIsSupportUniversalGetV2DeepBidType,
        self::ROI_PACING_ToolsIsSupportUniversalGetV2DeepBidType,
        self::SMARTBID_ToolsIsSupportUniversalGetV2DeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsIsSupportUniversalGetV2DeepBidType', $value));
        }
        return (string) $value;
    }
}
