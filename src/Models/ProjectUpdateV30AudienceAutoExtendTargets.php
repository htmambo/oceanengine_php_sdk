<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceAutoExtendTargets
{
    public const AD_TAG_ProjectUpdateV30AudienceAutoExtendTargets = 'AD_TAG';
    public const AGE_ProjectUpdateV30AudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_ProjectUpdateV30AudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_ProjectUpdateV30AudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_ProjectUpdateV30AudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const INTEREST_TAG_ProjectUpdateV30AudienceAutoExtendTargets = 'INTEREST_TAG';
    public const REGION_ProjectUpdateV30AudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AD_TAG_ProjectUpdateV30AudienceAutoExtendTargets,
        self::AGE_ProjectUpdateV30AudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_ProjectUpdateV30AudienceAutoExtendTargets,
        self::GENDER_ProjectUpdateV30AudienceAutoExtendTargets,
        self::INTEREST_ACTION_ProjectUpdateV30AudienceAutoExtendTargets,
        self::INTEREST_TAG_ProjectUpdateV30AudienceAutoExtendTargets,
        self::REGION_ProjectUpdateV30AudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
