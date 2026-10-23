<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors
{
    public const ADD_CART_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'add_cart';
    public const BROWSE_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'browse';
    public const CLICK_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'click';
    public const COMMENT_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'comment';
    public const ENTER_DETAIL_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'enter_detail';
    public const FAVORITES_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'favorites';
    public const FORWARD_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'forward';
    public const LIKE_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'like';
    public const ORDER_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'order';
    public const QUERY_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'query';
    public const SHOW_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors = 'show';

    public const ALLOWED_VALUES = [
        self::ADD_CART_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::BROWSE_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::CLICK_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::COMMENT_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::ENTER_DETAIL_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::FAVORITES_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::FORWARD_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::LIKE_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::ORDER_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::QUERY_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
        self::SHOW_YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum YuntuAudienceLabelCreateV30CalculateRuleBehaviorFiltersBehaviors', $value));
        }
        return (string) $value;
    }
}
