<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletWatchRuleSubmitV30AccountType
{
    public const AGENT_SharedWalletWatchRuleSubmitV30AccountType = 'AGENT';
    public const BP_SharedWalletWatchRuleSubmitV30AccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AGENT_SharedWalletWatchRuleSubmitV30AccountType,
        self::BP_SharedWalletWatchRuleSubmitV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletWatchRuleSubmitV30AccountType', $value));
        }
        return (string) $value;
    }
}
