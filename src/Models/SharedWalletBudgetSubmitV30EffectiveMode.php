<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SharedWalletBudgetSubmitV30EffectiveMode
{
    public const IMMEDIATE_SharedWalletBudgetSubmitV30EffectiveMode = 'IMMEDIATE';
    public const NEXT_DAY_SharedWalletBudgetSubmitV30EffectiveMode = 'NEXT_DAY';

    public const ALLOWED_VALUES = [
        self::IMMEDIATE_SharedWalletBudgetSubmitV30EffectiveMode,
        self::NEXT_DAY_SharedWalletBudgetSubmitV30EffectiveMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SharedWalletBudgetSubmitV30EffectiveMode', $value));
        }
        return (string) $value;
    }
}
