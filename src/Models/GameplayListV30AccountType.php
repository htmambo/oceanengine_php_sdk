<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class GameplayListV30AccountType
{
    public const AD_GameplayListV30AccountType = 'AD';

    public const ALLOWED_VALUES = [
        self::AD_GameplayListV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum GameplayListV30AccountType', $value));
        }
        return (string) $value;
    }
}
