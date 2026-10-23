<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskGetV30DataAudienceSettingsGender
{
    public const FEMALE_ToolsEbpStarTaskGetV30DataAudienceSettingsGender = 'FEMALE';
    public const MALE_ToolsEbpStarTaskGetV30DataAudienceSettingsGender = 'MALE';
    public const NO_LIMIT_ToolsEbpStarTaskGetV30DataAudienceSettingsGender = 'NO_LIMIT';

    public const ALLOWED_VALUES = [
        self::FEMALE_ToolsEbpStarTaskGetV30DataAudienceSettingsGender,
        self::MALE_ToolsEbpStarTaskGetV30DataAudienceSettingsGender,
        self::NO_LIMIT_ToolsEbpStarTaskGetV30DataAudienceSettingsGender,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskGetV30DataAudienceSettingsGender', $value));
        }
        return (string) $value;
    }
}
