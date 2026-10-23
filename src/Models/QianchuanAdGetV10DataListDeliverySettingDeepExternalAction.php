<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdGetV10DataListDeliverySettingDeepExternalAction
{
    public const AD_CONVERT_TYPE_CARD_ACTIVE_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_CARD_ACTIVE';
    public const AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_COMMENT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_ENTER_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_ENTER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_PAY_ROI_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_PAY_ROI';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_7_DAYS_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_7DAYS';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_SETTLE_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_SETTLE';
    public const AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_NEW_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_QC_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_QC_MUST_BUY';
    public const AD_CONVERT_TYPE_SHOPPING_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction = 'AD_CONVERT_TYPE_SHOPPING';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_CARD_ACTIVE_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_ENTER_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_PAY_ROI_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_7_DAYS_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_SETTLE_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_QianchuanAdGetV10DataListDeliverySettingDeepExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdGetV10DataListDeliverySettingDeepExternalAction', $value));
        }
        return (string) $value;
    }
}
