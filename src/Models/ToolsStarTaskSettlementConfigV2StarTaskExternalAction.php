<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsStarTaskSettlementConfigV2StarTaskExternalAction
{
    public const AD_CONVERT_TYPE_ACTIVE_ToolsStarTaskSettlementConfigV2StarTaskExternalAction = 'AD_CONVERT_TYPE_ACTIVE';
    public const AD_CONVERT_TYPE_ACTIVE_REGISTER_ToolsStarTaskSettlementConfigV2StarTaskExternalAction = 'AD_CONVERT_TYPE_ACTIVE_REGISTER';
    public const AD_CONVERT_TYPE_PAY_ToolsStarTaskSettlementConfigV2StarTaskExternalAction = 'AD_CONVERT_TYPE_PAY';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_ACTIVE_ToolsStarTaskSettlementConfigV2StarTaskExternalAction,
        self::AD_CONVERT_TYPE_ACTIVE_REGISTER_ToolsStarTaskSettlementConfigV2StarTaskExternalAction,
        self::AD_CONVERT_TYPE_PAY_ToolsStarTaskSettlementConfigV2StarTaskExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsStarTaskSettlementConfigV2StarTaskExternalAction', $value));
        }
        return (string) $value;
    }
}
