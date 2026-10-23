<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpWechatGameListV30FilteringAssetOwnership
{
    public const CREATE_ToolsEbpWechatGameListV30FilteringAssetOwnership = 'CREATE';
    public const SHARE_ToolsEbpWechatGameListV30FilteringAssetOwnership = 'SHARE';

    public const ALLOWED_VALUES = [
        self::CREATE_ToolsEbpWechatGameListV30FilteringAssetOwnership,
        self::SHARE_ToolsEbpWechatGameListV30FilteringAssetOwnership,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpWechatGameListV30FilteringAssetOwnership', $value));
        }
        return (string) $value;
    }
}
