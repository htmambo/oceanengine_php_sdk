<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsListV30Source
{
    public const AUTO_ADD_SubscribeAccountsListV30Source = 'AUTO_ADD';
    public const CUSTOM_SubscribeAccountsListV30Source = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::AUTO_ADD_SubscribeAccountsListV30Source,
        self::CUSTOM_SubscribeAccountsListV30Source,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsListV30Source', $value));
        }
        return (string) $value;
    }
}
