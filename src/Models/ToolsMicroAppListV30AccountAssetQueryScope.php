<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppListV30AccountAssetQueryScope
{
    public const ACCOCUNT_ToolsMicroAppListV30AccountAssetQueryScope = 'ACCOCUNT';
    public const ALL_ToolsMicroAppListV30AccountAssetQueryScope = 'ALL';
    public const GROUP_ToolsMicroAppListV30AccountAssetQueryScope = 'GROUP';

    public const ALLOWED_VALUES = [
        self::ACCOCUNT_ToolsMicroAppListV30AccountAssetQueryScope,
        self::ALL_ToolsMicroAppListV30AccountAssetQueryScope,
        self::GROUP_ToolsMicroAppListV30AccountAssetQueryScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppListV30AccountAssetQueryScope', $value));
        }
        return (string) $value;
    }
}
