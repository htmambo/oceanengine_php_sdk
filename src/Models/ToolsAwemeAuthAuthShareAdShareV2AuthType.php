<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthAuthShareAdShareV2AuthType
{
    public const AWEME_ACCOUNT_ToolsAwemeAuthAuthShareAdShareV2AuthType = 'AWEME_ACCOUNT';
    public const AWEME_HOMEPAGE_ToolsAwemeAuthAuthShareAdShareV2AuthType = 'AWEME_HOMEPAGE';
    public const LIVE_ACCOUNT_ToolsAwemeAuthAuthShareAdShareV2AuthType = 'LIVE_ACCOUNT';
    public const VIDEO_ITEM_ToolsAwemeAuthAuthShareAdShareV2AuthType = 'VIDEO_ITEM';

    public const ALLOWED_VALUES = [
        self::AWEME_ACCOUNT_ToolsAwemeAuthAuthShareAdShareV2AuthType,
        self::AWEME_HOMEPAGE_ToolsAwemeAuthAuthShareAdShareV2AuthType,
        self::LIVE_ACCOUNT_ToolsAwemeAuthAuthShareAdShareV2AuthType,
        self::VIDEO_ITEM_ToolsAwemeAuthAuthShareAdShareV2AuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthAuthShareAdShareV2AuthType', $value));
        }
        return (string) $value;
    }
}
