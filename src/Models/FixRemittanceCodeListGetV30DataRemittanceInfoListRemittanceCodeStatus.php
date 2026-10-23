<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus
{
    public const ABANDON_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'ABANDON';
    public const CHARGE_FAILED_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'CHARGE_FAILED';
    public const CHARGE_SUCCESS_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'CHARGE_SUCCESS';
    public const FUNDS_BINDING_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'FUNDS_BINDING';
    public const NOT_USED_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus = 'NOT_USED';

    public const ALLOWED_VALUES = [
        self::ABANDON_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::CHARGE_FAILED_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::CHARGE_SUCCESS_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::FUNDS_BINDING_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
        self::NOT_USED_FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum FixRemittanceCodeListGetV30DataRemittanceInfoListRemittanceCodeStatus', $value));
        }
        return (string) $value;
    }
}
