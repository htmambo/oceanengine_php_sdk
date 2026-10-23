<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserGoingGlobalBudgetGetV2DataBudgetMode
{
    public const BUDGET_MODE_DAY_AdvertiserGoingGlobalBudgetGetV2DataBudgetMode = 'BUDGET_MODE_DAY';
    public const BUDGET_MODE_INFINITE_AdvertiserGoingGlobalBudgetGetV2DataBudgetMode = 'BUDGET_MODE_INFINITE';

    public const ALLOWED_VALUES = [
        self::BUDGET_MODE_DAY_AdvertiserGoingGlobalBudgetGetV2DataBudgetMode,
        self::BUDGET_MODE_INFINITE_AdvertiserGoingGlobalBudgetGetV2DataBudgetMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserGoingGlobalBudgetGetV2DataBudgetMode', $value));
        }
        return (string) $value;
    }
}
