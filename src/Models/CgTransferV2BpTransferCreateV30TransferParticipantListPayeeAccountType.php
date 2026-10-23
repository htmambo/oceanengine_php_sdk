<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType
{
    public const ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType = 'ADV_ACCOUNT';
    public const DIRECT_ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType = 'DIRECT_ADV_ACCOUNT';
    public const RESERVE_WALLET_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType = 'RESERVE_WALLET';
    public const SELF_SERVICE_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType = 'SELF_SERVICE_ACCOUNT';
    public const SVIP_ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType = 'SVIP_ADV_ACCOUNT';
    public const SVIP_BP_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType = 'SVIP_BP_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType,
        self::DIRECT_ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType,
        self::RESERVE_WALLET_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType,
        self::SELF_SERVICE_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType,
        self::SVIP_ADV_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType,
        self::SVIP_BP_ACCOUNT_CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferCreateV30TransferParticipantListPayeeAccountType', $value));
        }
        return (string) $value;
    }
}
