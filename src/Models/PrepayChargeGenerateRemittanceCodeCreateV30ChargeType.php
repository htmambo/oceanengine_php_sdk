<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PrepayChargeGenerateRemittanceCodeCreateV30ChargeType
{
    public const CREDIT_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType = 'CREDIT';
    public const GRANT_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType = 'GRANT';
    public const PRELOAN_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType = 'PRELOAN';
    public const PREPAY_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType = 'PREPAY';
    public const REBATE_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType = 'REBATE';

    public const ALLOWED_VALUES = [
        self::CREDIT_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType,
        self::GRANT_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType,
        self::PRELOAN_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType,
        self::PREPAY_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType,
        self::REBATE_PrepayChargeGenerateRemittanceCodeCreateV30ChargeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PrepayChargeGenerateRemittanceCodeCreateV30ChargeType', $value));
        }
        return (string) $value;
    }
}
