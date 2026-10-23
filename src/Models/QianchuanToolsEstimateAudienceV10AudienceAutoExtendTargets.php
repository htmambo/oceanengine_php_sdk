<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets
{
    public const AGE_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const REGION_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AGE_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets,
        self::GENDER_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets,
        self::INTEREST_ACTION_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets,
        self::REGION_QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanToolsEstimateAudienceV10AudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
