<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsAddV30AccountType
{
    public const ADVERTISER_SubscribeAccountsAddV30AccountType = 'ADVERTISER';
    public const AGENT_SubscribeAccountsAddV30AccountType = 'AGENT';
    public const BP_SubscribeAccountsAddV30AccountType = 'BP';
    public const EBP_SubscribeAccountsAddV30AccountType = 'EBP';
    public const LOCAL_ADVERTISER_SubscribeAccountsAddV30AccountType = 'LOCAL_ADVERTISER';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_SubscribeAccountsAddV30AccountType,
        self::AGENT_SubscribeAccountsAddV30AccountType,
        self::BP_SubscribeAccountsAddV30AccountType,
        self::EBP_SubscribeAccountsAddV30AccountType,
        self::LOCAL_ADVERTISER_SubscribeAccountsAddV30AccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsAddV30AccountType', $value));
        }
        return (string) $value;
    }
}
