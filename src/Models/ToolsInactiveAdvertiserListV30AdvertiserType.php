<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsInactiveAdvertiserListV30AdvertiserType
{
    public const INACTIVE_ToolsInactiveAdvertiserListV30AdvertiserType = 'INACTIVE';
    public const Enum_30_DAY_NO_COST_ToolsInactiveAdvertiserListV30AdvertiserType = '30_DAY_NO_COST';

    public const ALLOWED_VALUES = [
        self::INACTIVE_ToolsInactiveAdvertiserListV30AdvertiserType,
        self::Enum_30_DAY_NO_COST_ToolsInactiveAdvertiserListV30AdvertiserType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsInactiveAdvertiserListV30AdvertiserType', $value));
        }
        return (string) $value;
    }
}
