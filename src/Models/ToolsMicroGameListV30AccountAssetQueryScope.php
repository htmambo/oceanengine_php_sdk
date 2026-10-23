<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameListV30AccountAssetQueryScope
{
    public const ACCOCUNT_ToolsMicroGameListV30AccountAssetQueryScope = 'ACCOCUNT';
    public const ALL_ToolsMicroGameListV30AccountAssetQueryScope = 'ALL';
    public const GROUP_ToolsMicroGameListV30AccountAssetQueryScope = 'GROUP';

    public const ALLOWED_VALUES = [
        self::ACCOCUNT_ToolsMicroGameListV30AccountAssetQueryScope,
        self::ALL_ToolsMicroGameListV30AccountAssetQueryScope,
        self::GROUP_ToolsMicroGameListV30AccountAssetQueryScope,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameListV30AccountAssetQueryScope', $value));
        }
        return (string) $value;
    }
}
