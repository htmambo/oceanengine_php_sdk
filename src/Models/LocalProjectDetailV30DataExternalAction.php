<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectDetailV30DataExternalAction
{
    public const CLUE_ACQUISITION_LocalProjectDetailV30DataExternalAction = 'CLUE_ACQUISITION';
    public const CLUE_CONFIRM_LocalProjectDetailV30DataExternalAction = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_LocalProjectDetailV30DataExternalAction = 'CLUE_HIGH_INTENTION';
    public const FOLLOW_ACTION_LocalProjectDetailV30DataExternalAction = 'FOLLOW_ACTION';
    public const INTENTION_CLUE_ACQUISITION_LocalProjectDetailV30DataExternalAction = 'INTENTION_CLUE_ACQUISITION';
    public const LIVE_ENGAGEMENT_LocalProjectDetailV30DataExternalAction = 'LIVE_ENGAGEMENT';
    public const LIVE_ENTER_ACTION_LocalProjectDetailV30DataExternalAction = 'LIVE_ENTER_ACTION';
    public const LIVE_OTO_CLICK_LocalProjectDetailV30DataExternalAction = 'LIVE_OTO_CLICK';
    public const LIVE_OTO_GROUP_BUYING_LocalProjectDetailV30DataExternalAction = 'LIVE_OTO_GROUP_BUYING';
    public const LIVE_STAY_TIME_LocalProjectDetailV30DataExternalAction = 'LIVE_STAY_TIME';
    public const NATIVE_ACTION_LocalProjectDetailV30DataExternalAction = 'NATIVE_ACTION';
    public const OTO_PAY_LocalProjectDetailV30DataExternalAction = 'OTO_PAY';
    public const POI_RECOMMEND_LocalProjectDetailV30DataExternalAction = 'POI_RECOMMEND';
    public const PRIVATE_MESSAGE_LocalProjectDetailV30DataExternalAction = 'PRIVATE_MESSAGE';
    public const SHOW_LocalProjectDetailV30DataExternalAction = 'SHOW';

    public const ALLOWED_VALUES = [
        self::CLUE_ACQUISITION_LocalProjectDetailV30DataExternalAction,
        self::CLUE_CONFIRM_LocalProjectDetailV30DataExternalAction,
        self::CLUE_HIGH_INTENTION_LocalProjectDetailV30DataExternalAction,
        self::FOLLOW_ACTION_LocalProjectDetailV30DataExternalAction,
        self::INTENTION_CLUE_ACQUISITION_LocalProjectDetailV30DataExternalAction,
        self::LIVE_ENGAGEMENT_LocalProjectDetailV30DataExternalAction,
        self::LIVE_ENTER_ACTION_LocalProjectDetailV30DataExternalAction,
        self::LIVE_OTO_CLICK_LocalProjectDetailV30DataExternalAction,
        self::LIVE_OTO_GROUP_BUYING_LocalProjectDetailV30DataExternalAction,
        self::LIVE_STAY_TIME_LocalProjectDetailV30DataExternalAction,
        self::NATIVE_ACTION_LocalProjectDetailV30DataExternalAction,
        self::OTO_PAY_LocalProjectDetailV30DataExternalAction,
        self::POI_RECOMMEND_LocalProjectDetailV30DataExternalAction,
        self::PRIVATE_MESSAGE_LocalProjectDetailV30DataExternalAction,
        self::SHOW_LocalProjectDetailV30DataExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectDetailV30DataExternalAction', $value));
        }
        return (string) $value;
    }
}
