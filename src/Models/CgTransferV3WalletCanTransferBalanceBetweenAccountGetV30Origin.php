<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30Origin
{
    public const BP_WALLET_MAPI_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30Origin = 'BP_WALLET_MAPI';

    public const ALLOWED_VALUES = [
        self::BP_WALLET_MAPI_CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30Origin,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletCanTransferBalanceBetweenAccountGetV30Origin', $value));
        }
        return (string) $value;
    }
}
