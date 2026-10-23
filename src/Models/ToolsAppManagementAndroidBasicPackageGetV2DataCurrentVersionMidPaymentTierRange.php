<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMidPaymentTierRange
{
    public const ABOVE_500_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMidPaymentTierRange = 'ABOVE_500';
    public const BELOW_100_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMidPaymentTierRange = 'BELOW_100';
    public const FROM_100_TO_500_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMidPaymentTierRange = 'FROM_100_TO_500';

    public const ALLOWED_VALUES = [
        self::ABOVE_500_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMidPaymentTierRange,
        self::BELOW_100_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMidPaymentTierRange,
        self::FROM_100_TO_500_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMidPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMidPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
