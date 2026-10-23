<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEventAssetsGetV2SortType
{
    public const DESC_ToolsEventAssetsGetV2SortType = 'DESC';
    public const ASC_ToolsEventAssetsGetV2SortType = 'ASC';

    public const ALLOWED_VALUES = [
        self::DESC_ToolsEventAssetsGetV2SortType,
        self::ASC_ToolsEventAssetsGetV2SortType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEventAssetsGetV2SortType', $value));
        }
        return (string) $value;
    }
}
