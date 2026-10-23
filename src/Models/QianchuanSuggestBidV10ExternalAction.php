<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanSuggestBidV10ExternalAction
{
    public const AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanSuggestBidV10ExternalAction = 'AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanSuggestBidV10ExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanSuggestBidV10ExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';
    public const AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanSuggestBidV10ExternalAction = 'AD_CONVERT_TYPE_NEW_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanSuggestBidV10ExternalAction = 'AD_CONVERT_TYPE_QC_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanSuggestBidV10ExternalAction = 'AD_CONVERT_TYPE_QC_MUST_BUY';
    public const AD_CONVERT_TYPE_SHOPPING_QianchuanSuggestBidV10ExternalAction = 'AD_CONVERT_TYPE_SHOPPING';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanSuggestBidV10ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanSuggestBidV10ExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanSuggestBidV10ExternalAction,
        self::AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanSuggestBidV10ExternalAction,
        self::AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanSuggestBidV10ExternalAction,
        self::AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanSuggestBidV10ExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_QianchuanSuggestBidV10ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanSuggestBidV10ExternalAction', $value));
        }
        return (string) $value;
    }
}
