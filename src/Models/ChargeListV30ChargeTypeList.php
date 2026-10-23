<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ChargeListV30ChargeTypeList
{
    public const PREPAY_ChargeListV30ChargeTypeList = 'PREPAY';

    public const ALLOWED_VALUES = [
        self::PREPAY_ChargeListV30ChargeTypeList,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ChargeListV30ChargeTypeList', $value));
        }
        return (string) $value;
    }
}
