<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppGameBookListV30DataBasicAppListAccountType
{
    public const AD_ToolsEbpAppGameBookListV30DataBasicAppListAccountType = 'AD';
    public const BP_ToolsEbpAppGameBookListV30DataBasicAppListAccountType = 'BP';
    public const STAR_ToolsEbpAppGameBookListV30DataBasicAppListAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsEbpAppGameBookListV30DataBasicAppListAccountType,
        self::BP_ToolsEbpAppGameBookListV30DataBasicAppListAccountType,
        self::STAR_ToolsEbpAppGameBookListV30DataBasicAppListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppGameBookListV30DataBasicAppListAccountType', $value));
        }
        return (string) $value;
    }
}
