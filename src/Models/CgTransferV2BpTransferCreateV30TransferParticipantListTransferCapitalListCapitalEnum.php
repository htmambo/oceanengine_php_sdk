<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum
{
    public const CREDIT_BIDDING_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum,
        self::CREDIT_BRAND_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum,
        self::CREDIT_GENERAL_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum,
        self::PREPAY_BIDDING_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum,
        self::PREPAY_BRAND_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum,
        self::PREPAY_GENERAL_CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferCreateV30TransferParticipantListTransferCapitalListCapitalEnum', $value));
        }
        return (string) $value;
    }
}
