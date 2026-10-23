<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsUnionFlowPackageReportV2OrderType
{
    public const ASC_ToolsUnionFlowPackageReportV2OrderType = 'ASC';
    public const DESC_ToolsUnionFlowPackageReportV2OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_ToolsUnionFlowPackageReportV2OrderType,
        self::DESC_ToolsUnionFlowPackageReportV2OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsUnionFlowPackageReportV2OrderType', $value));
        }
        return (string) $value;
    }
}
