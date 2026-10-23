<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AccountFundGetV30GrantTypeSplit
{
    public const ON_AccountFundGetV30GrantTypeSplit = 'ON';
    public const OFF_AccountFundGetV30GrantTypeSplit = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_AccountFundGetV30GrantTypeSplit,
        self::OFF_AccountFundGetV30GrantTypeSplit,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AccountFundGetV30GrantTypeSplit', $value));
        }
        return (string) $value;
    }
}
