<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceAutoExtendTargets
{
    public const AD_TAG_StdProjectCreateV30AudienceAutoExtendTargets = 'AD_TAG';
    public const AGE_StdProjectCreateV30AudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_StdProjectCreateV30AudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_StdProjectCreateV30AudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_StdProjectCreateV30AudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const INTEREST_TAG_StdProjectCreateV30AudienceAutoExtendTargets = 'INTEREST_TAG';
    public const REGION_StdProjectCreateV30AudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AD_TAG_StdProjectCreateV30AudienceAutoExtendTargets,
        self::AGE_StdProjectCreateV30AudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_StdProjectCreateV30AudienceAutoExtendTargets,
        self::GENDER_StdProjectCreateV30AudienceAutoExtendTargets,
        self::INTEREST_ACTION_StdProjectCreateV30AudienceAutoExtendTargets,
        self::INTEREST_TAG_StdProjectCreateV30AudienceAutoExtendTargets,
        self::REGION_StdProjectCreateV30AudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
