<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange
{
    public const SIX_TEN_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange,
        self::TEN_TWENTY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange,
        self::ZERO_FIVE_ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageGetV2DataNextVersionMinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
