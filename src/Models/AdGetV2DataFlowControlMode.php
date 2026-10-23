<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataFlowControlMode
{
    public const FLOW_CONTROL_MODE_FAST_AdGetV2DataFlowControlMode = 'FLOW_CONTROL_MODE_FAST';
    public const FLOW_CONTROL_MODE_SMOOTH_AdGetV2DataFlowControlMode = 'FLOW_CONTROL_MODE_SMOOTH';
    public const FLOW_CONTROL_MODE_BALANCE_AdGetV2DataFlowControlMode = 'FLOW_CONTROL_MODE_BALANCE';
    public const FLOW_CONTROL_MODE_TWO_PHASES_AdGetV2DataFlowControlMode = 'FLOW_CONTROL_MODE_TWO_PHASES';
    public const FLOW_CONTROL_MODE_HOURLY_AdGetV2DataFlowControlMode = 'FLOW_CONTROL_MODE_HOURLY';

    public const ALLOWED_VALUES = [
        self::FLOW_CONTROL_MODE_FAST_AdGetV2DataFlowControlMode,
        self::FLOW_CONTROL_MODE_SMOOTH_AdGetV2DataFlowControlMode,
        self::FLOW_CONTROL_MODE_BALANCE_AdGetV2DataFlowControlMode,
        self::FLOW_CONTROL_MODE_TWO_PHASES_AdGetV2DataFlowControlMode,
        self::FLOW_CONTROL_MODE_HOURLY_AdGetV2DataFlowControlMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataFlowControlMode', $value));
        }
        return (string) $value;
    }
}
