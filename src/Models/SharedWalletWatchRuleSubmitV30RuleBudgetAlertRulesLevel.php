<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWatchRuleSubmitV30RuleBudgetAlertRulesLevel
{
    public const A_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetAlertRulesLevel = 'A_LEVEL';
    public const B_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetAlertRulesLevel = 'B_LEVEL';
    public const S_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetAlertRulesLevel = 'S_LEVEL';

    public const ALLOWED_VALUES = [
        self::A_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetAlertRulesLevel,
        self::B_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetAlertRulesLevel,
        self::S_LEVEL_SharedWalletWatchRuleSubmitV30RuleBudgetAlertRulesLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWatchRuleSubmitV30RuleBudgetAlertRulesLevel', $value));
        }
        return (string) $value;
    }
}
