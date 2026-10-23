<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsUnionFlowPackageGetV2DataListStatus
{
    public const FLOW_PACKAGE_ENABLE_ToolsUnionFlowPackageGetV2DataListStatus = 'FLOW_PACKAGE_ENABLE';
    public const FLOW_PACKAGE_DISABLE_ToolsUnionFlowPackageGetV2DataListStatus = 'FLOW_PACKAGE_DISABLE';

    public const ALLOWED_VALUES = [
        self::FLOW_PACKAGE_ENABLE_ToolsUnionFlowPackageGetV2DataListStatus,
        self::FLOW_PACKAGE_DISABLE_ToolsUnionFlowPackageGetV2DataListStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsUnionFlowPackageGetV2DataListStatus', $value));
        }
        return (string) $value;
    }
}
