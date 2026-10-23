<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalBudgetUpdateV30EffectiveMode
{
    public const EFFECTIVE_NEXT_DAY_LocalBudgetUpdateV30EffectiveMode = 'EFFECTIVE_NEXT_DAY';
    public const EFFECTIVE_NOW_LocalBudgetUpdateV30EffectiveMode = 'EFFECTIVE_NOW';

    public const ALLOWED_VALUES = [
        self::EFFECTIVE_NEXT_DAY_LocalBudgetUpdateV30EffectiveMode,
        self::EFFECTIVE_NOW_LocalBudgetUpdateV30EffectiveMode,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalBudgetUpdateV30EffectiveMode', $value));
        }
        return (string) $value;
    }
}
