<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsUnionFlowPackagePromotionReportV30OrderType
{
    public const ASC_ToolsUnionFlowPackagePromotionReportV30OrderType = 'ASC';
    public const DESC_ToolsUnionFlowPackagePromotionReportV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_ToolsUnionFlowPackagePromotionReportV30OrderType,
        self::DESC_ToolsUnionFlowPackagePromotionReportV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsUnionFlowPackagePromotionReportV30OrderType', $value));
        }
        return (string) $value;
    }
}
