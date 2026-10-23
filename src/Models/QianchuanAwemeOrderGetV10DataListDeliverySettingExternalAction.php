<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction
{
    public const AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_COMMENT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_EFFECTIVE_EFFECTIVE_VIEW_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_EFFECTIVE_EFFECTIVE_VIEW';
    public const AD_CONVERT_TYPE_LIVE_ENTER_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_ENTER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_HEAT_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_HEAT';
    public const AD_CONVERT_TYPE_LIVE_ROI_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_ROI';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';
    public const AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_NEW_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_QC_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_QC_MUST_BUY';
    public const AD_CONVERT_TYPE_SHOPPING_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction = 'AD_CONVERT_TYPE_SHOPPING';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_EFFECTIVE_EFFECTIVE_VIEW_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_ENTER_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_HEAT_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_ROI_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderGetV10DataListDeliverySettingExternalAction', $value));
        }
        return (string) $value;
    }
}
