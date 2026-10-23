<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectListV30DataListAudienceAutoExtendTargets
{
    public const AD_TAG_StdProjectListV30DataListAudienceAutoExtendTargets = 'AD_TAG';
    public const AGE_StdProjectListV30DataListAudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_StdProjectListV30DataListAudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_StdProjectListV30DataListAudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_StdProjectListV30DataListAudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const INTEREST_TAG_StdProjectListV30DataListAudienceAutoExtendTargets = 'INTEREST_TAG';
    public const REGION_StdProjectListV30DataListAudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AD_TAG_StdProjectListV30DataListAudienceAutoExtendTargets,
        self::AGE_StdProjectListV30DataListAudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_StdProjectListV30DataListAudienceAutoExtendTargets,
        self::GENDER_StdProjectListV30DataListAudienceAutoExtendTargets,
        self::INTEREST_ACTION_StdProjectListV30DataListAudienceAutoExtendTargets,
        self::INTEREST_TAG_StdProjectListV30DataListAudienceAutoExtendTargets,
        self::REGION_StdProjectListV30DataListAudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectListV30DataListAudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
