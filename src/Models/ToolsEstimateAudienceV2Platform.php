<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEstimateAudienceV2Platform
{
    public const PC_ToolsEstimateAudienceV2Platform = 'PC';
    public const ANDROID_ToolsEstimateAudienceV2Platform = 'ANDROID';
    public const HARMONY_ToolsEstimateAudienceV2Platform = 'HARMONY';
    public const IPAD_ToolsEstimateAudienceV2Platform = 'IPAD';
    public const IOS_ToolsEstimateAudienceV2Platform = 'IOS';
    public const NONE_ToolsEstimateAudienceV2Platform = 'NONE';
    public const WAP_ToolsEstimateAudienceV2Platform = 'WAP';

    public const ALLOWED_VALUES = [
        self::PC_ToolsEstimateAudienceV2Platform,
        self::ANDROID_ToolsEstimateAudienceV2Platform,
        self::HARMONY_ToolsEstimateAudienceV2Platform,
        self::IPAD_ToolsEstimateAudienceV2Platform,
        self::IOS_ToolsEstimateAudienceV2Platform,
        self::NONE_ToolsEstimateAudienceV2Platform,
        self::WAP_ToolsEstimateAudienceV2Platform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEstimateAudienceV2Platform', $value));
        }
        return (string) $value;
    }
}
