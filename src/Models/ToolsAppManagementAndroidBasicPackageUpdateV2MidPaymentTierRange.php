<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange
{
    public const ABOVE_500_ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange = 'ABOVE_500';
    public const BELOW_100_ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange = 'BELOW_100';
    public const FROM_100_TO_500_ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange = 'FROM_100_TO_500';

    public const ALLOWED_VALUES = [
        self::ABOVE_500_ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange,
        self::BELOW_100_ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange,
        self::FROM_100_TO_500_ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2MidPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
