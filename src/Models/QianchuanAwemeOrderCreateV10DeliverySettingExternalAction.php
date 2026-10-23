<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeOrderCreateV10DeliverySettingExternalAction
{
    public const AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION';
    public const AD_CONVERT_TYPE_LIVE_HEAT_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_HEAT';
    public const AD_CONVERT_TYPE_LIVE_ROI_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_ROI';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION';
    public const AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction = 'AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY';
    public const AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction = 'AD_CONVERT_TYPE_NEW_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction = 'AD_CONVERT_TYPE_QC_FOLLOW_ACTION';
    public const AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction = 'AD_CONVERT_TYPE_QC_MUST_BUY';
    public const AD_CONVERT_TYPE_SHOPPING_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction = 'AD_CONVERT_TYPE_SHOPPING';

    public const ALLOWED_VALUES = [
        self::AD_CONVERT_TYPE_LIVE_CLICK_PRODUCT_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_HEAT_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_ROI_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_LIVE_SUCCESSORDER_PAY_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_NEW_FOLLOW_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_QC_FOLLOW_ACTION_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_QC_MUST_BUY_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction,
        self::AD_CONVERT_TYPE_SHOPPING_QianchuanAwemeOrderCreateV10DeliverySettingExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeOrderCreateV10DeliverySettingExternalAction', $value));
        }
        return (string) $value;
    }
}
