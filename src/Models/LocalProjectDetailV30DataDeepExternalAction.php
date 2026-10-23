<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataDeepExternalAction
{
    public const CLUE_ACQUISITION_LocalProjectDetailV30DataDeepExternalAction = 'CLUE_ACQUISITION';
    public const CLUE_CONFIRM_LocalProjectDetailV30DataDeepExternalAction = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_LocalProjectDetailV30DataDeepExternalAction = 'CLUE_HIGH_INTENTION';
    public const FOLLOW_ACTION_LocalProjectDetailV30DataDeepExternalAction = 'FOLLOW_ACTION';
    public const INTENTION_CLUE_ACQUISITION_LocalProjectDetailV30DataDeepExternalAction = 'INTENTION_CLUE_ACQUISITION';
    public const LIVE_ENGAGEMENT_LocalProjectDetailV30DataDeepExternalAction = 'LIVE_ENGAGEMENT';
    public const LIVE_ENTER_ACTION_LocalProjectDetailV30DataDeepExternalAction = 'LIVE_ENTER_ACTION';
    public const LIVE_OTO_CLICK_LocalProjectDetailV30DataDeepExternalAction = 'LIVE_OTO_CLICK';
    public const LIVE_OTO_GROUP_BUYING_LocalProjectDetailV30DataDeepExternalAction = 'LIVE_OTO_GROUP_BUYING';
    public const LIVE_STAY_TIME_LocalProjectDetailV30DataDeepExternalAction = 'LIVE_STAY_TIME';
    public const MESSAGE_INTENTION_CLUE_LocalProjectDetailV30DataDeepExternalAction = 'MESSAGE_INTENTION_CLUE';
    public const NATIVE_ACTION_LocalProjectDetailV30DataDeepExternalAction = 'NATIVE_ACTION';
    public const OTO_PAY_LocalProjectDetailV30DataDeepExternalAction = 'OTO_PAY';
    public const POI_RECOMMEND_LocalProjectDetailV30DataDeepExternalAction = 'POI_RECOMMEND';
    public const PRIVATE_MESSAGE_LocalProjectDetailV30DataDeepExternalAction = 'PRIVATE_MESSAGE';
    public const SHOW_LocalProjectDetailV30DataDeepExternalAction = 'SHOW';

    public const ALLOWED_VALUES = [
        self::CLUE_ACQUISITION_LocalProjectDetailV30DataDeepExternalAction,
        self::CLUE_CONFIRM_LocalProjectDetailV30DataDeepExternalAction,
        self::CLUE_HIGH_INTENTION_LocalProjectDetailV30DataDeepExternalAction,
        self::FOLLOW_ACTION_LocalProjectDetailV30DataDeepExternalAction,
        self::INTENTION_CLUE_ACQUISITION_LocalProjectDetailV30DataDeepExternalAction,
        self::LIVE_ENGAGEMENT_LocalProjectDetailV30DataDeepExternalAction,
        self::LIVE_ENTER_ACTION_LocalProjectDetailV30DataDeepExternalAction,
        self::LIVE_OTO_CLICK_LocalProjectDetailV30DataDeepExternalAction,
        self::LIVE_OTO_GROUP_BUYING_LocalProjectDetailV30DataDeepExternalAction,
        self::LIVE_STAY_TIME_LocalProjectDetailV30DataDeepExternalAction,
        self::MESSAGE_INTENTION_CLUE_LocalProjectDetailV30DataDeepExternalAction,
        self::NATIVE_ACTION_LocalProjectDetailV30DataDeepExternalAction,
        self::OTO_PAY_LocalProjectDetailV30DataDeepExternalAction,
        self::POI_RECOMMEND_LocalProjectDetailV30DataDeepExternalAction,
        self::PRIVATE_MESSAGE_LocalProjectDetailV30DataDeepExternalAction,
        self::SHOW_LocalProjectDetailV30DataDeepExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataDeepExternalAction', $value));
        }
        return (string) $value;
    }
}
