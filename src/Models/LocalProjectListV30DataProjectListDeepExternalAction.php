<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectListV30DataProjectListDeepExternalAction
{
    public const CLUE_ACQUISITION_LocalProjectListV30DataProjectListDeepExternalAction = 'CLUE_ACQUISITION';
    public const CLUE_CONFIRM_LocalProjectListV30DataProjectListDeepExternalAction = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_LocalProjectListV30DataProjectListDeepExternalAction = 'CLUE_HIGH_INTENTION';
    public const FOLLOW_ACTION_LocalProjectListV30DataProjectListDeepExternalAction = 'FOLLOW_ACTION';
    public const INTENTION_CLUE_ACQUISITION_LocalProjectListV30DataProjectListDeepExternalAction = 'INTENTION_CLUE_ACQUISITION';
    public const LIVE_ENGAGEMENT_LocalProjectListV30DataProjectListDeepExternalAction = 'LIVE_ENGAGEMENT';
    public const LIVE_ENTER_ACTION_LocalProjectListV30DataProjectListDeepExternalAction = 'LIVE_ENTER_ACTION';
    public const LIVE_OTO_CLICK_LocalProjectListV30DataProjectListDeepExternalAction = 'LIVE_OTO_CLICK';
    public const LIVE_OTO_GROUP_BUYING_LocalProjectListV30DataProjectListDeepExternalAction = 'LIVE_OTO_GROUP_BUYING';
    public const LIVE_STAY_TIME_LocalProjectListV30DataProjectListDeepExternalAction = 'LIVE_STAY_TIME';
    public const MESSAGE_INTENTION_CLUE_LocalProjectListV30DataProjectListDeepExternalAction = 'MESSAGE_INTENTION_CLUE';
    public const NATIVE_ACTION_LocalProjectListV30DataProjectListDeepExternalAction = 'NATIVE_ACTION';
    public const OTO_PAY_LocalProjectListV30DataProjectListDeepExternalAction = 'OTO_PAY';
    public const POI_RECOMMEND_LocalProjectListV30DataProjectListDeepExternalAction = 'POI_RECOMMEND';
    public const PRIVATE_MESSAGE_LocalProjectListV30DataProjectListDeepExternalAction = 'PRIVATE_MESSAGE';
    public const SHOW_LocalProjectListV30DataProjectListDeepExternalAction = 'SHOW';

    public const ALLOWED_VALUES = [
        self::CLUE_ACQUISITION_LocalProjectListV30DataProjectListDeepExternalAction,
        self::CLUE_CONFIRM_LocalProjectListV30DataProjectListDeepExternalAction,
        self::CLUE_HIGH_INTENTION_LocalProjectListV30DataProjectListDeepExternalAction,
        self::FOLLOW_ACTION_LocalProjectListV30DataProjectListDeepExternalAction,
        self::INTENTION_CLUE_ACQUISITION_LocalProjectListV30DataProjectListDeepExternalAction,
        self::LIVE_ENGAGEMENT_LocalProjectListV30DataProjectListDeepExternalAction,
        self::LIVE_ENTER_ACTION_LocalProjectListV30DataProjectListDeepExternalAction,
        self::LIVE_OTO_CLICK_LocalProjectListV30DataProjectListDeepExternalAction,
        self::LIVE_OTO_GROUP_BUYING_LocalProjectListV30DataProjectListDeepExternalAction,
        self::LIVE_STAY_TIME_LocalProjectListV30DataProjectListDeepExternalAction,
        self::MESSAGE_INTENTION_CLUE_LocalProjectListV30DataProjectListDeepExternalAction,
        self::NATIVE_ACTION_LocalProjectListV30DataProjectListDeepExternalAction,
        self::OTO_PAY_LocalProjectListV30DataProjectListDeepExternalAction,
        self::POI_RECOMMEND_LocalProjectListV30DataProjectListDeepExternalAction,
        self::PRIVATE_MESSAGE_LocalProjectListV30DataProjectListDeepExternalAction,
        self::SHOW_LocalProjectListV30DataProjectListDeepExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectListV30DataProjectListDeepExternalAction', $value));
        }
        return (string) $value;
    }
}
