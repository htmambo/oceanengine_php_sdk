<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions
{
    public const COMMENT_LINK_CLICK_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'COMMENT_LINK_CLICK';
    public const DY_PRIVATE_MESSAGES_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'DY_PRIVATE_MESSAGES';
    public const FOLLOWER_COUNT_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'FOLLOWER_COUNT';
    public const HIGH_INTERACTION_FREQUENCY_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'HIGH_INTERACTION_FREQUENCY';
    public const HIGH_INTERACTION_QUALITY_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'HIGH_INTERACTION_QUALITY';
    public const LIKE_COMMENT_AMOUNT_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'LIKE_COMMENT_AMOUNT';
    public const LIVE_ROOM_FOLLOWER_INCREASE_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'LIVE_ROOM_FOLLOWER_INCREASE';
    public const LIVE_ROOM_POPULARITY_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'LIVE_ROOM_POPULARITY';
    public const ONLY_FOR_ACTIVATION_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'ONLY_FOR_ACTIVATION';
    public const VIDEO_PLAYBACK_VOLUME_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'VIDEO_PLAYBACK_VOLUME';
    public const VIEWER_DONATION_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'VIEWER_DONATION';
    public const VIEWER_INTERACTION_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions = 'VIEWER_INTERACTION';

    public const ALLOWED_VALUES = [
        self::COMMENT_LINK_CLICK_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::DY_PRIVATE_MESSAGES_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::FOLLOWER_COUNT_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::HIGH_INTERACTION_FREQUENCY_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::HIGH_INTERACTION_QUALITY_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::LIKE_COMMENT_AMOUNT_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::LIVE_ROOM_FOLLOWER_INCREASE_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::LIVE_ROOM_POPULARITY_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::ONLY_FOR_ACTIVATION_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::VIDEO_PLAYBACK_VOLUME_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::VIEWER_DONATION_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
        self::VIEWER_INTERACTION_DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum DouplusOptionalTargetsListV30DataItemRecommendEasExternalActions', $value));
        }
        return (string) $value;
    }
}
