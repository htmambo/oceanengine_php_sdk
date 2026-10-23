<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions
{
    public const COMMENT_LINK_CLICK_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'COMMENT_LINK_CLICK';
    public const DY_PRIVATE_MESSAGES_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'DY_PRIVATE_MESSAGES';
    public const FOLLOWER_COUNT_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'FOLLOWER_COUNT';
    public const HIGH_INTERACTION_FREQUENCY_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'HIGH_INTERACTION_FREQUENCY';
    public const HIGH_INTERACTION_QUALITY_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'HIGH_INTERACTION_QUALITY';
    public const LIKE_COMMENT_AMOUNT_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'LIKE_COMMENT_AMOUNT';
    public const LIVE_ROOM_FOLLOWER_INCREASE_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'LIVE_ROOM_FOLLOWER_INCREASE';
    public const LIVE_ROOM_POPULARITY_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'LIVE_ROOM_POPULARITY';
    public const ONLY_FOR_ACTIVATION_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'ONLY_FOR_ACTIVATION';
    public const VIDEO_PLAYBACK_VOLUME_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'VIDEO_PLAYBACK_VOLUME';
    public const VIEWER_DONATION_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'VIEWER_DONATION';
    public const VIEWER_INTERACTION_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions = 'VIEWER_INTERACTION';

    public const ALLOWED_VALUES = [
        self::COMMENT_LINK_CLICK_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::DY_PRIVATE_MESSAGES_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::FOLLOWER_COUNT_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::HIGH_INTERACTION_FREQUENCY_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::HIGH_INTERACTION_QUALITY_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::LIKE_COMMENT_AMOUNT_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::LIVE_ROOM_FOLLOWER_INCREASE_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::LIVE_ROOM_POPULARITY_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::ONLY_FOR_ACTIVATION_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::VIDEO_PLAYBACK_VOLUME_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::VIEWER_DONATION_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
        self::VIEWER_INTERACTION_DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOptionalTargetsListV30DataLiveRecommendEasExternalActions', $value));
        }
        return (string) $value;
    }
}
