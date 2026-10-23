<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsRtaSetScopeV2TargetType
{
    public const ADV_ToolsRtaSetScopeV2TargetType = 'ADV';
    public const PROJECT_ToolsRtaSetScopeV2TargetType = 'PROJECT';
    public const STD_PROJECT_ToolsRtaSetScopeV2TargetType = 'STD_PROJECT';

    public const ALLOWED_VALUES = [
        self::ADV_ToolsRtaSetScopeV2TargetType,
        self::PROJECT_ToolsRtaSetScopeV2TargetType,
        self::STD_PROJECT_ToolsRtaSetScopeV2TargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsRtaSetScopeV2TargetType', $value));
        }
        return (string) $value;
    }
}
