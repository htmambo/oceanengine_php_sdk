<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeBannedListV30DataListBannedType
{
    public const AWEME_TYPE_ToolsAwemeBannedListV30DataListBannedType = 'AWEME_TYPE';
    public const CUSTOM_TYPE_ToolsAwemeBannedListV30DataListBannedType = 'CUSTOM_TYPE';

    public const ALLOWED_VALUES = [
        self::AWEME_TYPE_ToolsAwemeBannedListV30DataListBannedType,
        self::CUSTOM_TYPE_ToolsAwemeBannedListV30DataListBannedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeBannedListV30DataListBannedType', $value));
        }
        return (string) $value;
    }
}
