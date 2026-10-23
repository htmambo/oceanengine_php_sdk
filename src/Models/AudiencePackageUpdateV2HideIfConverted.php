<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2HideIfConverted
{
    public const APP_AudiencePackageUpdateV2HideIfConverted = 'APP';
    public const ADVERTISER_AudiencePackageUpdateV2HideIfConverted = 'ADVERTISER';
    public const CAMPAIGN_AudiencePackageUpdateV2HideIfConverted = 'CAMPAIGN';
    public const ORGANIZATION_AudiencePackageUpdateV2HideIfConverted = 'ORGANIZATION';
    public const NO_EXCLUDE_AudiencePackageUpdateV2HideIfConverted = 'NO_EXCLUDE';
    public const AD_AudiencePackageUpdateV2HideIfConverted = 'AD';
    public const CUSTOMER_AudiencePackageUpdateV2HideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_AudiencePackageUpdateV2HideIfConverted = 'GLOBAL_APP';

    public const ALLOWED_VALUES = [
        self::APP_AudiencePackageUpdateV2HideIfConverted,
        self::ADVERTISER_AudiencePackageUpdateV2HideIfConverted,
        self::CAMPAIGN_AudiencePackageUpdateV2HideIfConverted,
        self::ORGANIZATION_AudiencePackageUpdateV2HideIfConverted,
        self::NO_EXCLUDE_AudiencePackageUpdateV2HideIfConverted,
        self::AD_AudiencePackageUpdateV2HideIfConverted,
        self::CUSTOMER_AudiencePackageUpdateV2HideIfConverted,
        self::GLOBAL_APP_AudiencePackageUpdateV2HideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2HideIfConverted', $value));
        }
        return (string) $value;
    }
}
