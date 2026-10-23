<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListTransferType
{
    public const ACCOUNT_WALLET_TRANSFER_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListTransferType = 'ACCOUNT_WALLET_TRANSFER';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_WALLET_TRANSFER_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListTransferType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListTransferType', $value));
        }
        return (string) $value;
    }
}
