<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsEbpAppListV30DataBasicAppListHistoryAccountType
{
    public const AD_ToolsEbpAppListV30DataBasicAppListHistoryAccountType = 'AD';
    public const BP_ToolsEbpAppListV30DataBasicAppListHistoryAccountType = 'BP';

    public const ALLOWED_VALUES = [
        self::AD_ToolsEbpAppListV30DataBasicAppListHistoryAccountType,
        self::BP_ToolsEbpAppListV30DataBasicAppListHistoryAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsEbpAppListV30DataBasicAppListHistoryAccountType', $value));
        }
        return (string) $value;
    }
}
