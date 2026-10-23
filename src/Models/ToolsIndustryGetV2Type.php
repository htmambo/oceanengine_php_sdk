<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsIndustryGetV2Type
{
    public const AGENT_ToolsIndustryGetV2Type = 'AGENT';
    public const ADVERTISER_ToolsIndustryGetV2Type = 'ADVERTISER';

    public const ALLOWED_VALUES = [
        self::AGENT_ToolsIndustryGetV2Type,
        self::ADVERTISER_ToolsIndustryGetV2Type,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsIndustryGetV2Type', $value));
        }
        return (string) $value;
    }
}
