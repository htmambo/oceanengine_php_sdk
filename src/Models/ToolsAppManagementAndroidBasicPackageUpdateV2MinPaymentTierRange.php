<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange
{
    public const SIX_TEN_ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange = 'SIX_TEN';
    public const TEN_TWENTY_ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange = 'TEN_TWENTY';
    public const TWENTY_FIFTY_ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange = 'TWENTY_FIFTY';
    public const ZERO_FIVE_ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange = 'ZERO_FIVE';

    public const ALLOWED_VALUES = [
        self::SIX_TEN_ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange,
        self::TEN_TWENTY_ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange,
        self::TWENTY_FIFTY_ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange,
        self::ZERO_FIVE_ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2MinPaymentTierRange', $value));
        }
        return (string) $value;
    }
}
