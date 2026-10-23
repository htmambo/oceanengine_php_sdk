<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsOrangeSiteGetV30MultiAssetType
{
    public const ORANGE_ToolsOrangeSiteGetV30MultiAssetType = 'ORANGE';
    public const ORANGE_AND_AWEME_ToolsOrangeSiteGetV30MultiAssetType = 'ORANGE_AND_AWEME';

    public const ALLOWED_VALUES = [
        self::ORANGE_ToolsOrangeSiteGetV30MultiAssetType,
        self::ORANGE_AND_AWEME_ToolsOrangeSiteGetV30MultiAssetType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsOrangeSiteGetV30MultiAssetType', $value));
        }
        return (string) $value;
    }
}
