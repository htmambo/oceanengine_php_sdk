<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2AppBehaviorTarget
{
    public const APP_ToolsEstimateAudienceV2AppBehaviorTarget = 'APP';
    public const CATEGORY_ToolsEstimateAudienceV2AppBehaviorTarget = 'CATEGORY';
    public const NONE_ToolsEstimateAudienceV2AppBehaviorTarget = 'NONE';

    public const ALLOWED_VALUES = [
        self::APP_ToolsEstimateAudienceV2AppBehaviorTarget,
        self::CATEGORY_ToolsEstimateAudienceV2AppBehaviorTarget,
        self::NONE_ToolsEstimateAudienceV2AppBehaviorTarget,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2AppBehaviorTarget', $value));
        }
        return (string) $value;
    }
}
