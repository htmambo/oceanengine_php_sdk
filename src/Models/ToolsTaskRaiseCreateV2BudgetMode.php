<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsTaskRaiseCreateV2BudgetMode
{
    public const LIMIT_ToolsTaskRaiseCreateV2BudgetMode = 'LIMIT';
    public const NO_LIMIT_ToolsTaskRaiseCreateV2BudgetMode = 'NO_LIMIT';

    public const ALLOWED_VALUES = [
        self::LIMIT_ToolsTaskRaiseCreateV2BudgetMode,
        self::NO_LIMIT_ToolsTaskRaiseCreateV2BudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsTaskRaiseCreateV2BudgetMode', $value));
        }
        return (string) $value;
    }
}
