<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletCreateV30RecommendedRechargeTier
{
    public const ABOVE_200_ToolsWechatAppletCreateV30RecommendedRechargeTier = 'ABOVE_200';
    public const FROM_100_TO_200_ToolsWechatAppletCreateV30RecommendedRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsWechatAppletCreateV30RecommendedRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsWechatAppletCreateV30RecommendedRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::ABOVE_200_ToolsWechatAppletCreateV30RecommendedRechargeTier,
        self::FROM_100_TO_200_ToolsWechatAppletCreateV30RecommendedRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsWechatAppletCreateV30RecommendedRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsWechatAppletCreateV30RecommendedRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletCreateV30RecommendedRechargeTier', $value));
        }
        return (string) $value;
    }
}
