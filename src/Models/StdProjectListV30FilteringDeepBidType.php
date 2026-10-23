<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30FilteringDeepBidType
{
    public const ALI_FL_StdProjectListV30FilteringDeepBidType = 'ALI_FL';
    public const AUTO_MIN_SECOND_STAGE_StdProjectListV30FilteringDeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const BID_PER_ACTION_StdProjectListV30FilteringDeepBidType = 'BID_PER_ACTION';
    public const DEEP_BID_DEFAULT_StdProjectListV30FilteringDeepBidType = 'DEEP_BID_DEFAULT';
    public const DEEP_BID_MIN_StdProjectListV30FilteringDeepBidType = 'DEEP_BID_MIN';
    public const DEEP_BID_PACING_StdProjectListV30FilteringDeepBidType = 'DEEP_BID_PACING';
    public const DEEP_BID_TYPE_RETENTION_DAYS_StdProjectListV30FilteringDeepBidType = 'DEEP_BID_TYPE_RETENTION_DAYS';
    public const FIRST_AND_SEVEN_PAY_ROI_StdProjectListV30FilteringDeepBidType = 'FIRST_AND_SEVEN_PAY_ROI';
    public const FORM_BID_StdProjectListV30FilteringDeepBidType = 'FORM_BID';
    public const IAAP_ROI_24_H_AND_7_D_StdProjectListV30FilteringDeepBidType = 'IAAP_ROI_24H_AND_7D';
    public const IAAP_SEVEN_ROI_COEFFICIENT_StdProjectListV30FilteringDeepBidType = 'IAAP_SEVEN_ROI_COEFFICIENT';
    public const LOAN_ROI_StdProjectListV30FilteringDeepBidType = 'LOAN_ROI';
    public const MIN_SECOND_STAGE_StdProjectListV30FilteringDeepBidType = 'MIN_SECOND_STAGE';
    public const NET_ORDER_StdProjectListV30FilteringDeepBidType = 'NET_ORDER';
    public const NET_ORDER_ROI_StdProjectListV30FilteringDeepBidType = 'NET_ORDER_ROI';
    public const PACING_SECOND_STAGE_StdProjectListV30FilteringDeepBidType = 'PACING_SECOND_STAGE';
    public const PER_AND_SEVEN_PAY_ROI_StdProjectListV30FilteringDeepBidType = 'PER_AND_SEVEN_PAY_ROI';
    public const PHONE_CONNECT_BID_StdProjectListV30FilteringDeepBidType = 'PHONE_CONNECT_BID';
    public const ROI_COEFFICIENT_StdProjectListV30FilteringDeepBidType = 'ROI_COEFFICIENT';
    public const ROI_DIRECT_MAIL_StdProjectListV30FilteringDeepBidType = 'ROI_DIRECT_MAIL';
    public const ROI_PACING_StdProjectListV30FilteringDeepBidType = 'ROI_PACING';
    public const ROI_THREE_StdProjectListV30FilteringDeepBidType = 'ROI_THREE';
    public const RTA_DOUBLE_BID_StdProjectListV30FilteringDeepBidType = 'RTA_DOUBLE_BID';
    public const SEVEN_ROI_COEFFICIENT_StdProjectListV30FilteringDeepBidType = 'SEVEN_ROI_COEFFICIENT';
    public const SMARTBID_StdProjectListV30FilteringDeepBidType = 'SMARTBID';
    public const SOCIAL_ROI_StdProjectListV30FilteringDeepBidType = 'SOCIAL_ROI';
    public const THIRTY_ROI_COEFFICIENT_StdProjectListV30FilteringDeepBidType = 'THIRTY_ROI_COEFFICIENT';

    public const ALLOWED_VALUES = [
        self::ALI_FL_StdProjectListV30FilteringDeepBidType,
        self::AUTO_MIN_SECOND_STAGE_StdProjectListV30FilteringDeepBidType,
        self::BID_PER_ACTION_StdProjectListV30FilteringDeepBidType,
        self::DEEP_BID_DEFAULT_StdProjectListV30FilteringDeepBidType,
        self::DEEP_BID_MIN_StdProjectListV30FilteringDeepBidType,
        self::DEEP_BID_PACING_StdProjectListV30FilteringDeepBidType,
        self::DEEP_BID_TYPE_RETENTION_DAYS_StdProjectListV30FilteringDeepBidType,
        self::FIRST_AND_SEVEN_PAY_ROI_StdProjectListV30FilteringDeepBidType,
        self::FORM_BID_StdProjectListV30FilteringDeepBidType,
        self::IAAP_ROI_24_H_AND_7_D_StdProjectListV30FilteringDeepBidType,
        self::IAAP_SEVEN_ROI_COEFFICIENT_StdProjectListV30FilteringDeepBidType,
        self::LOAN_ROI_StdProjectListV30FilteringDeepBidType,
        self::MIN_SECOND_STAGE_StdProjectListV30FilteringDeepBidType,
        self::NET_ORDER_StdProjectListV30FilteringDeepBidType,
        self::NET_ORDER_ROI_StdProjectListV30FilteringDeepBidType,
        self::PACING_SECOND_STAGE_StdProjectListV30FilteringDeepBidType,
        self::PER_AND_SEVEN_PAY_ROI_StdProjectListV30FilteringDeepBidType,
        self::PHONE_CONNECT_BID_StdProjectListV30FilteringDeepBidType,
        self::ROI_COEFFICIENT_StdProjectListV30FilteringDeepBidType,
        self::ROI_DIRECT_MAIL_StdProjectListV30FilteringDeepBidType,
        self::ROI_PACING_StdProjectListV30FilteringDeepBidType,
        self::ROI_THREE_StdProjectListV30FilteringDeepBidType,
        self::RTA_DOUBLE_BID_StdProjectListV30FilteringDeepBidType,
        self::SEVEN_ROI_COEFFICIENT_StdProjectListV30FilteringDeepBidType,
        self::SMARTBID_StdProjectListV30FilteringDeepBidType,
        self::SOCIAL_ROI_StdProjectListV30FilteringDeepBidType,
        self::THIRTY_ROI_COEFFICIENT_StdProjectListV30FilteringDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30FilteringDeepBidType', $value));
        }
        return (string) $value;
    }
}
