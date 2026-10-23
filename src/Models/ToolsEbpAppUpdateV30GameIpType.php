<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppUpdateV30GameIpType
{
    public const ANIMATION_ToolsEbpAppUpdateV30GameIpType = 'Animation';
    public const ARTISTIC_ToolsEbpAppUpdateV30GameIpType = 'Artistic';
    public const FILM_ToolsEbpAppUpdateV30GameIpType = 'Film';
    public const LITERARY_ToolsEbpAppUpdateV30GameIpType = 'Literary';
    public const NONE_ToolsEbpAppUpdateV30GameIpType = 'None';
    public const OTHERS_ToolsEbpAppUpdateV30GameIpType = 'Others';

    public const ALLOWED_VALUES = [
        self::ANIMATION_ToolsEbpAppUpdateV30GameIpType,
        self::ARTISTIC_ToolsEbpAppUpdateV30GameIpType,
        self::FILM_ToolsEbpAppUpdateV30GameIpType,
        self::LITERARY_ToolsEbpAppUpdateV30GameIpType,
        self::NONE_ToolsEbpAppUpdateV30GameIpType,
        self::OTHERS_ToolsEbpAppUpdateV30GameIpType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppUpdateV30GameIpType', $value));
        }
        return (string) $value;
    }
}
