<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons
{
    public const ANCHOR_FORBID_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons = 'ANCHOR_FORBID';
    public const ANCHOR_LIVE_PERMISSION_LIMIT_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons = 'ANCHOR_LIVE_PERMISSION_LIMIT';
    public const IS_ROI2_GROUP_CREATED_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons = 'IS_ROI2_GROUP_CREATED';
    public const LIVE_UNI_PROM_AUTH_CAN_APPLY_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons = 'LIVE_UNI_PROM_AUTH_CAN_APPLY';
    public const LIVE_UNI_PROM_AUTH_CAN_CONTROL_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons = 'LIVE_UNI_PROM_AUTH_CAN_CONTROL';
    public const NO_SHOP_PERMISSION_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons = 'NO_SHOP_PERMISSION';
    public const ROI2_DELIVERY_LIMIT_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons = 'ROI2_DELIVERY_LIMIT';
    public const VIDEO_UNI_PROM_AUTH_CAN_APPLY_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons = 'VIDEO_UNI_PROM_AUTH_CAN_APPLY';
    public const VIDEO_UNI_PROM_AUTH_CAN_CONTROL_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons = 'VIDEO_UNI_PROM_AUTH_CAN_CONTROL';

    public const ALLOWED_VALUES = [
        self::ANCHOR_FORBID_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons,
        self::ANCHOR_LIVE_PERMISSION_LIMIT_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons,
        self::IS_ROI2_GROUP_CREATED_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons,
        self::LIVE_UNI_PROM_AUTH_CAN_APPLY_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons,
        self::LIVE_UNI_PROM_AUTH_CAN_CONTROL_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons,
        self::NO_SHOP_PERMISSION_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons,
        self::ROI2_DELIVERY_LIMIT_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons,
        self::VIDEO_UNI_PROM_AUTH_CAN_APPLY_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons,
        self::VIDEO_UNI_PROM_AUTH_CAN_CONTROL_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListProductDisableReasons', $value));
        }
        return (string) $value;
    }
}
