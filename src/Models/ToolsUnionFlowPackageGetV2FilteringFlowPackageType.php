<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsUnionFlowPackageGetV2FilteringFlowPackageType
{
    public const CUSTOMIZE_ToolsUnionFlowPackageGetV2FilteringFlowPackageType = 'CUSTOMIZE';
    public const FEATURED_ToolsUnionFlowPackageGetV2FilteringFlowPackageType = 'FEATURED';
    public const SYSTEM_ToolsUnionFlowPackageGetV2FilteringFlowPackageType = 'SYSTEM';

    public const ALLOWED_VALUES = [
        self::CUSTOMIZE_ToolsUnionFlowPackageGetV2FilteringFlowPackageType,
        self::FEATURED_ToolsUnionFlowPackageGetV2FilteringFlowPackageType,
        self::SYSTEM_ToolsUnionFlowPackageGetV2FilteringFlowPackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsUnionFlowPackageGetV2FilteringFlowPackageType', $value));
        }
        return (string) $value;
    }
}
