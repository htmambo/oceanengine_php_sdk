<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWatchRuleGetV30DataRuleBudgetAlertRulesLevel
{
    public const A_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetAlertRulesLevel = 'A_LEVEL';
    public const B_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetAlertRulesLevel = 'B_LEVEL';
    public const S_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetAlertRulesLevel = 'S_LEVEL';

    public const ALLOWED_VALUES = [
        self::A_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetAlertRulesLevel,
        self::B_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetAlertRulesLevel,
        self::S_LEVEL_SharedWalletWatchRuleGetV30DataRuleBudgetAlertRulesLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWatchRuleGetV30DataRuleBudgetAlertRulesLevel', $value));
        }
        return (string) $value;
    }
}
