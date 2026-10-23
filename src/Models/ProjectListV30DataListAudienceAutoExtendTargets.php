<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectListV30DataListAudienceAutoExtendTargets
{
    public const AD_TAG_ProjectListV30DataListAudienceAutoExtendTargets = 'AD_TAG';
    public const AGE_ProjectListV30DataListAudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_ProjectListV30DataListAudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_ProjectListV30DataListAudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_ProjectListV30DataListAudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const INTEREST_TAG_ProjectListV30DataListAudienceAutoExtendTargets = 'INTEREST_TAG';
    public const REGION_ProjectListV30DataListAudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AD_TAG_ProjectListV30DataListAudienceAutoExtendTargets,
        self::AGE_ProjectListV30DataListAudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_ProjectListV30DataListAudienceAutoExtendTargets,
        self::GENDER_ProjectListV30DataListAudienceAutoExtendTargets,
        self::INTEREST_ACTION_ProjectListV30DataListAudienceAutoExtendTargets,
        self::INTEREST_TAG_ProjectListV30DataListAudienceAutoExtendTargets,
        self::REGION_ProjectListV30DataListAudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectListV30DataListAudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
