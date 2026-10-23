<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsNoBidSuggestBidV2FilteringFlowControlMode
{
    public const FLOW_CONTROL_MODE_FAST_ToolsNoBidSuggestBidV2FilteringFlowControlMode = 'FLOW_CONTROL_MODE_FAST';
    public const FLOW_CONTROL_MODE_SMOOTH_ToolsNoBidSuggestBidV2FilteringFlowControlMode = 'FLOW_CONTROL_MODE_SMOOTH';
    public const FLOW_CONTROL_MODE_BALANCE_ToolsNoBidSuggestBidV2FilteringFlowControlMode = 'FLOW_CONTROL_MODE_BALANCE';
    public const FLOW_CONTROL_MODE_TWO_PHASES_ToolsNoBidSuggestBidV2FilteringFlowControlMode = 'FLOW_CONTROL_MODE_TWO_PHASES';
    public const FLOW_CONTROL_MODE_HOURLY_ToolsNoBidSuggestBidV2FilteringFlowControlMode = 'FLOW_CONTROL_MODE_HOURLY';

    public const ALLOWED_VALUES = [
        self::FLOW_CONTROL_MODE_FAST_ToolsNoBidSuggestBidV2FilteringFlowControlMode,
        self::FLOW_CONTROL_MODE_SMOOTH_ToolsNoBidSuggestBidV2FilteringFlowControlMode,
        self::FLOW_CONTROL_MODE_BALANCE_ToolsNoBidSuggestBidV2FilteringFlowControlMode,
        self::FLOW_CONTROL_MODE_TWO_PHASES_ToolsNoBidSuggestBidV2FilteringFlowControlMode,
        self::FLOW_CONTROL_MODE_HOURLY_ToolsNoBidSuggestBidV2FilteringFlowControlMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsNoBidSuggestBidV2FilteringFlowControlMode', $value));
        }
        return (string) $value;
    }
}
