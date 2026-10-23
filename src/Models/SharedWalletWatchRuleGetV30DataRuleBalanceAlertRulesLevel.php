<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel
{
    public const A_LEVEL_SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel = 'A_LEVEL';
    public const B_LEVEL_SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel = 'B_LEVEL';
    public const S_LEVEL_SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel = 'S_LEVEL';

    public const ALLOWED_VALUES = [
        self::A_LEVEL_SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel,
        self::B_LEVEL_SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel,
        self::S_LEVEL_SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWatchRuleGetV30DataRuleBalanceAlertRulesLevel', $value));
        }
        return (string) $value;
    }
}
