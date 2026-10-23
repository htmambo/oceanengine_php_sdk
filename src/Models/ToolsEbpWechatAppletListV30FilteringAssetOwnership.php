<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpWechatAppletListV30FilteringAssetOwnership
{
    public const ALL_ToolsEbpWechatAppletListV30FilteringAssetOwnership = 'ALL';
    public const CREATE_ToolsEbpWechatAppletListV30FilteringAssetOwnership = 'CREATE';
    public const SHARE_ToolsEbpWechatAppletListV30FilteringAssetOwnership = 'SHARE';

    public const ALLOWED_VALUES = [
        self::ALL_ToolsEbpWechatAppletListV30FilteringAssetOwnership,
        self::CREATE_ToolsEbpWechatAppletListV30FilteringAssetOwnership,
        self::SHARE_ToolsEbpWechatAppletListV30FilteringAssetOwnership,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpWechatAppletListV30FilteringAssetOwnership', $value));
        }
        return (string) $value;
    }
}
