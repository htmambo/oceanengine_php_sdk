<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletTransferDetailGetV30Origin
{
    public const AGENT_WALLET_MAPI_CgTransferV3WalletTransferDetailGetV30Origin = 'AGENT_WALLET_MAPI';
    public const BP_WALLET_MAPI_CgTransferV3WalletTransferDetailGetV30Origin = 'BP_WALLET_MAPI';

    public const ALLOWED_VALUES = [
        self::AGENT_WALLET_MAPI_CgTransferV3WalletTransferDetailGetV30Origin,
        self::BP_WALLET_MAPI_CgTransferV3WalletTransferDetailGetV30Origin,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletTransferDetailGetV30Origin', $value));
        }
        return (string) $value;
    }
}
