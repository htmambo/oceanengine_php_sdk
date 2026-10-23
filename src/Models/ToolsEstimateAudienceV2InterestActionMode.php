<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2InterestActionMode
{
    public const CUSTOM_ToolsEstimateAudienceV2InterestActionMode = 'CUSTOM';
    public const RECOMMEND_ToolsEstimateAudienceV2InterestActionMode = 'RECOMMEND';
    public const UNLIMITED_ToolsEstimateAudienceV2InterestActionMode = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::CUSTOM_ToolsEstimateAudienceV2InterestActionMode,
        self::RECOMMEND_ToolsEstimateAudienceV2InterestActionMode,
        self::UNLIMITED_ToolsEstimateAudienceV2InterestActionMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2InterestActionMode', $value));
        }
        return (string) $value;
    }
}
