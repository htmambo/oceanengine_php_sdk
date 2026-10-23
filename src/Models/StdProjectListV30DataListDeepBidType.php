<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListDeepBidType
{
    public const ALI_FL_StdProjectListV30DataListDeepBidType = 'ALI_FL';
    public const AUTO_MIN_SECOND_STAGE_StdProjectListV30DataListDeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const BID_PER_ACTION_StdProjectListV30DataListDeepBidType = 'BID_PER_ACTION';
    public const DEEP_BID_DEFAULT_StdProjectListV30DataListDeepBidType = 'DEEP_BID_DEFAULT';
    public const DEEP_BID_MIN_StdProjectListV30DataListDeepBidType = 'DEEP_BID_MIN';
    public const DEEP_BID_PACING_StdProjectListV30DataListDeepBidType = 'DEEP_BID_PACING';
    public const DEEP_BID_TYPE_RETENTION_DAYS_StdProjectListV30DataListDeepBidType = 'DEEP_BID_TYPE_RETENTION_DAYS';
    public const FIRST_AND_SEVEN_PAY_ROI_StdProjectListV30DataListDeepBidType = 'FIRST_AND_SEVEN_PAY_ROI';
    public const FORM_BID_StdProjectListV30DataListDeepBidType = 'FORM_BID';
    public const IAAP_ROI_24_H_AND_7_D_StdProjectListV30DataListDeepBidType = 'IAAP_ROI_24H_AND_7D';
    public const IAAP_SEVEN_ROI_COEFFICIENT_StdProjectListV30DataListDeepBidType = 'IAAP_SEVEN_ROI_COEFFICIENT';
    public const LOAN_ROI_StdProjectListV30DataListDeepBidType = 'LOAN_ROI';
    public const MIN_SECOND_STAGE_StdProjectListV30DataListDeepBidType = 'MIN_SECOND_STAGE';
    public const NET_ORDER_StdProjectListV30DataListDeepBidType = 'NET_ORDER';
    public const NET_ORDER_ROI_StdProjectListV30DataListDeepBidType = 'NET_ORDER_ROI';
    public const PACING_SECOND_STAGE_StdProjectListV30DataListDeepBidType = 'PACING_SECOND_STAGE';
    public const PER_AND_SEVEN_PAY_ROI_StdProjectListV30DataListDeepBidType = 'PER_AND_SEVEN_PAY_ROI';
    public const PHONE_CONNECT_BID_StdProjectListV30DataListDeepBidType = 'PHONE_CONNECT_BID';
    public const ROI_COEFFICIENT_StdProjectListV30DataListDeepBidType = 'ROI_COEFFICIENT';
    public const ROI_DIRECT_MAIL_StdProjectListV30DataListDeepBidType = 'ROI_DIRECT_MAIL';
    public const ROI_PACING_StdProjectListV30DataListDeepBidType = 'ROI_PACING';
    public const ROI_THREE_StdProjectListV30DataListDeepBidType = 'ROI_THREE';
    public const RTA_DOUBLE_BID_StdProjectListV30DataListDeepBidType = 'RTA_DOUBLE_BID';
    public const SEVEN_ROI_COEFFICIENT_StdProjectListV30DataListDeepBidType = 'SEVEN_ROI_COEFFICIENT';
    public const SMARTBID_StdProjectListV30DataListDeepBidType = 'SMARTBID';
    public const SOCIAL_ROI_StdProjectListV30DataListDeepBidType = 'SOCIAL_ROI';
    public const THIRTY_ROI_COEFFICIENT_StdProjectListV30DataListDeepBidType = 'THIRTY_ROI_COEFFICIENT';

    public const ALLOWED_VALUES = [
        self::ALI_FL_StdProjectListV30DataListDeepBidType,
        self::AUTO_MIN_SECOND_STAGE_StdProjectListV30DataListDeepBidType,
        self::BID_PER_ACTION_StdProjectListV30DataListDeepBidType,
        self::DEEP_BID_DEFAULT_StdProjectListV30DataListDeepBidType,
        self::DEEP_BID_MIN_StdProjectListV30DataListDeepBidType,
        self::DEEP_BID_PACING_StdProjectListV30DataListDeepBidType,
        self::DEEP_BID_TYPE_RETENTION_DAYS_StdProjectListV30DataListDeepBidType,
        self::FIRST_AND_SEVEN_PAY_ROI_StdProjectListV30DataListDeepBidType,
        self::FORM_BID_StdProjectListV30DataListDeepBidType,
        self::IAAP_ROI_24_H_AND_7_D_StdProjectListV30DataListDeepBidType,
        self::IAAP_SEVEN_ROI_COEFFICIENT_StdProjectListV30DataListDeepBidType,
        self::LOAN_ROI_StdProjectListV30DataListDeepBidType,
        self::MIN_SECOND_STAGE_StdProjectListV30DataListDeepBidType,
        self::NET_ORDER_StdProjectListV30DataListDeepBidType,
        self::NET_ORDER_ROI_StdProjectListV30DataListDeepBidType,
        self::PACING_SECOND_STAGE_StdProjectListV30DataListDeepBidType,
        self::PER_AND_SEVEN_PAY_ROI_StdProjectListV30DataListDeepBidType,
        self::PHONE_CONNECT_BID_StdProjectListV30DataListDeepBidType,
        self::ROI_COEFFICIENT_StdProjectListV30DataListDeepBidType,
        self::ROI_DIRECT_MAIL_StdProjectListV30DataListDeepBidType,
        self::ROI_PACING_StdProjectListV30DataListDeepBidType,
        self::ROI_THREE_StdProjectListV30DataListDeepBidType,
        self::RTA_DOUBLE_BID_StdProjectListV30DataListDeepBidType,
        self::SEVEN_ROI_COEFFICIENT_StdProjectListV30DataListDeepBidType,
        self::SMARTBID_StdProjectListV30DataListDeepBidType,
        self::SOCIAL_ROI_StdProjectListV30DataListDeepBidType,
        self::THIRTY_ROI_COEFFICIENT_StdProjectListV30DataListDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListDeepBidType', $value));
        }
        return (string) $value;
    }
}
