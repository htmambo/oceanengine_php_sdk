<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListPayerAccountTypeCategory
{
    public const BP_ACCOUNT_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListPayerAccountTypeCategory = 'BP_ACCOUNT';
    public const WALLET_ACCOUNT_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListPayerAccountTypeCategory = 'WALLET_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::BP_ACCOUNT_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListPayerAccountTypeCategory,
        self::WALLET_ACCOUNT_CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListPayerAccountTypeCategory,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpCanTransferBalanceBetweenAccountGetV30TransferParticipantListPayerAccountTypeCategory', $value));
        }
        return (string) $value;
    }
}
