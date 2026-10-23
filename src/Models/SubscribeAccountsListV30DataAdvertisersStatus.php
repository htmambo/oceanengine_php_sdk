<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsListV30DataAdvertisersStatus
{
    public const OK_SubscribeAccountsListV30DataAdvertisersStatus = 'OK';
    public const PENDING_SubscribeAccountsListV30DataAdvertisersStatus = 'PENDING';
    public const UNAUTHORIZED_SubscribeAccountsListV30DataAdvertisersStatus = 'UNAUTHORIZED';
    public const UNKNOWN_SubscribeAccountsListV30DataAdvertisersStatus = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::OK_SubscribeAccountsListV30DataAdvertisersStatus,
        self::PENDING_SubscribeAccountsListV30DataAdvertisersStatus,
        self::UNAUTHORIZED_SubscribeAccountsListV30DataAdvertisersStatus,
        self::UNKNOWN_SubscribeAccountsListV30DataAdvertisersStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsListV30DataAdvertisersStatus', $value));
        }
        return (string) $value;
    }
}
