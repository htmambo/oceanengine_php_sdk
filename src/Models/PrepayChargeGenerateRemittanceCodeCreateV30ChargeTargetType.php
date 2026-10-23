<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType
{
    public const ACCOUNT_PrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType = 'ACCOUNT';
    public const WALLET_PrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType = 'WALLET';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_PrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType,
        self::WALLET_PrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PrepayChargeGenerateRemittanceCodeCreateV30ChargeTargetType', $value));
        }
        return (string) $value;
    }
}
