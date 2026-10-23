<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus
{
    public const ABANDON_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'ABANDON';
    public const CHARGE_FAILED_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'CHARGE_FAILED';
    public const CHARGE_SUCCESS_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'CHARGE_SUCCESS';
    public const FUNDS_BINDING_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'FUNDS_BINDING';
    public const NOT_USED_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'NOT_USED';

    public const ALLOWED_VALUES = [
        self::ABANDON_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::CHARGE_FAILED_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::CHARGE_SUCCESS_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::FUNDS_BINDING_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::NOT_USED_RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum RemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus', $value));
        }
        return (string) $value;
    }
}
