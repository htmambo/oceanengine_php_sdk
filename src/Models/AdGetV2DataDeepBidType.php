<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataDeepBidType
{
    public const ROI_PACING_AdGetV2DataDeepBidType = 'ROI_PACING';
    public const MIN_SECOND_STAGE_AdGetV2DataDeepBidType = 'MIN_SECOND_STAGE';
    public const SMARTBID_AdGetV2DataDeepBidType = 'SMARTBID';
    public const DEEP_BID_DEFAULT_AdGetV2DataDeepBidType = 'DEEP_BID_DEFAULT';
    public const AUTO_MIN_SECOND_STAGE_AdGetV2DataDeepBidType = 'AUTO_MIN_SECOND_STAGE';
    public const DEEP_BID_PACING_AdGetV2DataDeepBidType = 'DEEP_BID_PACING';
    public const ROI_COEFFICIENT_AdGetV2DataDeepBidType = 'ROI_COEFFICIENT';
    public const DEEP_BID_MIN_AdGetV2DataDeepBidType = 'DEEP_BID_MIN';
    public const BID_PER_ACTION_AdGetV2DataDeepBidType = 'BID_PER_ACTION';
    public const SOCIAL_ROI_AdGetV2DataDeepBidType = 'SOCIAL_ROI';
    public const ALI_FL_AdGetV2DataDeepBidType = 'ALI_FL';
    public const PACING_SECOND_STAGE_AdGetV2DataDeepBidType = 'PACING_SECOND_STAGE';
    public const DEEP_BID_TYPE_RETENTION_DAYS_AdGetV2DataDeepBidType = 'DEEP_BID_TYPE_RETENTION_DAYS';
    public const ROI_DIRECT_MAIL_AdGetV2DataDeepBidType = 'ROI_DIRECT_MAIL';

    public const ALLOWED_VALUES = [
        self::ROI_PACING_AdGetV2DataDeepBidType,
        self::MIN_SECOND_STAGE_AdGetV2DataDeepBidType,
        self::SMARTBID_AdGetV2DataDeepBidType,
        self::DEEP_BID_DEFAULT_AdGetV2DataDeepBidType,
        self::AUTO_MIN_SECOND_STAGE_AdGetV2DataDeepBidType,
        self::DEEP_BID_PACING_AdGetV2DataDeepBidType,
        self::ROI_COEFFICIENT_AdGetV2DataDeepBidType,
        self::DEEP_BID_MIN_AdGetV2DataDeepBidType,
        self::BID_PER_ACTION_AdGetV2DataDeepBidType,
        self::SOCIAL_ROI_AdGetV2DataDeepBidType,
        self::ALI_FL_AdGetV2DataDeepBidType,
        self::PACING_SECOND_STAGE_AdGetV2DataDeepBidType,
        self::DEEP_BID_TYPE_RETENTION_DAYS_AdGetV2DataDeepBidType,
        self::ROI_DIRECT_MAIL_AdGetV2DataDeepBidType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataDeepBidType', $value));
        }
        return (string) $value;
    }
}
