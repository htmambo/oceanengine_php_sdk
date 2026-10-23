<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroAppListV30DataListAccountType
{
    public const AD_ToolsMicroAppListV30DataListAccountType = 'AD';
    public const BP_ToolsMicroAppListV30DataListAccountType = 'BP';
    public const STAR_ToolsMicroAppListV30DataListAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsMicroAppListV30DataListAccountType,
        self::BP_ToolsMicroAppListV30DataListAccountType,
        self::STAR_ToolsMicroAppListV30DataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroAppListV30DataListAccountType', $value));
        }
        return (string) $value;
    }
}
