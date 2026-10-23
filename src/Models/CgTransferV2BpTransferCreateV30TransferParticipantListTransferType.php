<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferCreateV30TransferParticipantListTransferType
{
    public const ACCOUNT_WALLET_TRANSFER_CgTransferV2BpTransferCreateV30TransferParticipantListTransferType = 'ACCOUNT_WALLET_TRANSFER';
    public const CRM_SELF_SERVICE_TRANSFER_CgTransferV2BpTransferCreateV30TransferParticipantListTransferType = 'CRM_SELF_SERVICE_TRANSFER';
    public const SVIP_TRANSFER_CgTransferV2BpTransferCreateV30TransferParticipantListTransferType = 'SVIP_TRANSFER';

    public const ALLOWED_VALUES = [
        self::ACCOUNT_WALLET_TRANSFER_CgTransferV2BpTransferCreateV30TransferParticipantListTransferType,
        self::CRM_SELF_SERVICE_TRANSFER_CgTransferV2BpTransferCreateV30TransferParticipantListTransferType,
        self::SVIP_TRANSFER_CgTransferV2BpTransferCreateV30TransferParticipantListTransferType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferCreateV30TransferParticipantListTransferType', $value));
        }
        return (string) $value;
    }
}
