<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ChargeVerifyGetV30ChargeType
{
    public const CREDIT_ChargeVerifyGetV30ChargeType = 'CREDIT';
    public const GRANT_ChargeVerifyGetV30ChargeType = 'GRANT';
    public const PRELOAN_ChargeVerifyGetV30ChargeType = 'PRELOAN';
    public const PREPAY_ChargeVerifyGetV30ChargeType = 'PREPAY';
    public const REBATE_ChargeVerifyGetV30ChargeType = 'REBATE';

    public const ALLOWED_VALUES = [
        self::CREDIT_ChargeVerifyGetV30ChargeType,
        self::GRANT_ChargeVerifyGetV30ChargeType,
        self::PRELOAN_ChargeVerifyGetV30ChargeType,
        self::PREPAY_ChargeVerifyGetV30ChargeType,
        self::REBATE_ChargeVerifyGetV30ChargeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ChargeVerifyGetV30ChargeType', $value));
        }
        return (string) $value;
    }
}
