<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2Gender
{
    public const GENDER_FEMALE_ToolsEstimateAudienceV2Gender = 'GENDER_FEMALE';
    public const GENDER_MALE_ToolsEstimateAudienceV2Gender = 'GENDER_MALE';
    public const GENDER_UNLIMITED_ToolsEstimateAudienceV2Gender = 'GENDER_UNLIMITED';
    public const NONE_ToolsEstimateAudienceV2Gender = 'NONE';

    public const ALLOWED_VALUES = [
        self::GENDER_FEMALE_ToolsEstimateAudienceV2Gender,
        self::GENDER_MALE_ToolsEstimateAudienceV2Gender,
        self::GENDER_UNLIMITED_ToolsEstimateAudienceV2Gender,
        self::NONE_ToolsEstimateAudienceV2Gender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2Gender', $value));
        }
        return (string) $value;
    }
}
