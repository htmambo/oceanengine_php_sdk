<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ChargeListV30ChargeStatusList
{
    public const CANCELED_ChargeListV30ChargeStatusList = 'CANCELED';
    public const CHARGING_ChargeListV30ChargeStatusList = 'CHARGING';
    public const CREATED_ChargeListV30ChargeStatusList = 'CREATED';
    public const FAILED_ChargeListV30ChargeStatusList = 'FAILED';
    public const SUCCESS_ChargeListV30ChargeStatusList = 'SUCCESS';

    public const ALLOWED_VALUES = [
        self::CANCELED_ChargeListV30ChargeStatusList,
        self::CHARGING_ChargeListV30ChargeStatusList,
        self::CREATED_ChargeListV30ChargeStatusList,
        self::FAILED_ChargeListV30ChargeStatusList,
        self::SUCCESS_ChargeListV30ChargeStatusList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ChargeListV30ChargeStatusList', $value));
        }
        return (string) $value;
    }
}
