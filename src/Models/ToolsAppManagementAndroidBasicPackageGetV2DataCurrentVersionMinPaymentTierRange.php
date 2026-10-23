<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange
{
    public const SIX_TEN_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange,
        self::TEN_TWENTY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange,
        self::ZERO_FIVE_ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataCurrentVersionMinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
