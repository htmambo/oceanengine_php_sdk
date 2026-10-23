<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppListV30FilteringSearchType
{
    public const CREATE_ONLY_ToolsMicroAppListV30FilteringSearchType = 'CREATE_ONLY';
    public const SHARE_ONLY_ToolsMicroAppListV30FilteringSearchType = 'SHARE_ONLY';

    public const ALLOWED_VALUES = [
        self::CREATE_ONLY_ToolsMicroAppListV30FilteringSearchType,
        self::SHARE_ONLY_ToolsMicroAppListV30FilteringSearchType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppListV30FilteringSearchType', $value));
        }
        return (string) $value;
    }
}
