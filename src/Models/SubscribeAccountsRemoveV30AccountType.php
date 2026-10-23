<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsRemoveV30AccountType
{
    public const ADVERTISER_SubscribeAccountsRemoveV30AccountType = 'ADVERTISER';
    public const AGENT_SubscribeAccountsRemoveV30AccountType = 'AGENT';
    public const BP_SubscribeAccountsRemoveV30AccountType = 'BP';
    public const EBP_SubscribeAccountsRemoveV30AccountType = 'EBP';
    public const LOCAL_ADVERTISER_SubscribeAccountsRemoveV30AccountType = 'LOCAL_ADVERTISER';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_SubscribeAccountsRemoveV30AccountType,
        self::AGENT_SubscribeAccountsRemoveV30AccountType,
        self::BP_SubscribeAccountsRemoveV30AccountType,
        self::EBP_SubscribeAccountsRemoveV30AccountType,
        self::LOCAL_ADVERTISER_SubscribeAccountsRemoveV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsRemoveV30AccountType', $value));
        }
        return (string) $value;
    }
}
