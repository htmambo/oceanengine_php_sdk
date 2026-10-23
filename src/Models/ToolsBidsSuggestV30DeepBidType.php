<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsBidsSuggestV30DeepBidType
{
    public const ALI_FL_ToolsBidsSuggestV30DeepBidType = 'ALI_FL';
    public const AUTO_MIN_SECOND_STAGE_ToolsBidsSuggestV30DeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const BID_PER_ACTION_ToolsBidsSuggestV30DeepBidType = 'BID_PER_ACTION';
    public const DEEP_BID_DEFAULT_ToolsBidsSuggestV30DeepBidType = 'DEEP_BID_DEFAULT';
    public const DEEP_BID_MIN_ToolsBidsSuggestV30DeepBidType = 'DEEP_BID_MIN';
    public const DEEP_BID_PACING_ToolsBidsSuggestV30DeepBidType = 'DEEP_BID_PACING';
    public const DEEP_BID_TYPE_RETENTION_DAYS_ToolsBidsSuggestV30DeepBidType = 'DEEP_BID_TYPE_RETENTION_DAYS';
    public const FORM_BID_ToolsBidsSuggestV30DeepBidType = 'FORM_BID';
    public const MIN_SECOND_STAGE_ToolsBidsSuggestV30DeepBidType = 'MIN_SECOND_STAGE';
    public const PACING_SECOND_STAGE_ToolsBidsSuggestV30DeepBidType = 'PACING_SECOND_STAGE';
    public const PER_AND_SEVEN_PAY_ROI_ToolsBidsSuggestV30DeepBidType = 'PER_AND_SEVEN_PAY_ROI';
    public const PHONE_CONNECT_BID_ToolsBidsSuggestV30DeepBidType = 'PHONE_CONNECT_BID';
    public const ROI_COEFFICIENT_ToolsBidsSuggestV30DeepBidType = 'ROI_COEFFICIENT';
    public const ROI_DIRECT_MAIL_ToolsBidsSuggestV30DeepBidType = 'ROI_DIRECT_MAIL';
    public const ROI_PACING_ToolsBidsSuggestV30DeepBidType = 'ROI_PACING';
    public const SMARTBID_ToolsBidsSuggestV30DeepBidType = 'SMARTBID';
    public const SOCIAL_ROI_ToolsBidsSuggestV30DeepBidType = 'SOCIAL_ROI';

    public const ALLOWED_VALUES = [
        self::ALI_FL_ToolsBidsSuggestV30DeepBidType,
        self::AUTO_MIN_SECOND_STAGE_ToolsBidsSuggestV30DeepBidType,
        self::BID_PER_ACTION_ToolsBidsSuggestV30DeepBidType,
        self::DEEP_BID_DEFAULT_ToolsBidsSuggestV30DeepBidType,
        self::DEEP_BID_MIN_ToolsBidsSuggestV30DeepBidType,
        self::DEEP_BID_PACING_ToolsBidsSuggestV30DeepBidType,
        self::DEEP_BID_TYPE_RETENTION_DAYS_ToolsBidsSuggestV30DeepBidType,
        self::FORM_BID_ToolsBidsSuggestV30DeepBidType,
        self::MIN_SECOND_STAGE_ToolsBidsSuggestV30DeepBidType,
        self::PACING_SECOND_STAGE_ToolsBidsSuggestV30DeepBidType,
        self::PER_AND_SEVEN_PAY_ROI_ToolsBidsSuggestV30DeepBidType,
        self::PHONE_CONNECT_BID_ToolsBidsSuggestV30DeepBidType,
        self::ROI_COEFFICIENT_ToolsBidsSuggestV30DeepBidType,
        self::ROI_DIRECT_MAIL_ToolsBidsSuggestV30DeepBidType,
        self::ROI_PACING_ToolsBidsSuggestV30DeepBidType,
        self::SMARTBID_ToolsBidsSuggestV30DeepBidType,
        self::SOCIAL_ROI_ToolsBidsSuggestV30DeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsBidsSuggestV30DeepBidType', $value));
        }
        return (string) $value;
    }
}
