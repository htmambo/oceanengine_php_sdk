<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpWechatAppletListV30AssetGeneration
{
    public const LEGACY_ToolsEbpWechatAppletListV30AssetGeneration = 'LEGACY';
    public const OC_USABLE_ToolsEbpWechatAppletListV30AssetGeneration = 'OC_USABLE';

    public const ALLOWED_VALUES = [
        self::LEGACY_ToolsEbpWechatAppletListV30AssetGeneration,
        self::OC_USABLE_ToolsEbpWechatAppletListV30AssetGeneration,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpWechatAppletListV30AssetGeneration', $value));
        }
        return (string) $value;
    }
}
