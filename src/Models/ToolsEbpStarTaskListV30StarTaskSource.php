<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpStarTaskListV30StarTaskSource
{
    public const MY_CREATIONS_ToolsEbpStarTaskListV30StarTaskSource = 'MY_CREATIONS';
    public const SHARING_ToolsEbpStarTaskListV30StarTaskSource = 'SHARING';

    public const ALLOWED_VALUES = [
        self::MY_CREATIONS_ToolsEbpStarTaskListV30StarTaskSource,
        self::SHARING_ToolsEbpStarTaskListV30StarTaskSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpStarTaskListV30StarTaskSource', $value));
        }
        return (string) $value;
    }
}
