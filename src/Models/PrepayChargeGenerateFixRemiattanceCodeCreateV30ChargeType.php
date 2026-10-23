<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType
{
    public const CREDIT_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType = 'CREDIT';
    public const GRANT_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType = 'GRANT';
    public const PRELOAN_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType = 'PRELOAN';
    public const PREPAY_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType = 'PREPAY';
    public const REBATE_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType = 'REBATE';

    public const ALLOWED_VALUES = [
        self::CREDIT_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType,
        self::GRANT_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType,
        self::PRELOAN_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType,
        self::PREPAY_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType,
        self::REBATE_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeType', $value));
        }
        return (string) $value;
    }
}
