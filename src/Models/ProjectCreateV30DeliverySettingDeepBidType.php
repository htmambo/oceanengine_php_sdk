<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30DeliverySettingDeepBidType
{
    public const ALI_FL_ProjectCreateV30DeliverySettingDeepBidType = 'ALI_FL';
    public const AUTO_MIN_SECOND_STAGE_ProjectCreateV30DeliverySettingDeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const BID_PER_ACTION_ProjectCreateV30DeliverySettingDeepBidType = 'BID_PER_ACTION';
    public const DEEP_BID_DEFAULT_ProjectCreateV30DeliverySettingDeepBidType = 'DEEP_BID_DEFAULT';
    public const DEEP_BID_MIN_ProjectCreateV30DeliverySettingDeepBidType = 'DEEP_BID_MIN';
    public const DEEP_BID_PACING_ProjectCreateV30DeliverySettingDeepBidType = 'DEEP_BID_PACING';
    public const DEEP_BID_TYPE_RETENTION_DAYS_ProjectCreateV30DeliverySettingDeepBidType = 'DEEP_BID_TYPE_RETENTION_DAYS';
    public const FIRST_AND_SEVEN_PAY_ROI_ProjectCreateV30DeliverySettingDeepBidType = 'FIRST_AND_SEVEN_PAY_ROI';
    public const FORM_BID_ProjectCreateV30DeliverySettingDeepBidType = 'FORM_BID';
    public const IAAP_ROI_24_H_AND_7_D_ProjectCreateV30DeliverySettingDeepBidType = 'IAAP_ROI_24H_AND_7D';
    public const IAAP_SEVEN_ROI_COEFFICIENT_ProjectCreateV30DeliverySettingDeepBidType = 'IAAP_SEVEN_ROI_COEFFICIENT';
    public const LOAN_ROI_ProjectCreateV30DeliverySettingDeepBidType = 'LOAN_ROI';
    public const MIN_SECOND_STAGE_ProjectCreateV30DeliverySettingDeepBidType = 'MIN_SECOND_STAGE';
    public const NET_ORDER_ProjectCreateV30DeliverySettingDeepBidType = 'NET_ORDER';
    public const NET_ORDER_ROI_ProjectCreateV30DeliverySettingDeepBidType = 'NET_ORDER_ROI';
    public const PACING_SECOND_STAGE_ProjectCreateV30DeliverySettingDeepBidType = 'PACING_SECOND_STAGE';
    public const PER_AND_SEVEN_PAY_ROI_ProjectCreateV30DeliverySettingDeepBidType = 'PER_AND_SEVEN_PAY_ROI';
    public const PHONE_CONNECT_BID_ProjectCreateV30DeliverySettingDeepBidType = 'PHONE_CONNECT_BID';
    public const ROI_COEFFICIENT_ProjectCreateV30DeliverySettingDeepBidType = 'ROI_COEFFICIENT';
    public const ROI_DIRECT_MAIL_ProjectCreateV30DeliverySettingDeepBidType = 'ROI_DIRECT_MAIL';
    public const ROI_PACING_ProjectCreateV30DeliverySettingDeepBidType = 'ROI_PACING';
    public const RTA_DOUBLE_BID_ProjectCreateV30DeliverySettingDeepBidType = 'RTA_DOUBLE_BID';
    public const SEVEN_ROI_COEFFICIENT_ProjectCreateV30DeliverySettingDeepBidType = 'SEVEN_ROI_COEFFICIENT';
    public const SMARTBID_ProjectCreateV30DeliverySettingDeepBidType = 'SMARTBID';
    public const SOCIAL_ROI_ProjectCreateV30DeliverySettingDeepBidType = 'SOCIAL_ROI';
    public const THIRTY_ROI_COEFFICIENT_ProjectCreateV30DeliverySettingDeepBidType = 'THIRTY_ROI_COEFFICIENT';

    public const ALLOWED_VALUES = [
        self::ALI_FL_ProjectCreateV30DeliverySettingDeepBidType,
        self::AUTO_MIN_SECOND_STAGE_ProjectCreateV30DeliverySettingDeepBidType,
        self::BID_PER_ACTION_ProjectCreateV30DeliverySettingDeepBidType,
        self::DEEP_BID_DEFAULT_ProjectCreateV30DeliverySettingDeepBidType,
        self::DEEP_BID_MIN_ProjectCreateV30DeliverySettingDeepBidType,
        self::DEEP_BID_PACING_ProjectCreateV30DeliverySettingDeepBidType,
        self::DEEP_BID_TYPE_RETENTION_DAYS_ProjectCreateV30DeliverySettingDeepBidType,
        self::FIRST_AND_SEVEN_PAY_ROI_ProjectCreateV30DeliverySettingDeepBidType,
        self::FORM_BID_ProjectCreateV30DeliverySettingDeepBidType,
        self::IAAP_ROI_24_H_AND_7_D_ProjectCreateV30DeliverySettingDeepBidType,
        self::IAAP_SEVEN_ROI_COEFFICIENT_ProjectCreateV30DeliverySettingDeepBidType,
        self::LOAN_ROI_ProjectCreateV30DeliverySettingDeepBidType,
        self::MIN_SECOND_STAGE_ProjectCreateV30DeliverySettingDeepBidType,
        self::NET_ORDER_ProjectCreateV30DeliverySettingDeepBidType,
        self::NET_ORDER_ROI_ProjectCreateV30DeliverySettingDeepBidType,
        self::PACING_SECOND_STAGE_ProjectCreateV30DeliverySettingDeepBidType,
        self::PER_AND_SEVEN_PAY_ROI_ProjectCreateV30DeliverySettingDeepBidType,
        self::PHONE_CONNECT_BID_ProjectCreateV30DeliverySettingDeepBidType,
        self::ROI_COEFFICIENT_ProjectCreateV30DeliverySettingDeepBidType,
        self::ROI_DIRECT_MAIL_ProjectCreateV30DeliverySettingDeepBidType,
        self::ROI_PACING_ProjectCreateV30DeliverySettingDeepBidType,
        self::RTA_DOUBLE_BID_ProjectCreateV30DeliverySettingDeepBidType,
        self::SEVEN_ROI_COEFFICIENT_ProjectCreateV30DeliverySettingDeepBidType,
        self::SMARTBID_ProjectCreateV30DeliverySettingDeepBidType,
        self::SOCIAL_ROI_ProjectCreateV30DeliverySettingDeepBidType,
        self::THIRTY_ROI_COEFFICIENT_ProjectCreateV30DeliverySettingDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30DeliverySettingDeepBidType', $value));
        }
        return (string) $value;
    }
}
