<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EbpGroupBindAccountCreateV30BindModelApplyBindType
{
    public const COMPANY_BIND_EbpGroupBindAccountCreateV30BindModelApplyBindType = 'COMPANY_BIND';
    public const CUSTOMER_BIND_EbpGroupBindAccountCreateV30BindModelApplyBindType = 'CUSTOMER_BIND';

    public const ALLOWED_VALUES = [
        self::COMPANY_BIND_EbpGroupBindAccountCreateV30BindModelApplyBindType,
        self::CUSTOMER_BIND_EbpGroupBindAccountCreateV30BindModelApplyBindType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EbpGroupBindAccountCreateV30BindModelApplyBindType', $value));
        }
        return (string) $value;
    }
}
