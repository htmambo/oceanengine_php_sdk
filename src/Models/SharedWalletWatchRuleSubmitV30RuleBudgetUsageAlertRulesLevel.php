<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWatchRuleSubmitV30RuleBudgetUsageAlertRulesLevel
{
    public const A_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetUsageAlertRulesLevel = 'A_LEVEL';
    public const B_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetUsageAlertRulesLevel = 'B_LEVEL';
    public const S_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetUsageAlertRulesLevel = 'S_LEVEL';

    public const ALLOWED_VALUES = [
        self::A_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetUsageAlertRulesLevel,
        self::B_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetUsageAlertRulesLevel,
        self::S_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetUsageAlertRulesLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWatchRuleSubmitV30RuleBudgetUsageAlertRulesLevel', $value));
        }
        return (string) $value;
    }
}
