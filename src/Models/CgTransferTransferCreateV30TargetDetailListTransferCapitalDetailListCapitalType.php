<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType
{
    public const CREDIT_BIDDING_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'CREDIT_GENERAL';
    public const GRANT_COMMON_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'GRANT_COMMON';
    public const GRANT_DEFAULT_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'GRANT_DEFAULT';
    public const GRANT_SEARCH_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'GRANT_SEARCH';
    public const GRANT_UNION_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'GRANT_UNION';
    public const PREPAY_BIDDING_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
        self::CREDIT_BRAND_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
        self::CREDIT_GENERAL_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
        self::GRANT_COMMON_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
        self::GRANT_DEFAULT_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
        self::GRANT_SEARCH_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
        self::GRANT_UNION_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
        self::PREPAY_BIDDING_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
        self::PREPAY_BRAND_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
        self::PREPAY_GENERAL_CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferTransferCreateV30TargetDetailListTransferCapitalDetailListCapitalType', $value));
        }
        return (string) $value;
    }
}
