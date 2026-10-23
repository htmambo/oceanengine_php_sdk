<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class SubscribeAccountsListV30DataAdvertisersAccountType
{
    public const ADVERTISER_SubscribeAccountsListV30DataAdvertisersAccountType = 'ADVERTISER';
    public const AGENT_SubscribeAccountsListV30DataAdvertisersAccountType = 'AGENT';
    public const BP_SubscribeAccountsListV30DataAdvertisersAccountType = 'BP';
    public const EBP_SubscribeAccountsListV30DataAdvertisersAccountType = 'EBP';
    public const LOCAL_ADVERTISER_SubscribeAccountsListV30DataAdvertisersAccountType = 'LOCAL_ADVERTISER';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_SubscribeAccountsListV30DataAdvertisersAccountType,
        self::AGENT_SubscribeAccountsListV30DataAdvertisersAccountType,
        self::BP_SubscribeAccountsListV30DataAdvertisersAccountType,
        self::EBP_SubscribeAccountsListV30DataAdvertisersAccountType,
        self::LOCAL_ADVERTISER_SubscribeAccountsListV30DataAdvertisersAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum SubscribeAccountsListV30DataAdvertisersAccountType', $value));
        }
        return (string) $value;
    }
}
