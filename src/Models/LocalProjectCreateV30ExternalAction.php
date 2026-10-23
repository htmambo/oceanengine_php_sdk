<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalProjectCreateV30ExternalAction
{
    public const CLUE_ACQUISITION_LocalProjectCreateV30ExternalAction = 'CLUE_ACQUISITION';
    public const CLUE_CONFIRM_LocalProjectCreateV30ExternalAction = 'CLUE_CONFIRM';
    public const CLUE_HIGH_INTENTION_LocalProjectCreateV30ExternalAction = 'CLUE_HIGH_INTENTION';
    public const FOLLOW_ACTION_LocalProjectCreateV30ExternalAction = 'FOLLOW_ACTION';
    public const LIVE_ENGAGEMENT_LocalProjectCreateV30ExternalAction = 'LIVE_ENGAGEMENT';
    public const LIVE_ENTER_ACTION_LocalProjectCreateV30ExternalAction = 'LIVE_ENTER_ACTION';
    public const LIVE_OTO_CLICK_LocalProjectCreateV30ExternalAction = 'LIVE_OTO_CLICK';
    public const LIVE_OTO_GROUP_BUYING_LocalProjectCreateV30ExternalAction = 'LIVE_OTO_GROUP_BUYING';
    public const LIVE_STAY_TIME_LocalProjectCreateV30ExternalAction = 'LIVE_STAY_TIME';
    public const NATIVE_ACTION_LocalProjectCreateV30ExternalAction = 'NATIVE_ACTION';
    public const POI_RECOMMEND_LocalProjectCreateV30ExternalAction = 'POI_RECOMMEND';
    public const PRIVATE_MESSAGE_LocalProjectCreateV30ExternalAction = 'PRIVATE_MESSAGE';
    public const SHOW_LocalProjectCreateV30ExternalAction = 'SHOW';

    public const ALLOWED_VALUES = [
        self::CLUE_ACQUISITION_LocalProjectCreateV30ExternalAction,
        self::CLUE_CONFIRM_LocalProjectCreateV30ExternalAction,
        self::CLUE_HIGH_INTENTION_LocalProjectCreateV30ExternalAction,
        self::FOLLOW_ACTION_LocalProjectCreateV30ExternalAction,
        self::LIVE_ENGAGEMENT_LocalProjectCreateV30ExternalAction,
        self::LIVE_ENTER_ACTION_LocalProjectCreateV30ExternalAction,
        self::LIVE_OTO_CLICK_LocalProjectCreateV30ExternalAction,
        self::LIVE_OTO_GROUP_BUYING_LocalProjectCreateV30ExternalAction,
        self::LIVE_STAY_TIME_LocalProjectCreateV30ExternalAction,
        self::NATIVE_ACTION_LocalProjectCreateV30ExternalAction,
        self::POI_RECOMMEND_LocalProjectCreateV30ExternalAction,
        self::PRIVATE_MESSAGE_LocalProjectCreateV30ExternalAction,
        self::SHOW_LocalProjectCreateV30ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalProjectCreateV30ExternalAction', $value));
        }
        return (string) $value;
    }
}
