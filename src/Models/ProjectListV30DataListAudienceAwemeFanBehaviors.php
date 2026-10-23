<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceAwemeFanBehaviors
{
    public const COMMENTED_USER_ProjectListV30DataListAudienceAwemeFanBehaviors = 'COMMENTED_USER';
    public const FOLLOWED_USER_ProjectListV30DataListAudienceAwemeFanBehaviors = 'FOLLOWED_USER';
    public const GOODS_CARTS_CLICK_ProjectListV30DataListAudienceAwemeFanBehaviors = 'GOODS_CARTS_CLICK';
    public const GOODS_CARTS_ORDER_ProjectListV30DataListAudienceAwemeFanBehaviors = 'GOODS_CARTS_ORDER';
    public const LIKED_USER_ProjectListV30DataListAudienceAwemeFanBehaviors = 'LIKED_USER';
    public const LIVE_COMMENT_ProjectListV30DataListAudienceAwemeFanBehaviors = 'LIVE_COMMENT';
    public const LIVE_EFFECTIVE_WATCH_ProjectListV30DataListAudienceAwemeFanBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const LIVE_EXCEPTIONAL_ProjectListV30DataListAudienceAwemeFanBehaviors = 'LIVE_EXCEPTIONAL';
    public const LIVE_GOODS_CLICK_ProjectListV30DataListAudienceAwemeFanBehaviors = 'LIVE_GOODS_CLICK';
    public const LIVE_GOODS_ORDER_ProjectListV30DataListAudienceAwemeFanBehaviors = 'LIVE_GOODS_ORDER';
    public const LIVE_WATCH_ProjectListV30DataListAudienceAwemeFanBehaviors = 'LIVE_WATCH';
    public const SHARED_USER_ProjectListV30DataListAudienceAwemeFanBehaviors = 'SHARED_USER';

    public const ALLOWED_VALUES = [
        self::COMMENTED_USER_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::FOLLOWED_USER_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::GOODS_CARTS_CLICK_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::GOODS_CARTS_ORDER_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::LIKED_USER_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::LIVE_COMMENT_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::LIVE_EFFECTIVE_WATCH_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::LIVE_EXCEPTIONAL_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::LIVE_GOODS_CLICK_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::LIVE_GOODS_ORDER_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::LIVE_WATCH_ProjectListV30DataListAudienceAwemeFanBehaviors,
        self::SHARED_USER_ProjectListV30DataListAudienceAwemeFanBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceAwemeFanBehaviors', $value));
        }
        return (string) $value;
    }
}
