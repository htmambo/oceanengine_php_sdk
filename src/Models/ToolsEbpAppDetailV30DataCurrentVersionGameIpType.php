<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppDetailV30DataCurrentVersionGameIpType
{
    public const ANIMATION_ToolsEbpAppDetailV30DataCurrentVersionGameIpType = 'Animation';
    public const ARTISTIC_ToolsEbpAppDetailV30DataCurrentVersionGameIpType = 'Artistic';
    public const FILM_ToolsEbpAppDetailV30DataCurrentVersionGameIpType = 'Film';
    public const LITERARY_ToolsEbpAppDetailV30DataCurrentVersionGameIpType = 'Literary';
    public const NONE_ToolsEbpAppDetailV30DataCurrentVersionGameIpType = 'None';
    public const OTHERS_ToolsEbpAppDetailV30DataCurrentVersionGameIpType = 'Others';

    public const ALLOWED_VALUES = [
        self::ANIMATION_ToolsEbpAppDetailV30DataCurrentVersionGameIpType,
        self::ARTISTIC_ToolsEbpAppDetailV30DataCurrentVersionGameIpType,
        self::FILM_ToolsEbpAppDetailV30DataCurrentVersionGameIpType,
        self::LITERARY_ToolsEbpAppDetailV30DataCurrentVersionGameIpType,
        self::NONE_ToolsEbpAppDetailV30DataCurrentVersionGameIpType,
        self::OTHERS_ToolsEbpAppDetailV30DataCurrentVersionGameIpType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppDetailV30DataCurrentVersionGameIpType', $value));
        }
        return (string) $value;
    }
}
