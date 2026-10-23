<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskGetV30DataStarTaskSource
{
    public const MY_CREATIONS_ToolsEbpStarTaskGetV30DataStarTaskSource = 'MY_CREATIONS';
    public const SHARING_ToolsEbpStarTaskGetV30DataStarTaskSource = 'SHARING';

    public const ALLOWED_VALUES = [
        self::MY_CREATIONS_ToolsEbpStarTaskGetV30DataStarTaskSource,
        self::SHARING_ToolsEbpStarTaskGetV30DataStarTaskSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskGetV30DataStarTaskSource', $value));
        }
        return (string) $value;
    }
}
