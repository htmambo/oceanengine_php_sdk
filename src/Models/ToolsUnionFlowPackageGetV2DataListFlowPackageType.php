<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsUnionFlowPackageGetV2DataListFlowPackageType
{
    public const CUSTOMIZE_ToolsUnionFlowPackageGetV2DataListFlowPackageType = 'CUSTOMIZE';
    public const FEATURED_ToolsUnionFlowPackageGetV2DataListFlowPackageType = 'FEATURED';
    public const SYSTEM_ToolsUnionFlowPackageGetV2DataListFlowPackageType = 'SYSTEM';

    public const ALLOWED_VALUES = [
        self::CUSTOMIZE_ToolsUnionFlowPackageGetV2DataListFlowPackageType,
        self::FEATURED_ToolsUnionFlowPackageGetV2DataListFlowPackageType,
        self::SYSTEM_ToolsUnionFlowPackageGetV2DataListFlowPackageType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsUnionFlowPackageGetV2DataListFlowPackageType', $value));
        }
        return (string) $value;
    }
}
