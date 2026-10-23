<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAudiencePackageUpdateV30HideIfConverted
{
    public const ADVERTISER_LocalAudiencePackageUpdateV30HideIfConverted = 'ADVERTISER';
    public const CUSTOMER_LocalAudiencePackageUpdateV30HideIfConverted = 'CUSTOMER';
    public const NO_EXCLUDE_LocalAudiencePackageUpdateV30HideIfConverted = 'NO_EXCLUDE';
    public const ORGANIZATION_LocalAudiencePackageUpdateV30HideIfConverted = 'ORGANIZATION';
    public const PROJECT_LocalAudiencePackageUpdateV30HideIfConverted = 'PROJECT';
    public const PROMOTION_LocalAudiencePackageUpdateV30HideIfConverted = 'PROMOTION';

    public const ALLOWED_VALUES = [
        self::ADVERTISER_LocalAudiencePackageUpdateV30HideIfConverted,
        self::CUSTOMER_LocalAudiencePackageUpdateV30HideIfConverted,
        self::NO_EXCLUDE_LocalAudiencePackageUpdateV30HideIfConverted,
        self::ORGANIZATION_LocalAudiencePackageUpdateV30HideIfConverted,
        self::PROJECT_LocalAudiencePackageUpdateV30HideIfConverted,
        self::PROMOTION_LocalAudiencePackageUpdateV30HideIfConverted,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAudiencePackageUpdateV30HideIfConverted', $value));
        }
        return (string) $value;
    }
}
