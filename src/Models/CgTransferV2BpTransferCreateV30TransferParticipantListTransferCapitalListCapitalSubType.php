<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType
{
    public const NORMAL_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType = 'NORMAL';
    public const POST_PAY_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType = 'POST_PAY';
    public const PRELOAN_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType = 'PRELOAN';

    public const ALLOWED_VALUES = [
        self::NORMAL_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType,
        self::POST_PAY_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType,
        self::PRELOAN_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalSubType', $value));
        }
        return (string) $value;
    }
}
