<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementBookingGetV2DataListAccountType
{
    public const AD_ToolsAppManagementBookingGetV2DataListAccountType = 'AD';
    public const BP_ToolsAppManagementBookingGetV2DataListAccountType = 'BP';
    public const STAR_ToolsAppManagementBookingGetV2DataListAccountType = 'STAR';

    public const ALLOWED_VALUES = [
        self::AD_ToolsAppManagementBookingGetV2DataListAccountType,
        self::BP_ToolsAppManagementBookingGetV2DataListAccountType,
        self::STAR_ToolsAppManagementBookingGetV2DataListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementBookingGetV2DataListAccountType', $value));
        }
        return (string) $value;
    }
}
