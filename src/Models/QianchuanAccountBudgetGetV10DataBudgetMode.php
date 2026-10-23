<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAccountBudgetGetV10DataBudgetMode
{
    public const INFINITE_QianchuanAccountBudgetGetV10DataBudgetMode = 'INFINITE';
    public const SPECIFIED_QianchuanAccountBudgetGetV10DataBudgetMode = 'SPECIFIED';

    public const ALLOWED_VALUES = [
        self::INFINITE_QianchuanAccountBudgetGetV10DataBudgetMode,
        self::SPECIFIED_QianchuanAccountBudgetGetV10DataBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAccountBudgetGetV10DataBudgetMode', $value));
        }
        return (string) $value;
    }
}
