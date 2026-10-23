<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsListV30Statuses
{
    public const OK_SubscribeAccountsListV30Statuses = 'OK';
    public const PENDING_SubscribeAccountsListV30Statuses = 'PENDING';
    public const UNAUTHORIZED_SubscribeAccountsListV30Statuses = 'UNAUTHORIZED';
    public const UNKNOWN_SubscribeAccountsListV30Statuses = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::OK_SubscribeAccountsListV30Statuses,
        self::PENDING_SubscribeAccountsListV30Statuses,
        self::UNAUTHORIZED_SubscribeAccountsListV30Statuses,
        self::UNKNOWN_SubscribeAccountsListV30Statuses,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsListV30Statuses', $value));
        }
        return (string) $value;
    }
}
