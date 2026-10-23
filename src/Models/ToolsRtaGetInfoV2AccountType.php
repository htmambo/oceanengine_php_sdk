<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRtaGetInfoV2AccountType
{
    public const AD_ToolsRtaGetInfoV2AccountType = 'AD';
    public const STAR_ToolsRtaGetInfoV2AccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsRtaGetInfoV2AccountType,
        self::STAR_ToolsRtaGetInfoV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRtaGetInfoV2AccountType', $value));
        }
        return (string) $value;
    }
}
