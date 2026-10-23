<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAudienceAutoExtendTargets
{
    public const INTEREST_TAG_AdGetV2DataAudienceAutoExtendTargets = 'INTEREST_TAG';
    public const AD_TAG_AdGetV2DataAudienceAutoExtendTargets = 'AD_TAG';
    public const AGE_AdGetV2DataAudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_AdGetV2DataAudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const REGION_AdGetV2DataAudienceAutoExtendTargets = 'REGION';
    public const GENDER_AdGetV2DataAudienceAutoExtendTargets = 'GENDER';

    public const ALLOWED_VALUES = [
        self::INTEREST_TAG_AdGetV2DataAudienceAutoExtendTargets,
        self::AD_TAG_AdGetV2DataAudienceAutoExtendTargets,
        self::AGE_AdGetV2DataAudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_AdGetV2DataAudienceAutoExtendTargets,
        self::REGION_AdGetV2DataAudienceAutoExtendTargets,
        self::GENDER_AdGetV2DataAudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
