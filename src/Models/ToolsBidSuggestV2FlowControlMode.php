<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidSuggestV2FlowControlMode
{
    public const FLOW_CONTROL_MODE_FAST_ToolsBidSuggestV2FlowControlMode = 'FLOW_CONTROL_MODE_FAST';
    public const FLOW_CONTROL_MODE_SMOOTH_ToolsBidSuggestV2FlowControlMode = 'FLOW_CONTROL_MODE_SMOOTH';
    public const FLOW_CONTROL_MODE_BALANCE_ToolsBidSuggestV2FlowControlMode = 'FLOW_CONTROL_MODE_BALANCE';
    public const FLOW_CONTROL_MODE_TWO_PHASES_ToolsBidSuggestV2FlowControlMode = 'FLOW_CONTROL_MODE_TWO_PHASES';
    public const FLOW_CONTROL_MODE_HOURLY_ToolsBidSuggestV2FlowControlMode = 'FLOW_CONTROL_MODE_HOURLY';

    public const ALLOWED_VALUES = [
        self::FLOW_CONTROL_MODE_FAST_ToolsBidSuggestV2FlowControlMode,
        self::FLOW_CONTROL_MODE_SMOOTH_ToolsBidSuggestV2FlowControlMode,
        self::FLOW_CONTROL_MODE_BALANCE_ToolsBidSuggestV2FlowControlMode,
        self::FLOW_CONTROL_MODE_TWO_PHASES_ToolsBidSuggestV2FlowControlMode,
        self::FLOW_CONTROL_MODE_HOURLY_ToolsBidSuggestV2FlowControlMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidSuggestV2FlowControlMode', $value));
        }
        return (string) $value;
    }
}
