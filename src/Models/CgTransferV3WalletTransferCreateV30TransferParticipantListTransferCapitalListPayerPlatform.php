<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform
{
    public const AD_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform = 'AD';
    public const AD_ALL_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform = 'AD_ALL';
    public const BENDITUI_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform = 'BENDITUI';
    public const QIANCHUAN_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform = 'QIANCHUAN';

    public const ALLOWED_VALUES = [
        self::AD_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform,
        self::AD_ALL_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform,
        self::BENDITUI_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform,
        self::QIANCHUAN_CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV3WalletTransferCreateV30TransferParticipantListTransferCapitalListPayerPlatform', $value));
        }
        return (string) $value;
    }
}
