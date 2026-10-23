<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdBillingUniqueIdGetV30UniqueIdType
{
    public const CAPITAL_OPERATION_AdBillingUniqueIdGetV30UniqueIdType = 'capital_operation';
    public const CHARGE_BACK_AdBillingUniqueIdGetV30UniqueIdType = 'charge_back';
    public const SHARED_WALLET_ID_AdBillingUniqueIdGetV30UniqueIdType = 'shared_wallet_id';
    public const SHARED_WALLET_OPERATION_AdBillingUniqueIdGetV30UniqueIdType = 'shared_wallet_operation';

    public const ALLOWED_VALUES = [
        self::CAPITAL_OPERATION_AdBillingUniqueIdGetV30UniqueIdType,
        self::CHARGE_BACK_AdBillingUniqueIdGetV30UniqueIdType,
        self::SHARED_WALLET_ID_AdBillingUniqueIdGetV30UniqueIdType,
        self::SHARED_WALLET_OPERATION_AdBillingUniqueIdGetV30UniqueIdType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdBillingUniqueIdGetV30UniqueIdType', $value));
        }
        return (string) $value;
    }
}
