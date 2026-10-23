<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsMicroGameListV30DataListAccountType
{
    public const AD_ToolsMicroGameListV30DataListAccountType = 'AD';
    public const BP_ToolsMicroGameListV30DataListAccountType = 'BP';
    public const STAR_ToolsMicroGameListV30DataListAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsMicroGameListV30DataListAccountType,
        self::BP_ToolsMicroGameListV30DataListAccountType,
        self::STAR_ToolsMicroGameListV30DataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsMicroGameListV30DataListAccountType', $value));
        }
        return (string) $value;
    }
}
