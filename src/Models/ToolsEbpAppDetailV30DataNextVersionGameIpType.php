<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataNextVersionGameIpType
{
    public const ANIMATION_ToolsEbpAppDetailV30DataNextVersionGameIpType = 'Animation';
    public const ARTISTIC_ToolsEbpAppDetailV30DataNextVersionGameIpType = 'Artistic';
    public const FILM_ToolsEbpAppDetailV30DataNextVersionGameIpType = 'Film';
    public const LITERARY_ToolsEbpAppDetailV30DataNextVersionGameIpType = 'Literary';
    public const NONE_ToolsEbpAppDetailV30DataNextVersionGameIpType = 'None';
    public const OTHERS_ToolsEbpAppDetailV30DataNextVersionGameIpType = 'Others';

    public const ALLOWED_VALUES = [
        self::ANIMATION_ToolsEbpAppDetailV30DataNextVersionGameIpType,
        self::ARTISTIC_ToolsEbpAppDetailV30DataNextVersionGameIpType,
        self::FILM_ToolsEbpAppDetailV30DataNextVersionGameIpType,
        self::LITERARY_ToolsEbpAppDetailV30DataNextVersionGameIpType,
        self::NONE_ToolsEbpAppDetailV30DataNextVersionGameIpType,
        self::OTHERS_ToolsEbpAppDetailV30DataNextVersionGameIpType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataNextVersionGameIpType', $value));
        }
        return (string) $value;
    }
}
