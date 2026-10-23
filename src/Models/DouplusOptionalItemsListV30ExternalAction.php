<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOptionalItemsListV30ExternalAction
{
    public const COMMENT_LINK_CLICK_DouplusOptionalItemsListV30ExternalAction = 'COMMENT_LINK_CLICK';
    public const DY_PRIVATE_MESSAGES_DouplusOptionalItemsListV30ExternalAction = 'DY_PRIVATE_MESSAGES';
    public const FOLLOWER_COUNT_DouplusOptionalItemsListV30ExternalAction = 'FOLLOWER_COUNT';
    public const HIGH_INTERACTION_FREQUENCY_DouplusOptionalItemsListV30ExternalAction = 'HIGH_INTERACTION_FREQUENCY';
    public const HIGH_INTERACTION_QUALITY_DouplusOptionalItemsListV30ExternalAction = 'HIGH_INTERACTION_QUALITY';
    public const LIKE_COMMENT_AMOUNT_DouplusOptionalItemsListV30ExternalAction = 'LIKE_COMMENT_AMOUNT';
    public const LIVE_ROOM_FOLLOWER_INCREASE_DouplusOptionalItemsListV30ExternalAction = 'LIVE_ROOM_FOLLOWER_INCREASE';
    public const LIVE_ROOM_POPULARITY_DouplusOptionalItemsListV30ExternalAction = 'LIVE_ROOM_POPULARITY';
    public const ONLY_FOR_ACTIVATION_DouplusOptionalItemsListV30ExternalAction = 'ONLY_FOR_ACTIVATION';
    public const VIDEO_PLAYBACK_VOLUME_DouplusOptionalItemsListV30ExternalAction = 'VIDEO_PLAYBACK_VOLUME';
    public const VIEWER_DONATION_DouplusOptionalItemsListV30ExternalAction = 'VIEWER_DONATION';
    public const VIEWER_INTERACTION_DouplusOptionalItemsListV30ExternalAction = 'VIEWER_INTERACTION';

    public const ALLOWED_VALUES = [
        self::COMMENT_LINK_CLICK_DouplusOptionalItemsListV30ExternalAction,
        self::DY_PRIVATE_MESSAGES_DouplusOptionalItemsListV30ExternalAction,
        self::FOLLOWER_COUNT_DouplusOptionalItemsListV30ExternalAction,
        self::HIGH_INTERACTION_FREQUENCY_DouplusOptionalItemsListV30ExternalAction,
        self::HIGH_INTERACTION_QUALITY_DouplusOptionalItemsListV30ExternalAction,
        self::LIKE_COMMENT_AMOUNT_DouplusOptionalItemsListV30ExternalAction,
        self::LIVE_ROOM_FOLLOWER_INCREASE_DouplusOptionalItemsListV30ExternalAction,
        self::LIVE_ROOM_POPULARITY_DouplusOptionalItemsListV30ExternalAction,
        self::ONLY_FOR_ACTIVATION_DouplusOptionalItemsListV30ExternalAction,
        self::VIDEO_PLAYBACK_VOLUME_DouplusOptionalItemsListV30ExternalAction,
        self::VIEWER_DONATION_DouplusOptionalItemsListV30ExternalAction,
        self::VIEWER_INTERACTION_DouplusOptionalItemsListV30ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOptionalItemsListV30ExternalAction', $value));
        }
        return (string) $value;
    }
}
