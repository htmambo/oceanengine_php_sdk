<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction
{
    public const AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_COMMENT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_EFFECTIVE_EFFECTIVE_VIEW_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_EFFECTIVE_EFFECTIVE_VIEW';
    public const AD_CONVERT_TYPE_LIVE_ENTER_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_ENTER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_HEAT_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_HEAT';
    public const AD_CONVERT_TYPE_LIVE_ROI_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_ROI';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';
    public const AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_NEW_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_QC_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_QC_MUST_BUY';
    public const AD_CONVERT_TYPE_SHOPPING_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction = 'AD_CONVERT_TYPE_SHOPPING';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_COMMENT_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_EFFECTIVE_EFFECTIVE_VIEW_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_ENTER_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_HEAT_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_ROI_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderDetailGetV10DataDeliverySettingExternalAction', $value));
        }
        return (string) $value;
    }
}
