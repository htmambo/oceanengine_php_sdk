<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalReportAccountGetV30FilteringExternalAction
{
    public const CLUE_ACQUISITION_LocalReportAccountGetV30FilteringExternalAction = 'CLUE_ACQUISITION';
    public const CLUE_CONFIRM_LocalReportAccountGetV30FilteringExternalAction = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_LocalReportAccountGetV30FilteringExternalAction = 'CLUE_HIGH_INTENTION';
    public const FOLLOW_ACTION_LocalReportAccountGetV30FilteringExternalAction = 'FOLLOW_ACTION';
    public const INTENTION_CLUE_ACQUISITION_LocalReportAccountGetV30FilteringExternalAction = 'INTENTION_CLUE_ACQUISITION';
    public const LIVE_ENGAGEMENT_LocalReportAccountGetV30FilteringExternalAction = 'LIVE_ENGAGEMENT';
    public const LIVE_ENTER_ACTION_LocalReportAccountGetV30FilteringExternalAction = 'LIVE_ENTER_ACTION';
    public const LIVE_OTO_CLICK_LocalReportAccountGetV30FilteringExternalAction = 'LIVE_OTO_CLICK';
    public const LIVE_OTO_GROUP_BUYING_LocalReportAccountGetV30FilteringExternalAction = 'LIVE_OTO_GROUP_BUYING';
    public const LIVE_STAY_TIME_LocalReportAccountGetV30FilteringExternalAction = 'LIVE_STAY_TIME';
    public const NATIVE_ACTION_LocalReportAccountGetV30FilteringExternalAction = 'NATIVE_ACTION';
    public const OTO_PAY_LocalReportAccountGetV30FilteringExternalAction = 'OTO_PAY';
    public const POI_RECOMMEND_LocalReportAccountGetV30FilteringExternalAction = 'POI_RECOMMEND';
    public const PRIVATE_MESSAGE_LocalReportAccountGetV30FilteringExternalAction = 'PRIVATE_MESSAGE';
    public const SHOW_LocalReportAccountGetV30FilteringExternalAction = 'SHOW';

    public const ALLOWED_VALUES = [
        self::CLUE_ACQUISITION_LocalReportAccountGetV30FilteringExternalAction,
        self::CLUE_CONFIRM_LocalReportAccountGetV30FilteringExternalAction,
        self::CLUE_HIGH_INTENTION_LocalReportAccountGetV30FilteringExternalAction,
        self::FOLLOW_ACTION_LocalReportAccountGetV30FilteringExternalAction,
        self::INTENTION_CLUE_ACQUISITION_LocalReportAccountGetV30FilteringExternalAction,
        self::LIVE_ENGAGEMENT_LocalReportAccountGetV30FilteringExternalAction,
        self::LIVE_ENTER_ACTION_LocalReportAccountGetV30FilteringExternalAction,
        self::LIVE_OTO_CLICK_LocalReportAccountGetV30FilteringExternalAction,
        self::LIVE_OTO_GROUP_BUYING_LocalReportAccountGetV30FilteringExternalAction,
        self::LIVE_STAY_TIME_LocalReportAccountGetV30FilteringExternalAction,
        self::NATIVE_ACTION_LocalReportAccountGetV30FilteringExternalAction,
        self::OTO_PAY_LocalReportAccountGetV30FilteringExternalAction,
        self::POI_RECOMMEND_LocalReportAccountGetV30FilteringExternalAction,
        self::PRIVATE_MESSAGE_LocalReportAccountGetV30FilteringExternalAction,
        self::SHOW_LocalReportAccountGetV30FilteringExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalReportAccountGetV30FilteringExternalAction', $value));
        }
        return (string) $value;
    }
}
