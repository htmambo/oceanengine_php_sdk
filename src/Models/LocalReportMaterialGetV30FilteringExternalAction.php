<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportMaterialGetV30FilteringExternalAction
{
    public const CLUE_ACQUISITION_LocalReportMaterialGetV30FilteringExternalAction = 'CLUE_ACQUISITION';
    public const CLUE_CONFIRM_LocalReportMaterialGetV30FilteringExternalAction = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_LocalReportMaterialGetV30FilteringExternalAction = 'CLUE_HIGH_INTENTION';
    public const FOLLOW_ACTION_LocalReportMaterialGetV30FilteringExternalAction = 'FOLLOW_ACTION';
    public const INTENTION_CLUE_ACQUISITION_LocalReportMaterialGetV30FilteringExternalAction = 'INTENTION_CLUE_ACQUISITION';
    public const LIVE_ENGAGEMENT_LocalReportMaterialGetV30FilteringExternalAction = 'LIVE_ENGAGEMENT';
    public const LIVE_ENTER_ACTION_LocalReportMaterialGetV30FilteringExternalAction = 'LIVE_ENTER_ACTION';
    public const LIVE_OTO_CLICK_LocalReportMaterialGetV30FilteringExternalAction = 'LIVE_OTO_CLICK';
    public const LIVE_OTO_GROUP_BUYING_LocalReportMaterialGetV30FilteringExternalAction = 'LIVE_OTO_GROUP_BUYING';
    public const LIVE_STAY_TIME_LocalReportMaterialGetV30FilteringExternalAction = 'LIVE_STAY_TIME';
    public const NATIVE_ACTION_LocalReportMaterialGetV30FilteringExternalAction = 'NATIVE_ACTION';
    public const OTO_PAY_LocalReportMaterialGetV30FilteringExternalAction = 'OTO_PAY';
    public const POI_RECOMMEND_LocalReportMaterialGetV30FilteringExternalAction = 'POI_RECOMMEND';
    public const PRIVATE_MESSAGE_LocalReportMaterialGetV30FilteringExternalAction = 'PRIVATE_MESSAGE';
    public const SHOW_LocalReportMaterialGetV30FilteringExternalAction = 'SHOW';

    public const ALLOWED_VALUES = [
        self::CLUE_ACQUISITION_LocalReportMaterialGetV30FilteringExternalAction,
        self::CLUE_CONFIRM_LocalReportMaterialGetV30FilteringExternalAction,
        self::CLUE_HIGH_INTENTION_LocalReportMaterialGetV30FilteringExternalAction,
        self::FOLLOW_ACTION_LocalReportMaterialGetV30FilteringExternalAction,
        self::INTENTION_CLUE_ACQUISITION_LocalReportMaterialGetV30FilteringExternalAction,
        self::LIVE_ENGAGEMENT_LocalReportMaterialGetV30FilteringExternalAction,
        self::LIVE_ENTER_ACTION_LocalReportMaterialGetV30FilteringExternalAction,
        self::LIVE_OTO_CLICK_LocalReportMaterialGetV30FilteringExternalAction,
        self::LIVE_OTO_GROUP_BUYING_LocalReportMaterialGetV30FilteringExternalAction,
        self::LIVE_STAY_TIME_LocalReportMaterialGetV30FilteringExternalAction,
        self::NATIVE_ACTION_LocalReportMaterialGetV30FilteringExternalAction,
        self::OTO_PAY_LocalReportMaterialGetV30FilteringExternalAction,
        self::POI_RECOMMEND_LocalReportMaterialGetV30FilteringExternalAction,
        self::PRIVATE_MESSAGE_LocalReportMaterialGetV30FilteringExternalAction,
        self::SHOW_LocalReportMaterialGetV30FilteringExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportMaterialGetV30FilteringExternalAction', $value));
        }
        return (string) $value;
    }
}
