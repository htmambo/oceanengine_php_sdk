<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange
{
    public const ABOVE_1000_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange = 'ABOVE_1000';
    public const BELOW_500_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange = 'BELOW_500';
    public const FROM_500_TO_1000_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange = 'FROM_500_TO_1000';

    public const ALLOWED_VALUES = [
        self::ABOVE_1000_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange,
        self::BELOW_500_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange,
        self::FROM_500_TO_1000_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMaxPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
