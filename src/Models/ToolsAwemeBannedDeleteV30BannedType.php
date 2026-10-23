<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAwemeBannedDeleteV30BannedType
{
    public const AWEME_TYPE_ToolsAwemeBannedDeleteV30BannedType = 'AWEME_TYPE';
    public const CUSTOM_TYPE_ToolsAwemeBannedDeleteV30BannedType = 'CUSTOM_TYPE';

    public const ALLOWED_VALUES = [
        self::AWEME_TYPE_ToolsAwemeBannedDeleteV30BannedType,
        self::CUSTOM_TYPE_ToolsAwemeBannedDeleteV30BannedType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAwemeBannedDeleteV30BannedType', $value));
        }
        return (string) $value;
    }
}
