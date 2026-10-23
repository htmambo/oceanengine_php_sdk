<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppGameBookListV30AssetOwnership
{
    public const CREATE_ToolsEbpAppGameBookListV30AssetOwnership = 'CREATE';
    public const SHARE_ToolsEbpAppGameBookListV30AssetOwnership = 'SHARE';

    public const ALLOWED_VALUES = [
        self::CREATE_ToolsEbpAppGameBookListV30AssetOwnership,
        self::SHARE_ToolsEbpAppGameBookListV30AssetOwnership,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppGameBookListV30AssetOwnership', $value));
        }
        return (string) $value;
    }
}
