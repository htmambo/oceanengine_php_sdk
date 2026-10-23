<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform
{
    public const AD_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform = 'AD';
    public const AD_ALL_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform = 'QIANCHUAN';
    public const STAR_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform,
        self::AD_ALL_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform,
        self::BENDITUI_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform,
        self::QIANCHUAN_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform,
        self::STAR_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform', $value));
        }
        return (string) $value;
    }
}
