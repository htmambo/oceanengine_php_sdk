<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus
{
    public const ABANDON_RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus = 'ABANDON';
    public const CHARGE_FAILED_RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus = 'CHARGE_FAILED';
    public const CHARGE_SUCCESS_RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus = 'CHARGE_SUCCESS';
    public const NOT_USED_RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus = 'NOT_USED';

    public const ALLOWED_VALUES = [
        self::ABANDON_RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus,
        self::CHARGE_FAILED_RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus,
        self::CHARGE_SUCCESS_RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus,
        self::NOT_USED_RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum RemittanceCodeListV30DataRemittanceInfoListRemittanceCodeStatus', $value));
        }
        return (string) $value;
    }
}
