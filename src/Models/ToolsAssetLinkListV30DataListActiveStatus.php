<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAssetLinkListV30DataListActiveStatus
{
    public const USED_ToolsAssetLinkListV30DataListActiveStatus = 'USED';
    public const UNUSED_ToolsAssetLinkListV30DataListActiveStatus = 'UNUSED';

    public const ALLOWED_VALUES = [
        self::USED_ToolsAssetLinkListV30DataListActiveStatus,
        self::UNUSED_ToolsAssetLinkListV30DataListActiveStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAssetLinkListV30DataListActiveStatus', $value));
        }
        return (string) $value;
    }
}
