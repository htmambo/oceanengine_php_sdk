<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceAutoExtendTargets
{
    public const AD_TAG_ProjectCreateV30AudienceAutoExtendTargets = 'AD_TAG';
    public const AGE_ProjectCreateV30AudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_ProjectCreateV30AudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_ProjectCreateV30AudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_ProjectCreateV30AudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const INTEREST_TAG_ProjectCreateV30AudienceAutoExtendTargets = 'INTEREST_TAG';
    public const REGION_ProjectCreateV30AudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AD_TAG_ProjectCreateV30AudienceAutoExtendTargets,
        self::AGE_ProjectCreateV30AudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_ProjectCreateV30AudienceAutoExtendTargets,
        self::GENDER_ProjectCreateV30AudienceAutoExtendTargets,
        self::INTEREST_ACTION_ProjectCreateV30AudienceAutoExtendTargets,
        self::INTEREST_TAG_ProjectCreateV30AudienceAutoExtendTargets,
        self::REGION_ProjectCreateV30AudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
