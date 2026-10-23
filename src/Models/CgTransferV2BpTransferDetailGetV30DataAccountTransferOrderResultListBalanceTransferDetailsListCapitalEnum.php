<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum
{
    public const CREDIT_BIDDING_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'CREDIT_BIDDING';
    public const CREDIT_BRAND_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'CREDIT_BRAND';
    public const CREDIT_GENERAL_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'CREDIT_GENERAL';
    public const GRANT_COMMON_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'GRANT_COMMON';
    public const GRANT_DEFAULT_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'GRANT_DEFAULT';
    public const GRANT_SEARCH_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'GRANT_SEARCH';
    public const GRANT_UNION_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'GRANT_UNION';
    public const PREPAY_BIDDING_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'PREPAY_BIDDING';
    public const PREPAY_BRAND_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'PREPAY_BRAND';
    public const PREPAY_GENERAL_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum = 'PREPAY_GENERAL';

    public const ALLOWED_VALUES = [
        self::CREDIT_BIDDING_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
        self::CREDIT_BRAND_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
        self::CREDIT_GENERAL_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
        self::GRANT_COMMON_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
        self::GRANT_DEFAULT_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
        self::GRANT_SEARCH_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
        self::GRANT_UNION_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
        self::PREPAY_BIDDING_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
        self::PREPAY_BRAND_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
        self::PREPAY_GENERAL_CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CgTransferV2BpTransferDetailGetV30DataAccountTransferOrderResultListBalanceTransferDetailsListCapitalEnum', $value));
        }
        return (string) $value;
    }
}
