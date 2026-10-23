<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBookingGetV2DataListHistoryAccountType
{
    public const AD_ToolsAppManagementBookingGetV2DataListHistoryAccountType = 'AD';
    public const BP_ToolsAppManagementBookingGetV2DataListHistoryAccountType = 'BP';
    public const STAR_ToolsAppManagementBookingGetV2DataListHistoryAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementBookingGetV2DataListHistoryAccountType,
        self::BP_ToolsAppManagementBookingGetV2DataListHistoryAccountType,
        self::STAR_ToolsAppManagementBookingGetV2DataListHistoryAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBookingGetV2DataListHistoryAccountType', $value));
        }
        return (string) $value;
    }
}
