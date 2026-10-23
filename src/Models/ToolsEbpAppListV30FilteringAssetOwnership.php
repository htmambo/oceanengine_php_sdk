<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppListV30FilteringAssetOwnership
{
    public const CREATE_ToolsEbpAppListV30FilteringAssetOwnership = 'CREATE';
    public const SHARE_ToolsEbpAppListV30FilteringAssetOwnership = 'SHARE';

    public const ALLOWED_VALUES = [
        self::CREATE_ToolsEbpAppListV30FilteringAssetOwnership,
        self::SHARE_ToolsEbpAppListV30FilteringAssetOwnership,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppListV30FilteringAssetOwnership', $value));
        }
        return (string) $value;
    }
}
