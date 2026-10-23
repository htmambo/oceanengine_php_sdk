<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataInheritType
{
    public const INHERIT_FROM_CUSTOMER_AdGetV2DataInheritType = 'INHERIT_FROM_CUSTOMER';
    public const INHERIT_FROM_ACCOUNT_AdGetV2DataInheritType = 'INHERIT_FROM_ACCOUNT';
    public const INHERIT_BY_SYSTEM_AdGetV2DataInheritType = 'INHERIT_BY_SYSTEM';

    public const ALLOWED_VALUES = [
        self::INHERIT_FROM_CUSTOMER_AdGetV2DataInheritType,
        self::INHERIT_FROM_ACCOUNT_AdGetV2DataInheritType,
        self::INHERIT_BY_SYSTEM_AdGetV2DataInheritType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataInheritType', $value));
        }
        return (string) $value;
    }
}
