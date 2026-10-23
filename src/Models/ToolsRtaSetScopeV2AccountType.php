<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRtaSetScopeV2AccountType
{
    public const AD_ToolsRtaSetScopeV2AccountType = 'AD';
    public const STAR_ToolsRtaSetScopeV2AccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsRtaSetScopeV2AccountType,
        self::STAR_ToolsRtaSetScopeV2AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRtaSetScopeV2AccountType', $value));
        }
        return (string) $value;
    }
}
