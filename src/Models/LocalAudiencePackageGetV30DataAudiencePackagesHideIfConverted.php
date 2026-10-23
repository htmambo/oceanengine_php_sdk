<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted
{
    public const ADVERTISER_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'ADVERTISER';
    public const CUSTOMER_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'ORGANIZATION';
    public const PROJECT_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'PROJECT';
    public const PROMOTION_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::CUSTOMER_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::NO_EXCLUDE_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::ORGANIZATION_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::PROJECT_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted,
        self::PROMOTION_LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageGetV30DataAudiencePackagesHideIfConverted', $value));
        }
        return (string) $value;
    }
}
