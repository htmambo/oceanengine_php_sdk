<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class EventManagerDbtGetV30DataDeepBidType
{
    public const ALI_FL_EventManagerDbtGetV30DataDeepBidType = 'ALI_FL';
    public const AUTO_MIN_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const BID_PER_ACTION_EventManagerDbtGetV30DataDeepBidType = 'BID_PER_ACTION';
    public const DEEP_BID_DEFAULT_EventManagerDbtGetV30DataDeepBidType = 'DEEP_BID_DEFAULT';
    public const DEEP_BID_MIN_EventManagerDbtGetV30DataDeepBidType = 'DEEP_BID_MIN';
    public const DEEP_BID_PACING_EventManagerDbtGetV30DataDeepBidType = 'DEEP_BID_PACING';
    public const DEEP_BID_TYPE_RETENTION_DAYS_EventManagerDbtGetV30DataDeepBidType = 'DEEP_BID_TYPE_RETENTION_DAYS';
    public const FIRST_AND_SEVEN_PAY_ROI_EventManagerDbtGetV30DataDeepBidType = 'FIRST_AND_SEVEN_PAY_ROI';
    public const FORM_BID_EventManagerDbtGetV30DataDeepBidType = 'FORM_BID';
    public const IAAP_ROI_24_H_AND_7_D_EventManagerDbtGetV30DataDeepBidType = 'IAAP_ROI_24H_AND_7D';
    public const IAAP_SEVEN_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidType = 'IAAP_SEVEN_ROI_COEFFICIENT';
    public const LAYER_ROI_EventManagerDbtGetV30DataDeepBidType = 'LAYER_ROI';
    public const LOAN_ROI_EventManagerDbtGetV30DataDeepBidType = 'LOAN_ROI';
    public const MIN_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidType = 'MIN_SECOND_STAGE';
    public const NET_ORDER_EventManagerDbtGetV30DataDeepBidType = 'NET_ORDER';
    public const NET_ORDER_ROI_EventManagerDbtGetV30DataDeepBidType = 'NET_ORDER_ROI';
    public const PACING_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidType = 'PACING_SECOND_STAGE';
    public const PER_AND_SEVEN_PAY_ROI_EventManagerDbtGetV30DataDeepBidType = 'PER_AND_SEVEN_PAY_ROI';
    public const PHONE_CONNECT_BID_EventManagerDbtGetV30DataDeepBidType = 'PHONE_CONNECT_BID';
    public const ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidType = 'ROI_COEFFICIENT';
    public const ROI_DIRECT_MAIL_EventManagerDbtGetV30DataDeepBidType = 'ROI_DIRECT_MAIL';
    public const ROI_PACING_EventManagerDbtGetV30DataDeepBidType = 'ROI_PACING';
    public const ROI_THREE_EventManagerDbtGetV30DataDeepBidType = 'ROI_THREE';
    public const RTA_DOUBLE_BID_EventManagerDbtGetV30DataDeepBidType = 'RTA_DOUBLE_BID';
    public const SEVEN_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidType = 'SEVEN_ROI_COEFFICIENT';
    public const SMARTBID_EventManagerDbtGetV30DataDeepBidType = 'SMARTBID';
    public const SOCIAL_ROI_EventManagerDbtGetV30DataDeepBidType = 'SOCIAL_ROI';
    public const THIRTY_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidType = 'THIRTY_ROI_COEFFICIENT';

    public const ALLOWED_VALUES = [
        self::ALI_FL_EventManagerDbtGetV30DataDeepBidType,
        self::AUTO_MIN_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidType,
        self::BID_PER_ACTION_EventManagerDbtGetV30DataDeepBidType,
        self::DEEP_BID_DEFAULT_EventManagerDbtGetV30DataDeepBidType,
        self::DEEP_BID_MIN_EventManagerDbtGetV30DataDeepBidType,
        self::DEEP_BID_PACING_EventManagerDbtGetV30DataDeepBidType,
        self::DEEP_BID_TYPE_RETENTION_DAYS_EventManagerDbtGetV30DataDeepBidType,
        self::FIRST_AND_SEVEN_PAY_ROI_EventManagerDbtGetV30DataDeepBidType,
        self::FORM_BID_EventManagerDbtGetV30DataDeepBidType,
        self::IAAP_ROI_24_H_AND_7_D_EventManagerDbtGetV30DataDeepBidType,
        self::IAAP_SEVEN_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidType,
        self::LAYER_ROI_EventManagerDbtGetV30DataDeepBidType,
        self::LOAN_ROI_EventManagerDbtGetV30DataDeepBidType,
        self::MIN_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidType,
        self::NET_ORDER_EventManagerDbtGetV30DataDeepBidType,
        self::NET_ORDER_ROI_EventManagerDbtGetV30DataDeepBidType,
        self::PACING_SECOND_STAGE_EventManagerDbtGetV30DataDeepBidType,
        self::PER_AND_SEVEN_PAY_ROI_EventManagerDbtGetV30DataDeepBidType,
        self::PHONE_CONNECT_BID_EventManagerDbtGetV30DataDeepBidType,
        self::ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidType,
        self::ROI_DIRECT_MAIL_EventManagerDbtGetV30DataDeepBidType,
        self::ROI_PACING_EventManagerDbtGetV30DataDeepBidType,
        self::ROI_THREE_EventManagerDbtGetV30DataDeepBidType,
        self::RTA_DOUBLE_BID_EventManagerDbtGetV30DataDeepBidType,
        self::SEVEN_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidType,
        self::SMARTBID_EventManagerDbtGetV30DataDeepBidType,
        self::SOCIAL_ROI_EventManagerDbtGetV30DataDeepBidType,
        self::THIRTY_ROI_COEFFICIENT_EventManagerDbtGetV30DataDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum EventManagerDbtGetV30DataDeepBidType', $value));
        }
        return (string) $value;
    }
}
