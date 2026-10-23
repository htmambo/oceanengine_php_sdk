<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets
{
    public const AD_TAG_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets = 'AD_TAG';
    public const AGE_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets = 'INTEREST_ACTION';
    public const INTEREST_TAG_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets = 'INTEREST_TAG';
    public const REGION_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AD_TAG_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets,
        self::AGE_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets,
        self::CUSTOM_AUDIENCE_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets,
        self::GENDER_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets,
        self::INTEREST_ACTION_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets,
        self::INTEREST_TAG_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets,
        self::REGION_AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageGetV30DataAudiencePackagesAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
