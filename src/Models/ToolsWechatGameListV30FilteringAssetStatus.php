<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsWechatGameListV30FilteringAssetStatus
{
    public const UPGRADED_ToolsWechatGameListV30FilteringAssetStatus = 'UPGRADED';
    public const ORIGINAL_ToolsWechatGameListV30FilteringAssetStatus = 'ORIGINAL';

    public const ALLOWED_VALUES = [
        self::UPGRADED_ToolsWechatGameListV30FilteringAssetStatus,
        self::ORIGINAL_ToolsWechatGameListV30FilteringAssetStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsWechatGameListV30FilteringAssetStatus', $value));
        }
        return (string) $value;
    }
}
