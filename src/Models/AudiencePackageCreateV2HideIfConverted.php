<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2HideIfConverted
{
    public const APP_AudiencePackageCreateV2HideIfConverted = 'APP';
    public const ADVERTISER_AudiencePackageCreateV2HideIfConverted = 'ADVERTISER';
    public const CAMPAIGN_AudiencePackageCreateV2HideIfConverted = 'CAMPAIGN';
    public const ORGANIZATION_AudiencePackageCreateV2HideIfConverted = 'ORGANIZATION';
    public const NO_EXCLUDE_AudiencePackageCreateV2HideIfConverted = 'NO_EXCLUDE';
    public const AD_AudiencePackageCreateV2HideIfConverted = 'AD';
    public const CUSTOMER_AudiencePackageCreateV2HideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_AudiencePackageCreateV2HideIfConverted = 'GLOBAL_APP';

    public const ALLOWED_VALUES = [
        self::APP_AudiencePackageCreateV2HideIfConverted,
        self::ADVERTISER_AudiencePackageCreateV2HideIfConverted,
        self::CAMPAIGN_AudiencePackageCreateV2HideIfConverted,
        self::ORGANIZATION_AudiencePackageCreateV2HideIfConverted,
        self::NO_EXCLUDE_AudiencePackageCreateV2HideIfConverted,
        self::AD_AudiencePackageCreateV2HideIfConverted,
        self::CUSTOMER_AudiencePackageCreateV2HideIfConverted,
        self::GLOBAL_APP_AudiencePackageCreateV2HideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2HideIfConverted', $value));
        }
        return (string) $value;
    }
}
