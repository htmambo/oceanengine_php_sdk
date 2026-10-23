<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange
{
    public const ABOVE_500_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange = 'ABOVE_500';
    public const BELOW_100_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange = 'BELOW_100';
    public const FROM_100_TO_500_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange = 'FROM_100_TO_500';

    public const ALLOWED_VALUES = [
        self::ABOVE_500_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange,
        self::BELOW_100_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange,
        self::FROM_100_TO_500_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMidPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
