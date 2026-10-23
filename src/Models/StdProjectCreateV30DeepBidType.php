<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30DeepBidType
{
    public const ALI_FL_StdProjectCreateV30DeepBidType = 'ALI_FL';
    public const AUTO_MIN_SECOND_STAGE_StdProjectCreateV30DeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const BID_PER_ACTION_StdProjectCreateV30DeepBidType = 'BID_PER_ACTION';
    public const DEEP_BID_DEFAULT_StdProjectCreateV30DeepBidType = 'DEEP_BID_DEFAULT';
    public const DEEP_BID_MIN_StdProjectCreateV30DeepBidType = 'DEEP_BID_MIN';
    public const DEEP_BID_PACING_StdProjectCreateV30DeepBidType = 'DEEP_BID_PACING';
    public const DEEP_BID_TYPE_RETENTION_DAYS_StdProjectCreateV30DeepBidType = 'DEEP_BID_TYPE_RETENTION_DAYS';
    public const FIRST_AND_SEVEN_PAY_ROI_StdProjectCreateV30DeepBidType = 'FIRST_AND_SEVEN_PAY_ROI';
    public const FORM_BID_StdProjectCreateV30DeepBidType = 'FORM_BID';
    public const IAAP_ROI_24_H_AND_7_D_StdProjectCreateV30DeepBidType = 'IAAP_ROI_24H_AND_7D';
    public const IAAP_SEVEN_ROI_COEFFICIENT_StdProjectCreateV30DeepBidType = 'IAAP_SEVEN_ROI_COEFFICIENT';
    public const LOAN_ROI_StdProjectCreateV30DeepBidType = 'LOAN_ROI';
    public const MIN_SECOND_STAGE_StdProjectCreateV30DeepBidType = 'MIN_SECOND_STAGE';
    public const NET_ORDER_StdProjectCreateV30DeepBidType = 'NET_ORDER';
    public const NET_ORDER_ROI_StdProjectCreateV30DeepBidType = 'NET_ORDER_ROI';
    public const PACING_SECOND_STAGE_StdProjectCreateV30DeepBidType = 'PACING_SECOND_STAGE';
    public const PER_AND_SEVEN_PAY_ROI_StdProjectCreateV30DeepBidType = 'PER_AND_SEVEN_PAY_ROI';
    public const PHONE_CONNECT_BID_StdProjectCreateV30DeepBidType = 'PHONE_CONNECT_BID';
    public const ROI_COEFFICIENT_StdProjectCreateV30DeepBidType = 'ROI_COEFFICIENT';
    public const ROI_DIRECT_MAIL_StdProjectCreateV30DeepBidType = 'ROI_DIRECT_MAIL';
    public const ROI_PACING_StdProjectCreateV30DeepBidType = 'ROI_PACING';
    public const ROI_THREE_StdProjectCreateV30DeepBidType = 'ROI_THREE';
    public const RTA_DOUBLE_BID_StdProjectCreateV30DeepBidType = 'RTA_DOUBLE_BID';
    public const SEVEN_ROI_COEFFICIENT_StdProjectCreateV30DeepBidType = 'SEVEN_ROI_COEFFICIENT';
    public const SMARTBID_StdProjectCreateV30DeepBidType = 'SMARTBID';
    public const SOCIAL_ROI_StdProjectCreateV30DeepBidType = 'SOCIAL_ROI';
    public const THIRTY_ROI_COEFFICIENT_StdProjectCreateV30DeepBidType = 'THIRTY_ROI_COEFFICIENT';

    public const ALLOWED_VALUES = [
        self::ALI_FL_StdProjectCreateV30DeepBidType,
        self::AUTO_MIN_SECOND_STAGE_StdProjectCreateV30DeepBidType,
        self::BID_PER_ACTION_StdProjectCreateV30DeepBidType,
        self::DEEP_BID_DEFAULT_StdProjectCreateV30DeepBidType,
        self::DEEP_BID_MIN_StdProjectCreateV30DeepBidType,
        self::DEEP_BID_PACING_StdProjectCreateV30DeepBidType,
        self::DEEP_BID_TYPE_RETENTION_DAYS_StdProjectCreateV30DeepBidType,
        self::FIRST_AND_SEVEN_PAY_ROI_StdProjectCreateV30DeepBidType,
        self::FORM_BID_StdProjectCreateV30DeepBidType,
        self::IAAP_ROI_24_H_AND_7_D_StdProjectCreateV30DeepBidType,
        self::IAAP_SEVEN_ROI_COEFFICIENT_StdProjectCreateV30DeepBidType,
        self::LOAN_ROI_StdProjectCreateV30DeepBidType,
        self::MIN_SECOND_STAGE_StdProjectCreateV30DeepBidType,
        self::NET_ORDER_StdProjectCreateV30DeepBidType,
        self::NET_ORDER_ROI_StdProjectCreateV30DeepBidType,
        self::PACING_SECOND_STAGE_StdProjectCreateV30DeepBidType,
        self::PER_AND_SEVEN_PAY_ROI_StdProjectCreateV30DeepBidType,
        self::PHONE_CONNECT_BID_StdProjectCreateV30DeepBidType,
        self::ROI_COEFFICIENT_StdProjectCreateV30DeepBidType,
        self::ROI_DIRECT_MAIL_StdProjectCreateV30DeepBidType,
        self::ROI_PACING_StdProjectCreateV30DeepBidType,
        self::ROI_THREE_StdProjectCreateV30DeepBidType,
        self::RTA_DOUBLE_BID_StdProjectCreateV30DeepBidType,
        self::SEVEN_ROI_COEFFICIENT_StdProjectCreateV30DeepBidType,
        self::SMARTBID_StdProjectCreateV30DeepBidType,
        self::SOCIAL_ROI_StdProjectCreateV30DeepBidType,
        self::THIRTY_ROI_COEFFICIENT_StdProjectCreateV30DeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30DeepBidType', $value));
        }
        return (string) $value;
    }
}
