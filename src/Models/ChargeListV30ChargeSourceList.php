<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ChargeListV30ChargeSourceList
{
    public const MOBILE_CHARGE_ChargeListV30ChargeSourceList = 'MOBILE_CHARGE';
    public const ONLINE_CHARGE_ChargeListV30ChargeSourceList = 'ONLINE_CHARGE';

    public const ALLOWED_VALUES = [
        self::MOBILE_CHARGE_ChargeListV30ChargeSourceList,
        self::ONLINE_CHARGE_ChargeListV30ChargeSourceList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ChargeListV30ChargeSourceList', $value));
        }
        return (string) $value;
    }
}
