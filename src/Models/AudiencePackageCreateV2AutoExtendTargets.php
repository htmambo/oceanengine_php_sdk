<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AudiencePackageCreateV2AutoExtendTargets
{
    public const INTEREST_TAG_AudiencePackageCreateV2AutoExtendTargets = 'INTEREST_TAG';
    public const AD_TAG_AudiencePackageCreateV2AutoExtendTargets = 'AD_TAG';
    public const AGE_AudiencePackageCreateV2AutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_AudiencePackageCreateV2AutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const REGION_AudiencePackageCreateV2AutoExtendTargets = 'REGION';
    public const GENDER_AudiencePackageCreateV2AutoExtendTargets = 'GENDER';

    public const ALLOWED_VALUES = [
        self::INTEREST_TAG_AudiencePackageCreateV2AutoExtendTargets,
        self::AD_TAG_AudiencePackageCreateV2AutoExtendTargets,
        self::AGE_AudiencePackageCreateV2AutoExtendTargets,
        self::CUSTOM_AUDIENCE_AudiencePackageCreateV2AutoExtendTargets,
        self::REGION_AudiencePackageCreateV2AutoExtendTargets,
        self::GENDER_AudiencePackageCreateV2AutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AudiencePackageCreateV2AutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
