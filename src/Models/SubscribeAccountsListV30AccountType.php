<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsListV30AccountType
{
    public const ADVERTISER_SubscribeAccountsListV30AccountType = 'ADVERTISER';
    public const AGENT_SubscribeAccountsListV30AccountType = 'AGENT';
    public const BP_SubscribeAccountsListV30AccountType = 'BP';
    public const EBP_SubscribeAccountsListV30AccountType = 'EBP';
    public const LOCAL_ADVERTISER_SubscribeAccountsListV30AccountType = 'LOCAL_ADVERTISER';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_SubscribeAccountsListV30AccountType,
        self::AGENT_SubscribeAccountsListV30AccountType,
        self::BP_SubscribeAccountsListV30AccountType,
        self::EBP_SubscribeAccountsListV30AccountType,
        self::LOCAL_ADVERTISER_SubscribeAccountsListV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsListV30AccountType', $value));
        }
        return (string) $value;
    }
}
