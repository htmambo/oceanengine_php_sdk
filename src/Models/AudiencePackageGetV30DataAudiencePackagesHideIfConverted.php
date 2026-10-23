<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesHideIfConverted
{
    public const AD_AudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'AD';
    public const ADVERTISER_AudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'ADVERTISER';
    public const APP_AudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'APP';
    public const CAMPAIGN_AudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'CAMPAIGN';
    public const CUSTOMER_AudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'CUSTOMER';
    public const GLOBAL_APP_AudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'GLOBAL_APP';
    public const NO_EXCLUDE_AudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_AudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'ORGANIZATION';

    public const ALLOWED_VALUES = [
        self::AD_AudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::ADVERTISER_AudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::APP_AudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::CAMPAIGN_AudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::CUSTOMER_AudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::GLOBAL_APP_AudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::NO_EXCLUDE_AudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::ORGANIZATION_AudiencePackageGetV30DataAudiencePackagesHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesHideIfConverted', $value));
        }
        return (string) $value;
    }
}
