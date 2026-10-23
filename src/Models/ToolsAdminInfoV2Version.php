<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdminInfoV2Version
{
    public const V1_0_0_ToolsAdminInfoV2Version = 'V1_0_0';
    public const V2_3_2_ToolsAdminInfoV2Version = 'V2_3_2';

    public const ALLOWED_VALUES = [
        self::V1_0_0_ToolsAdminInfoV2Version,
        self::V2_3_2_ToolsAdminInfoV2Version,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdminInfoV2Version', $value));
        }
        return (string) $value;
    }
}
