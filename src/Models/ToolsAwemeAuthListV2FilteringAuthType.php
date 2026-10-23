<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2FilteringAuthType
{
    public const AWEME_ACCOUNT_ToolsAwemeAuthListV2FilteringAuthType = 'AWEME_ACCOUNT';
    public const AWEME_HOMEPAGE_ToolsAwemeAuthListV2FilteringAuthType = 'AWEME_HOMEPAGE';
    public const LIVE_ACCOUNT_ToolsAwemeAuthListV2FilteringAuthType = 'LIVE_ACCOUNT';
    public const UNI_PROMOTION_ToolsAwemeAuthListV2FilteringAuthType = 'UNI_PROMOTION';
    public const VIDEO_ITEM_ToolsAwemeAuthListV2FilteringAuthType = 'VIDEO_ITEM';

    public const ALLOWED_VALUES = [
        self::AWEME_ACCOUNT_ToolsAwemeAuthListV2FilteringAuthType,
        self::AWEME_HOMEPAGE_ToolsAwemeAuthListV2FilteringAuthType,
        self::LIVE_ACCOUNT_ToolsAwemeAuthListV2FilteringAuthType,
        self::UNI_PROMOTION_ToolsAwemeAuthListV2FilteringAuthType,
        self::VIDEO_ITEM_ToolsAwemeAuthListV2FilteringAuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2FilteringAuthType', $value));
        }
        return (string) $value;
    }
}
