<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpWechatGameListV30AssetGeneration
{
    public const LEGACY_ToolsEbpWechatGameListV30AssetGeneration = 'LEGACY';
    public const OC_USABLE_ToolsEbpWechatGameListV30AssetGeneration = 'OC_USABLE';

    public const ALLOWED_VALUES = [
        self::LEGACY_ToolsEbpWechatGameListV30AssetGeneration,
        self::OC_USABLE_ToolsEbpWechatGameListV30AssetGeneration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpWechatGameListV30AssetGeneration', $value));
        }
        return (string) $value;
    }
}
