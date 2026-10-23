<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageUpdateV2AutoExtendTargets
{
    public const INTEREST_TAG_AudiencePackageUpdateV2AutoExtendTargets = 'INTEREST_TAG';
    public const AD_TAG_AudiencePackageUpdateV2AutoExtendTargets = 'AD_TAG';
    public const AGE_AudiencePackageUpdateV2AutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_AudiencePackageUpdateV2AutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const REGION_AudiencePackageUpdateV2AutoExtendTargets = 'REGION';
    public const GENDER_AudiencePackageUpdateV2AutoExtendTargets = 'GENDER';

    public const ALLOWED_VALUES = [
        self::INTEREST_TAG_AudiencePackageUpdateV2AutoExtendTargets,
        self::AD_TAG_AudiencePackageUpdateV2AutoExtendTargets,
        self::AGE_AudiencePackageUpdateV2AutoExtendTargets,
        self::CUSTOM_AUDIENCE_AudiencePackageUpdateV2AutoExtendTargets,
        self::REGION_AudiencePackageUpdateV2AutoExtendTargets,
        self::GENDER_AudiencePackageUpdateV2AutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageUpdateV2AutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
