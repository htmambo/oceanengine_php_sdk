<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthCancelV2AuthType
{
    public const AWEME_ACCOUNT_ToolsAwemeAuthCancelV2AuthType = 'AWEME_ACCOUNT';
    public const AWEME_HOMEPAGE_ToolsAwemeAuthCancelV2AuthType = 'AWEME_HOMEPAGE';
    public const LIVE_ACCOUNT_ToolsAwemeAuthCancelV2AuthType = 'LIVE_ACCOUNT';
    public const VIDEO_ITEM_ToolsAwemeAuthCancelV2AuthType = 'VIDEO_ITEM';

    public const ALLOWED_VALUES = [
        self::AWEME_ACCOUNT_ToolsAwemeAuthCancelV2AuthType,
        self::AWEME_HOMEPAGE_ToolsAwemeAuthCancelV2AuthType,
        self::LIVE_ACCOUNT_ToolsAwemeAuthCancelV2AuthType,
        self::VIDEO_ITEM_ToolsAwemeAuthCancelV2AuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthCancelV2AuthType', $value));
        }
        return (string) $value;
    }
}
