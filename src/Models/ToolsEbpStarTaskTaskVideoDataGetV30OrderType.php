<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskTaskVideoDataGetV30OrderType
{
    public const ASC_ToolsEbpStarTaskTaskVideoDataGetV30OrderType = 'ASC';
    public const DESC_ToolsEbpStarTaskTaskVideoDataGetV30OrderType = 'DESC';

    public const ALLOWED_VALUES = [
        self::ASC_ToolsEbpStarTaskTaskVideoDataGetV30OrderType,
        self::DESC_ToolsEbpStarTaskTaskVideoDataGetV30OrderType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskTaskVideoDataGetV30OrderType', $value));
        }
        return (string) $value;
    }
}
