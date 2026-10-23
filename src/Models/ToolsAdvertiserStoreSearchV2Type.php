<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAdvertiserStoreSearchV2Type
{
    public const STORE_NORMAL_ToolsAdvertiserStoreSearchV2Type = 'STORE_NORMAL';
    public const STORE_DOUYIN_ToolsAdvertiserStoreSearchV2Type = 'STORE_DOUYIN';
    public const STORE_THIRT_PARTY_ToolsAdvertiserStoreSearchV2Type = 'STORE_THIRT_PARTY';
    public const STORE_LANDING_ToolsAdvertiserStoreSearchV2Type = 'STORE_LANDING';

    public const ALLOWED_VALUES = [
        self::STORE_NORMAL_ToolsAdvertiserStoreSearchV2Type,
        self::STORE_DOUYIN_ToolsAdvertiserStoreSearchV2Type,
        self::STORE_THIRT_PARTY_ToolsAdvertiserStoreSearchV2Type,
        self::STORE_LANDING_ToolsAdvertiserStoreSearchV2Type,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAdvertiserStoreSearchV2Type', $value));
        }
        return (string) $value;
    }
}
