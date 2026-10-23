<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2ActivateType
{
    public const ONE_MONTH_2_THREE_MONTH_ToolsEstimateAudienceV2ActivateType = 'ONE_MONTH_2_THREE_MONTH';
    public const THREE_MONTH_EAILIER_ToolsEstimateAudienceV2ActivateType = 'THREE_MONTH_EAILIER';
    public const UNLIMITED_ToolsEstimateAudienceV2ActivateType = 'UNLIMITED';
    public const WITH_IN_A_MONTH_ToolsEstimateAudienceV2ActivateType = 'WITH_IN_A_MONTH';

    public const ALLOWED_VALUES = [
        self::ONE_MONTH_2_THREE_MONTH_ToolsEstimateAudienceV2ActivateType,
        self::THREE_MONTH_EAILIER_ToolsEstimateAudienceV2ActivateType,
        self::UNLIMITED_ToolsEstimateAudienceV2ActivateType,
        self::WITH_IN_A_MONTH_ToolsEstimateAudienceV2ActivateType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2ActivateType', $value));
        }
        return (string) $value;
    }
}
