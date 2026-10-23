<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2AutoExtendTargets
{
    public const INTEREST_TAG_ToolsEstimateAudienceV2AutoExtendTargets = 'INTEREST_TAG';
    public const AD_TAG_ToolsEstimateAudienceV2AutoExtendTargets = 'AD_TAG';
    public const AGE_ToolsEstimateAudienceV2AutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_ToolsEstimateAudienceV2AutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const REGION_ToolsEstimateAudienceV2AutoExtendTargets = 'REGION';
    public const GENDER_ToolsEstimateAudienceV2AutoExtendTargets = 'GENDER';

    public const ALLOWED_VALUES = [
        self::INTEREST_TAG_ToolsEstimateAudienceV2AutoExtendTargets,
        self::AD_TAG_ToolsEstimateAudienceV2AutoExtendTargets,
        self::AGE_ToolsEstimateAudienceV2AutoExtendTargets,
        self::CUSTOM_AUDIENCE_ToolsEstimateAudienceV2AutoExtendTargets,
        self::REGION_ToolsEstimateAudienceV2AutoExtendTargets,
        self::GENDER_ToolsEstimateAudienceV2AutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2AutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
