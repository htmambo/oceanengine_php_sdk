<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsTaskRaiseGetV2DataReportsBudgetMode
{
    public const LIMIT_ToolsTaskRaiseGetV2DataReportsBudgetMode = 'LIMIT';
    public const NO_LIMIT_ToolsTaskRaiseGetV2DataReportsBudgetMode = 'NO_LIMIT';

    public const ALLOWED_VALUES = [
        self::LIMIT_ToolsTaskRaiseGetV2DataReportsBudgetMode,
        self::NO_LIMIT_ToolsTaskRaiseGetV2DataReportsBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsTaskRaiseGetV2DataReportsBudgetMode', $value));
        }
        return (string) $value;
    }
}
