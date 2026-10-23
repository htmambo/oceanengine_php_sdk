<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ChargeListV30ChargeTargetType
{
    public const ADVERTISER_ACCOUNT_ChargeListV30ChargeTargetType = 'ADVERTISER_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_ACCOUNT_ChargeListV30ChargeTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ChargeListV30ChargeTargetType', $value));
        }
        return (string) $value;
    }
}
