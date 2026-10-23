<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdvertiserFundGrantTransactionGetV2DataListGrantType
{
    public const UNKNOWN_AdvertiserFundGrantTransactionGetV2DataListGrantType = 'unknown';
    public const ACTIVITY_AdvertiserFundGrantTransactionGetV2DataListGrantType = 'activity';
    public const REFUND_AdvertiserFundGrantTransactionGetV2DataListGrantType = 'refund';
    public const INTERNAL_AD_AdvertiserFundGrantTransactionGetV2DataListGrantType = 'internal_ad';
    public const RETURN_GOODS_AdvertiserFundGrantTransactionGetV2DataListGrantType = 'return_goods';
    public const EXCHANGE_AdvertiserFundGrantTransactionGetV2DataListGrantType = 'exchange';
    public const SUPPLEMENT_AdvertiserFundGrantTransactionGetV2DataListGrantType = 'supplement';
    public const SUBSIDIARY_AdvertiserFundGrantTransactionGetV2DataListGrantType = 'subsidiary';

    public const ALLOWED_VALUES = [
        self::UNKNOWN_AdvertiserFundGrantTransactionGetV2DataListGrantType,
        self::ACTIVITY_AdvertiserFundGrantTransactionGetV2DataListGrantType,
        self::REFUND_AdvertiserFundGrantTransactionGetV2DataListGrantType,
        self::INTERNAL_AD_AdvertiserFundGrantTransactionGetV2DataListGrantType,
        self::RETURN_GOODS_AdvertiserFundGrantTransactionGetV2DataListGrantType,
        self::EXCHANGE_AdvertiserFundGrantTransactionGetV2DataListGrantType,
        self::SUPPLEMENT_AdvertiserFundGrantTransactionGetV2DataListGrantType,
        self::SUBSIDIARY_AdvertiserFundGrantTransactionGetV2DataListGrantType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdvertiserFundGrantTransactionGetV2DataListGrantType', $value));
        }
        return (string) $value;
    }
}
