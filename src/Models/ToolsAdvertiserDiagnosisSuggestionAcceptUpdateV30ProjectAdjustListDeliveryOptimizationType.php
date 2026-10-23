<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType
{
    public const OPTIMIZE_COST_EFFECT_UP_COST_ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType = 'OPTIMIZE_COST_EFFECT_UP_COST';
    public const OPTIMIZE_COST_EFFECT_UP_ROI_ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType = 'OPTIMIZE_COST_EFFECT_UP_ROI';
    public const OPTIMIZE_COST_EFFECT_UP_ROI_STABLE_COST_ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType = 'OPTIMIZE_COST_EFFECT_UP_ROI_STABLE_COST';
    public const OPTIMIZE_COST_EFFECT_DOWN_COST_ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType = 'OPTIMIZE_COST_EFFECT_DOWN_COST';

    public const ALLOWED_VALUES = [
        self::OPTIMIZE_COST_EFFECT_UP_COST_ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType,
        self::OPTIMIZE_COST_EFFECT_UP_ROI_ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType,
        self::OPTIMIZE_COST_EFFECT_UP_ROI_STABLE_COST_ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType,
        self::OPTIMIZE_COST_EFFECT_DOWN_COST_ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdvertiserDiagnosisSuggestionAcceptUpdateV30ProjectAdjustListDeliveryOptimizationType', $value));
        }
        return (string) $value;
    }
}
