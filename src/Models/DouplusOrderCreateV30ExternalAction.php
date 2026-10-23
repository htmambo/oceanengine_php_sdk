<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOrderCreateV30ExternalAction
{
    public const LIKE_COMMENT_AMOUNT_DouplusOrderCreateV30ExternalAction = 'LIKE_COMMENT_AMOUNT';
    public const FOLLOWER_COUNT_DouplusOrderCreateV30ExternalAction = 'FOLLOWER_COUNT';
    public const VIDEO_PLAYBACK_VOLUME_DouplusOrderCreateV30ExternalAction = 'VIDEO_PLAYBACK_VOLUME';
    public const DY_PRIVATE_MESSAGES_DouplusOrderCreateV30ExternalAction = 'DY_PRIVATE_MESSAGES';
    public const HIGH_INTERACTION_QUALITY_DouplusOrderCreateV30ExternalAction = 'HIGH_INTERACTION_QUALITY';
    public const HIGH_INTERACTION_FREQUENCY_DouplusOrderCreateV30ExternalAction = 'HIGH_INTERACTION_FREQUENCY';
    public const ONLY_FOR_ACTIVATION_DouplusOrderCreateV30ExternalAction = 'ONLY_FOR_ACTIVATION';
    public const COMMENT_LINK_CLICK_DouplusOrderCreateV30ExternalAction = 'COMMENT_LINK_CLICK';
    public const LIVE_ROOM_POPULARITY_DouplusOrderCreateV30ExternalAction = 'LIVE_ROOM_POPULARITY';
    public const LIVE_ROOM_FOLLOWER_INCREASE_DouplusOrderCreateV30ExternalAction = 'LIVE_ROOM_FOLLOWER_INCREASE';
    public const VIEWER_DONATION_DouplusOrderCreateV30ExternalAction = 'VIEWER_DONATION';
    public const VIEWER_INTERACTION_DouplusOrderCreateV30ExternalAction = 'VIEWER_INTERACTION';

    public const ALLOWED_VALUES = [
        self::LIKE_COMMENT_AMOUNT_DouplusOrderCreateV30ExternalAction,
        self::FOLLOWER_COUNT_DouplusOrderCreateV30ExternalAction,
        self::VIDEO_PLAYBACK_VOLUME_DouplusOrderCreateV30ExternalAction,
        self::DY_PRIVATE_MESSAGES_DouplusOrderCreateV30ExternalAction,
        self::HIGH_INTERACTION_QUALITY_DouplusOrderCreateV30ExternalAction,
        self::HIGH_INTERACTION_FREQUENCY_DouplusOrderCreateV30ExternalAction,
        self::ONLY_FOR_ACTIVATION_DouplusOrderCreateV30ExternalAction,
        self::COMMENT_LINK_CLICK_DouplusOrderCreateV30ExternalAction,
        self::LIVE_ROOM_POPULARITY_DouplusOrderCreateV30ExternalAction,
        self::LIVE_ROOM_FOLLOWER_INCREASE_DouplusOrderCreateV30ExternalAction,
        self::VIEWER_DONATION_DouplusOrderCreateV30ExternalAction,
        self::VIEWER_INTERACTION_DouplusOrderCreateV30ExternalAction,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOrderCreateV30ExternalAction', $value));
        }
        return (string) $value;
    }
}
