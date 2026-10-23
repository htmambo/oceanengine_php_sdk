<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const PREPAY_BIDDING_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferCreateTransferV30TargetAccountDetailListTransferCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
