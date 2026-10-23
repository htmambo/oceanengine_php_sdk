<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatAppletCreateV30MinRechargeTier
{
    public const FROM_100_TO_200_ToolsWechatAppletCreateV30MinRechargeTier = 'FROM_100_TO_200';
    public const FROM_FIFTY_TO_HUNDRED_ToolsWechatAppletCreateV30MinRechargeTier = 'FROM_FIFTY_TO_HUNDRED';
    public const FROM_ONE_TO_FIFTY_ToolsWechatAppletCreateV30MinRechargeTier = 'FROM_ONE_TO_FIFTY';

    public const ALLOWED_VALUES = [
        self::FROM_100_TO_200_ToolsWechatAppletCreateV30MinRechargeTier,
        self::FROM_FIFTY_TO_HUNDRED_ToolsWechatAppletCreateV30MinRechargeTier,
        self::FROM_ONE_TO_FIFTY_ToolsWechatAppletCreateV30MinRechargeTier,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatAppletCreateV30MinRechargeTier', $value));
        }
        return (string) $value;
    }
}
