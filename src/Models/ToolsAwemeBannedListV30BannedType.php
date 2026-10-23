<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeBannedListV30BannedType
{
    public const AWEME_TYPE_ToolsAwemeBannedListV30BannedType = 'AWEME_TYPE';
    public const CUSTOM_TYPE_ToolsAwemeBannedListV30BannedType = 'CUSTOM_TYPE';

    public const ALLOWED_VALUES = [
        self::AWEME_TYPE_ToolsAwemeBannedListV30BannedType,
        self::CUSTOM_TYPE_ToolsAwemeBannedListV30BannedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeBannedListV30BannedType', $value));
        }
        return (string) $value;
    }
}
