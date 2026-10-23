<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListDeliverySettingDeepBidType
{
    public const ALI_FL_ProjectListV30DataListDeliverySettingDeepBidType = 'ALI_FL';
    public const AUTO_MIN_SECOND_STAGE_ProjectListV30DataListDeliverySettingDeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const BID_PER_ACTION_ProjectListV30DataListDeliverySettingDeepBidType = 'BID_PER_ACTION';
    public const DEEP_BID_DEFAULT_ProjectListV30DataListDeliverySettingDeepBidType = 'DEEP_BID_DEFAULT';
    public const DEEP_BID_MIN_ProjectListV30DataListDeliverySettingDeepBidType = 'DEEP_BID_MIN';
    public const DEEP_BID_PACING_ProjectListV30DataListDeliverySettingDeepBidType = 'DEEP_BID_PACING';
    public const DEEP_BID_TYPE_RETENTION_DAYS_ProjectListV30DataListDeliverySettingDeepBidType = 'DEEP_BID_TYPE_RETENTION_DAYS';
    public const FIRST_AND_SEVEN_PAY_ROI_ProjectListV30DataListDeliverySettingDeepBidType = 'FIRST_AND_SEVEN_PAY_ROI';
    public const FORM_BID_ProjectListV30DataListDeliverySettingDeepBidType = 'FORM_BID';
    public const IAAP_ROI_24_H_AND_7_D_ProjectListV30DataListDeliverySettingDeepBidType = 'IAAP_ROI_24H_AND_7D';
    public const IAAP_SEVEN_ROI_COEFFICIENT_ProjectListV30DataListDeliverySettingDeepBidType = 'IAAP_SEVEN_ROI_COEFFICIENT';
    public const LOAN_ROI_ProjectListV30DataListDeliverySettingDeepBidType = 'LOAN_ROI';
    public const MIN_SECOND_STAGE_ProjectListV30DataListDeliverySettingDeepBidType = 'MIN_SECOND_STAGE';
    public const NET_ORDER_ProjectListV30DataListDeliverySettingDeepBidType = 'NET_ORDER';
    public const NET_ORDER_ROI_ProjectListV30DataListDeliverySettingDeepBidType = 'NET_ORDER_ROI';
    public const PACING_SECOND_STAGE_ProjectListV30DataListDeliverySettingDeepBidType = 'PACING_SECOND_STAGE';
    public const PER_AND_SEVEN_PAY_ROI_ProjectListV30DataListDeliverySettingDeepBidType = 'PER_AND_SEVEN_PAY_ROI';
    public const PHONE_CONNECT_BID_ProjectListV30DataListDeliverySettingDeepBidType = 'PHONE_CONNECT_BID';
    public const ROI_COEFFICIENT_ProjectListV30DataListDeliverySettingDeepBidType = 'ROI_COEFFICIENT';
    public const ROI_DIRECT_MAIL_ProjectListV30DataListDeliverySettingDeepBidType = 'ROI_DIRECT_MAIL';
    public const ROI_PACING_ProjectListV30DataListDeliverySettingDeepBidType = 'ROI_PACING';
    public const RTA_DOUBLE_BID_ProjectListV30DataListDeliverySettingDeepBidType = 'RTA_DOUBLE_BID';
    public const SEVEN_ROI_COEFFICIENT_ProjectListV30DataListDeliverySettingDeepBidType = 'SEVEN_ROI_COEFFICIENT';
    public const SMARTBID_ProjectListV30DataListDeliverySettingDeepBidType = 'SMARTBID';
    public const SOCIAL_ROI_ProjectListV30DataListDeliverySettingDeepBidType = 'SOCIAL_ROI';
    public const THIRTY_ROI_COEFFICIENT_ProjectListV30DataListDeliverySettingDeepBidType = 'THIRTY_ROI_COEFFICIENT';

    public const ALLOWED_VALUES = [
        self::ALI_FL_ProjectListV30DataListDeliverySettingDeepBidType,
        self::AUTO_MIN_SECOND_STAGE_ProjectListV30DataListDeliverySettingDeepBidType,
        self::BID_PER_ACTION_ProjectListV30DataListDeliverySettingDeepBidType,
        self::DEEP_BID_DEFAULT_ProjectListV30DataListDeliverySettingDeepBidType,
        self::DEEP_BID_MIN_ProjectListV30DataListDeliverySettingDeepBidType,
        self::DEEP_BID_PACING_ProjectListV30DataListDeliverySettingDeepBidType,
        self::DEEP_BID_TYPE_RETENTION_DAYS_ProjectListV30DataListDeliverySettingDeepBidType,
        self::FIRST_AND_SEVEN_PAY_ROI_ProjectListV30DataListDeliverySettingDeepBidType,
        self::FORM_BID_ProjectListV30DataListDeliverySettingDeepBidType,
        self::IAAP_ROI_24_H_AND_7_D_ProjectListV30DataListDeliverySettingDeepBidType,
        self::IAAP_SEVEN_ROI_COEFFICIENT_ProjectListV30DataListDeliverySettingDeepBidType,
        self::LOAN_ROI_ProjectListV30DataListDeliverySettingDeepBidType,
        self::MIN_SECOND_STAGE_ProjectListV30DataListDeliverySettingDeepBidType,
        self::NET_ORDER_ProjectListV30DataListDeliverySettingDeepBidType,
        self::NET_ORDER_ROI_ProjectListV30DataListDeliverySettingDeepBidType,
        self::PACING_SECOND_STAGE_ProjectListV30DataListDeliverySettingDeepBidType,
        self::PER_AND_SEVEN_PAY_ROI_ProjectListV30DataListDeliverySettingDeepBidType,
        self::PHONE_CONNECT_BID_ProjectListV30DataListDeliverySettingDeepBidType,
        self::ROI_COEFFICIENT_ProjectListV30DataListDeliverySettingDeepBidType,
        self::ROI_DIRECT_MAIL_ProjectListV30DataListDeliverySettingDeepBidType,
        self::ROI_PACING_ProjectListV30DataListDeliverySettingDeepBidType,
        self::RTA_DOUBLE_BID_ProjectListV30DataListDeliverySettingDeepBidType,
        self::SEVEN_ROI_COEFFICIENT_ProjectListV30DataListDeliverySettingDeepBidType,
        self::SMARTBID_ProjectListV30DataListDeliverySettingDeepBidType,
        self::SOCIAL_ROI_ProjectListV30DataListDeliverySettingDeepBidType,
        self::THIRTY_ROI_COEFFICIENT_ProjectListV30DataListDeliverySettingDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListDeliverySettingDeepBidType', $value));
        }
        return (string) $value;
    }
}
