<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListExternalAction
{
    public const CLUE_ACQUISITION_LocalProjectListV30DataProjectListExternalAction = 'CLUE_ACQUISITION';
    public const CLUE_CONFIRM_LocalProjectListV30DataProjectListExternalAction = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_LocalProjectListV30DataProjectListExternalAction = 'CLUE_HIGH_INTENTION';
    public const FOLLOW_ACTION_LocalProjectListV30DataProjectListExternalAction = 'FOLLOW_ACTION';
    public const INTENTION_CLUE_ACQUISITION_LocalProjectListV30DataProjectListExternalAction = 'INTENTION_CLUE_ACQUISITION';
    public const LIVE_ENGAGEMENT_LocalProjectListV30DataProjectListExternalAction = 'LIVE_ENGAGEMENT';
    public const LIVE_ENTER_ACTION_LocalProjectListV30DataProjectListExternalAction = 'LIVE_ENTER_ACTION';
    public const LIVE_OTO_CLICK_LocalProjectListV30DataProjectListExternalAction = 'LIVE_OTO_CLICK';
    public const LIVE_OTO_GROUP_BUYING_LocalProjectListV30DataProjectListExternalAction = 'LIVE_OTO_GROUP_BUYING';
    public const LIVE_STAY_TIME_LocalProjectListV30DataProjectListExternalAction = 'LIVE_STAY_TIME';
    public const MESSAGE_INTENTION_CLUE_LocalProjectListV30DataProjectListExternalAction = 'MESSAGE_INTENTION_CLUE';
    public const NATIVE_ACTION_LocalProjectListV30DataProjectListExternalAction = 'NATIVE_ACTION';
    public const OTO_PAY_LocalProjectListV30DataProjectListExternalAction = 'OTO_PAY';
    public const POI_RECOMMEND_LocalProjectListV30DataProjectListExternalAction = 'POI_RECOMMEND';
    public const PRIVATE_MESSAGE_LocalProjectListV30DataProjectListExternalAction = 'PRIVATE_MESSAGE';
    public const SHOW_LocalProjectListV30DataProjectListExternalAction = 'SHOW';

    public const ALLOWED_VALUES = [
        self::CLUE_ACQUISITION_LocalProjectListV30DataProjectListExternalAction,
        self::CLUE_CONFIRM_LocalProjectListV30DataProjectListExternalAction,
        self::CLUE_HIGH_INTENTION_LocalProjectListV30DataProjectListExternalAction,
        self::FOLLOW_ACTION_LocalProjectListV30DataProjectListExternalAction,
        self::INTENTION_CLUE_ACQUISITION_LocalProjectListV30DataProjectListExternalAction,
        self::LIVE_ENGAGEMENT_LocalProjectListV30DataProjectListExternalAction,
        self::LIVE_ENTER_ACTION_LocalProjectListV30DataProjectListExternalAction,
        self::LIVE_OTO_CLICK_LocalProjectListV30DataProjectListExternalAction,
        self::LIVE_OTO_GROUP_BUYING_LocalProjectListV30DataProjectListExternalAction,
        self::LIVE_STAY_TIME_LocalProjectListV30DataProjectListExternalAction,
        self::MESSAGE_INTENTION_CLUE_LocalProjectListV30DataProjectListExternalAction,
        self::NATIVE_ACTION_LocalProjectListV30DataProjectListExternalAction,
        self::OTO_PAY_LocalProjectListV30DataProjectListExternalAction,
        self::POI_RECOMMEND_LocalProjectListV30DataProjectListExternalAction,
        self::PRIVATE_MESSAGE_LocalProjectListV30DataProjectListExternalAction,
        self::SHOW_LocalProjectListV30DataProjectListExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListExternalAction', $value));
        }
        return (string) $value;
    }
}
