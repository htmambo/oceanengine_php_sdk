<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType
{
    public const ALI_FL_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'ALI_FL';
    public const AUTO_MIN_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const BID_PER_ACTION_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'BID_PER_ACTION';
    public const DEEP_BID_DEFAULT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'DEEP_BID_DEFAULT';
    public const DEEP_BID_MIN_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'DEEP_BID_MIN';
    public const DEEP_BID_PACING_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'DEEP_BID_PACING';
    public const DEEP_BID_TYPE_RETENTION_DAYS_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'DEEP_BID_TYPE_RETENTION_DAYS';
    public const FIRST_AND_SEVEN_PAY_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'FIRST_AND_SEVEN_PAY_ROI';
    public const FORM_BID_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'FORM_BID';
    public const IAAP_ROI_24_H_AND_7_D_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'IAAP_ROI_24H_AND_7D';
    public const IAAP_SEVEN_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'IAAP_SEVEN_ROI_COEFFICIENT';
    public const LAYER_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'LAYER_ROI';
    public const LOAN_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'LOAN_ROI';
    public const MIN_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'MIN_SECOND_STAGE';
    public const NET_ORDER_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'NET_ORDER';
    public const NET_ORDER_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'NET_ORDER_ROI';
    public const PACING_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'PACING_SECOND_STAGE';
    public const PER_AND_SEVEN_PAY_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'PER_AND_SEVEN_PAY_ROI';
    public const PHONE_CONNECT_BID_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'PHONE_CONNECT_BID';
    public const ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'ROI_COEFFICIENT';
    public const ROI_DIRECT_MAIL_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'ROI_DIRECT_MAIL';
    public const ROI_PACING_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'ROI_PACING';
    public const ROI_THREE_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'ROI_THREE';
    public const RTA_DOUBLE_BID_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'RTA_DOUBLE_BID';
    public const SEVEN_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'SEVEN_ROI_COEFFICIENT';
    public const SMARTBID_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'SMARTBID';
    public const SOCIAL_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'SOCIAL_ROI';
    public const THIRTY_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType = 'THIRTY_ROI_COEFFICIENT';

    public const ALLOWED_VALUES = [
        self::ALI_FL_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::AUTO_MIN_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::BID_PER_ACTION_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::DEEP_BID_DEFAULT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::DEEP_BID_MIN_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::DEEP_BID_PACING_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::DEEP_BID_TYPE_RETENTION_DAYS_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::FIRST_AND_SEVEN_PAY_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::FORM_BID_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::IAAP_ROI_24_H_AND_7_D_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::IAAP_SEVEN_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::LAYER_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::LOAN_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::MIN_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::NET_ORDER_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::NET_ORDER_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::PACING_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::PER_AND_SEVEN_PAY_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::PHONE_CONNECT_BID_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::ROI_DIRECT_MAIL_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::ROI_PACING_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::ROI_THREE_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::RTA_DOUBLE_BID_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::SEVEN_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::SMARTBID_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::SOCIAL_ROI_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
        self::THIRTY_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDbtGetV30DataDeepBidTypeDetailDeepBidType', $value));
        }
        return (string) $value;
    }
}
