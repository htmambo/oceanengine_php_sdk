<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ReportAudienceAwemeListV2FilteringBehaviors
{
    public const LIVE_EXCEPTIONAL_ReportAudienceAwemeListV2FilteringBehaviors = 'LIVE_EXCEPTIONAL';
    public const GOODS_CARTS_ORDER_ReportAudienceAwemeListV2FilteringBehaviors = 'GOODS_CARTS_ORDER';
    public const COMMENTED_USER_ReportAudienceAwemeListV2FilteringBehaviors = 'COMMENTED_USER';
    public const LIVE_GOODS_CLICK_ReportAudienceAwemeListV2FilteringBehaviors = 'LIVE_GOODS_CLICK';
    public const FOLLOWED_USER_ReportAudienceAwemeListV2FilteringBehaviors = 'FOLLOWED_USER';
    public const LIKED_USER_ReportAudienceAwemeListV2FilteringBehaviors = 'LIKED_USER';
    public const GOODS_CARTS_CLICK_ReportAudienceAwemeListV2FilteringBehaviors = 'GOODS_CARTS_CLICK';
    public const LIVE_EFFECTIVE_WATCH_ReportAudienceAwemeListV2FilteringBehaviors = 'LIVE_EFFECTIVE_WATCH';
    public const SHARED_USER_ReportAudienceAwemeListV2FilteringBehaviors = 'SHARED_USER';
    public const LIVE_COMMENT_ReportAudienceAwemeListV2FilteringBehaviors = 'LIVE_COMMENT';
    public const LIVE_WATCH_ReportAudienceAwemeListV2FilteringBehaviors = 'LIVE_WATCH';
    public const LIVE_GOODS_ORDER_ReportAudienceAwemeListV2FilteringBehaviors = 'LIVE_GOODS_ORDER';

    public const ALLOWED_VALUES = [
        self::LIVE_EXCEPTIONAL_ReportAudienceAwemeListV2FilteringBehaviors,
        self::GOODS_CARTS_ORDER_ReportAudienceAwemeListV2FilteringBehaviors,
        self::COMMENTED_USER_ReportAudienceAwemeListV2FilteringBehaviors,
        self::LIVE_GOODS_CLICK_ReportAudienceAwemeListV2FilteringBehaviors,
        self::FOLLOWED_USER_ReportAudienceAwemeListV2FilteringBehaviors,
        self::LIKED_USER_ReportAudienceAwemeListV2FilteringBehaviors,
        self::GOODS_CARTS_CLICK_ReportAudienceAwemeListV2FilteringBehaviors,
        self::LIVE_EFFECTIVE_WATCH_ReportAudienceAwemeListV2FilteringBehaviors,
        self::SHARED_USER_ReportAudienceAwemeListV2FilteringBehaviors,
        self::LIVE_COMMENT_ReportAudienceAwemeListV2FilteringBehaviors,
        self::LIVE_WATCH_ReportAudienceAwemeListV2FilteringBehaviors,
        self::LIVE_GOODS_ORDER_ReportAudienceAwemeListV2FilteringBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ReportAudienceAwemeListV2FilteringBehaviors', $value));
        }
        return (string) $value;
    }
}
