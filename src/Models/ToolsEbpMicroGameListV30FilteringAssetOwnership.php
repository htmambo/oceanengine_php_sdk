<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpMicroGameListV30FilteringAssetOwnership
{
    public const CREATE_ToolsEbpMicroGameListV30FilteringAssetOwnership = 'CREATE';
    public const SHARE_ToolsEbpMicroGameListV30FilteringAssetOwnership = 'SHARE';

    public const ALLOWED_VALUES = [
        self::CREATE_ToolsEbpMicroGameListV30FilteringAssetOwnership,
        self::SHARE_ToolsEbpMicroGameListV30FilteringAssetOwnership,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpMicroGameListV30FilteringAssetOwnership', $value));
        }
        return (string) $value;
    }
}
