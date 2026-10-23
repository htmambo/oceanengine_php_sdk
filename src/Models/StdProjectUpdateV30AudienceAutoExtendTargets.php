<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceAutoExtendTargets
{
    public const AD_TAG_StdProjectUpdateV30AudienceAutoExtendTargets = 'AD_TAG';
    public const AGE_StdProjectUpdateV30AudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_StdProjectUpdateV30AudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_StdProjectUpdateV30AudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_StdProjectUpdateV30AudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const INTEREST_TAG_StdProjectUpdateV30AudienceAutoExtendTargets = 'INTEREST_TAG';
    public const REGION_StdProjectUpdateV30AudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AD_TAG_StdProjectUpdateV30AudienceAutoExtendTargets,
        self::AGE_StdProjectUpdateV30AudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_StdProjectUpdateV30AudienceAutoExtendTargets,
        self::GENDER_StdProjectUpdateV30AudienceAutoExtendTargets,
        self::INTEREST_ACTION_StdProjectUpdateV30AudienceAutoExtendTargets,
        self::INTEREST_TAG_StdProjectUpdateV30AudienceAutoExtendTargets,
        self::REGION_StdProjectUpdateV30AudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
