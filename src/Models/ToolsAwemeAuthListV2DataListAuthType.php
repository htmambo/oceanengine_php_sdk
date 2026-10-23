<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeAuthListV2DataListAuthType
{
    public const AWEME_ACCOUNT_ToolsAwemeAuthListV2DataListAuthType = 'AWEME_ACCOUNT';
    public const AWEME_HOMEPAGE_ToolsAwemeAuthListV2DataListAuthType = 'AWEME_HOMEPAGE';
    public const LIVE_ACCOUNT_ToolsAwemeAuthListV2DataListAuthType = 'LIVE_ACCOUNT';
    public const UNI_PROMOTION_ToolsAwemeAuthListV2DataListAuthType = 'UNI_PROMOTION';
    public const VIDEO_ITEM_ToolsAwemeAuthListV2DataListAuthType = 'VIDEO_ITEM';

    public const ALLOWED_VALUES = [
        self::AWEME_ACCOUNT_ToolsAwemeAuthListV2DataListAuthType,
        self::AWEME_HOMEPAGE_ToolsAwemeAuthListV2DataListAuthType,
        self::LIVE_ACCOUNT_ToolsAwemeAuthListV2DataListAuthType,
        self::UNI_PROMOTION_ToolsAwemeAuthListV2DataListAuthType,
        self::VIDEO_ITEM_ToolsAwemeAuthListV2DataListAuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeAuthListV2DataListAuthType', $value));
        }
        return (string) $value;
    }
}
