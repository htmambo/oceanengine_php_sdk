<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons
{
    public const ANCHOR_FORBID_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'ANCHOR_FORBID';
    public const ANCHOR_LIVE_PERMISSION_LIMIT_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'ANCHOR_LIVE_PERMISSION_LIMIT';
    public const IS_ROI2_GROUP_CREATED_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'IS_ROI2_GROUP_CREATED';
    public const LIVE_UNIPROM_AUTH_CAN_APPLY_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'LIVE_UNIPROM_AUTH_CAN_APPLY';
    public const LIVE_UNIPROM_AUTH_CAN_CONTROL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'LIVE_UNIPROM_AUTH_CAN_CONTROL';
    public const NO_SHOP_PERMISSION_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'NO_SHOP_PERMISSION';
    public const PRODUCT_CHANNEL_DISABLE_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'PRODUCT_CHANNEL_DISABLE';
    public const PRODUCT_LIMIT_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'PRODUCT_LIMIT';
    public const ROI2_DELIVERY_LIMIT_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'ROI2_DELIVERY_LIMIT';
    public const VIDEO_UNIPROM_AUTH_CAN_APPLY_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'VIDEO_UNIPROM_AUTH_CAN_APPLY';
    public const VIDEO_UNIPROM_AUTH_CAN_CONTROL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons = 'VIDEO_UNIPROM_AUTH_CAN_CONTROL';

    public const ALLOWED_VALUES = [
        self::ANCHOR_FORBID_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::ANCHOR_LIVE_PERMISSION_LIMIT_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::IS_ROI2_GROUP_CREATED_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::LIVE_UNIPROM_AUTH_CAN_APPLY_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::LIVE_UNIPROM_AUTH_CAN_CONTROL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::NO_SHOP_PERMISSION_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::PRODUCT_CHANNEL_DISABLE_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::PRODUCT_LIMIT_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::ROI2_DELIVERY_LIMIT_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::VIDEO_UNIPROM_AUTH_CAN_APPLY_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
        self::VIDEO_UNIPROM_AUTH_CAN_CONTROL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallAwemeListV10DataBindAwemeUserInfosProductDisableReasons', $value));
        }
        return (string) $value;
    }
}
