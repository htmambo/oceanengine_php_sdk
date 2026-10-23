<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWatchRuleGetV30DataRuleBudgetUsageAlertRulesLevel
{
    public const A_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetUsageAlertRulesLevel = 'A_LEVEL';
    public const B_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetUsageAlertRulesLevel = 'B_LEVEL';
    public const S_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetUsageAlertRulesLevel = 'S_LEVEL';

    public const ALLOWED_VALUES = [
        self::A_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetUsageAlertRulesLevel,
        self::B_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetUsageAlertRulesLevel,
        self::S_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetUsageAlertRulesLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWatchRuleGetV30DataRuleBudgetUsageAlertRulesLevel', $value));
        }
        return (string) $value;
    }
}
