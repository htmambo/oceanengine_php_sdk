<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class CustomerCenterFundTransferSeqCreateV2TransferType
{
    public const GRANT_CustomerCenterFundTransferSeqCreateV2TransferType = 'GRANT';
    public const PREPAY_BRAND_CustomerCenterFundTransferSeqCreateV2TransferType = 'PREPAY_BRAND';
    public const CREDIT_BRAND_CustomerCenterFundTransferSeqCreateV2TransferType = 'CREDIT_BRAND';
    public const PREPAY_UNIVERSAL_CustomerCenterFundTransferSeqCreateV2TransferType = 'PREPAY_UNIVERSAL';
    public const PREPAY_BID_CustomerCenterFundTransferSeqCreateV2TransferType = 'PREPAY_BID';
    public const CREDIT_BID_CustomerCenterFundTransferSeqCreateV2TransferType = 'CREDIT_BID';
    public const CREDIT_UNIVERSAL_CustomerCenterFundTransferSeqCreateV2TransferType = 'CREDIT_UNIVERSAL';

    public const ALLOWED_VALUES = [
        self::GRANT_CustomerCenterFundTransferSeqCreateV2TransferType,
        self::PREPAY_BRAND_CustomerCenterFundTransferSeqCreateV2TransferType,
        self::CREDIT_BRAND_CustomerCenterFundTransferSeqCreateV2TransferType,
        self::PREPAY_UNIVERSAL_CustomerCenterFundTransferSeqCreateV2TransferType,
        self::PREPAY_BID_CustomerCenterFundTransferSeqCreateV2TransferType,
        self::CREDIT_BID_CustomerCenterFundTransferSeqCreateV2TransferType,
        self::CREDIT_UNIVERSAL_CustomerCenterFundTransferSeqCreateV2TransferType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum CustomerCenterFundTransferSeqCreateV2TransferType', $value));
        }
        return (string) $value;
    }
}
