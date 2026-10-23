<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType
{
    public const ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType = 'ADV_ACCOUNT';
    public const DIRECT_ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType = 'DIRECT_ADV_ACCOUNT';
    public const RESERVE_WALLET_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType = 'RESERVE_WALLET';
    public const SELF_SERVICE_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType = 'SELF_SERVICE_ACCOUNT';
    public const SVIP_ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType = 'SVIP_ADV_ACCOUNT';
    public const SVIP_BP_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType = 'SVIP_BP_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType,
        self::DIRECT_ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType,
        self::RESERVE_WALLET_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType,
        self::SELF_SERVICE_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType,
        self::SVIP_ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType,
        self::SVIP_BP_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferCreateV30TransferParticipantListPayerAccountType', $value));
        }
        return (string) $value;
    }
}
