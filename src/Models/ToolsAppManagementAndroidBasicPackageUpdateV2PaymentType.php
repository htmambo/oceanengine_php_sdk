<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType
{
    public const FREE_ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType = 'FREE';
    public const PRODUCT_ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType = 'PRODUCT';
    public const TRIAL_AND_LIMIT_FUNCTIONS_ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType = 'TRIAL_AND_LIMIT_FUNCTIONS';
    public const TRIAL_AND_PURCHASE_ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType = 'TRIAL_AND_PURCHASE';

    public const ALLOWED_VALUES = [
        self::FREE_ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType,
        self::PRODUCT_ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType,
        self::TRIAL_AND_LIMIT_FUNCTIONS_ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType,
        self::TRIAL_AND_PURCHASE_ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ToolsAppManagementAndroidBasicPackageUpdateV2PaymentType', $value));
        }
        return (string) $value;
    }
}
