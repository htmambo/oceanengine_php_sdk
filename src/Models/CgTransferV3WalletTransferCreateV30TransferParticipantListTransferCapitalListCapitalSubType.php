<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType
{
    public const NORMAL_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType = 'NORMAL';
    public const PRELOAN_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType,
        self::PRELOAN_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
