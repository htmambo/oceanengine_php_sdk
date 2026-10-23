<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeTargetType
{
    public const ACCOUNT_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeTargetType = 'ACCOUNT';
    public const WALLET_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeTargetType = 'WALLET';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeTargetType,
        self::WALLET_PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeTargetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum PrepayChargeGenerateFixRemiattanceCodeCreateV30ChargeTargetType', $value));
        }
        return (string) $value;
    }
}
