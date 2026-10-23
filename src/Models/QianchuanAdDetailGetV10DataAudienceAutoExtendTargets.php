<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdDetailGetV10DataAudienceAutoExtendTargets
{
    public const AD_TAG_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets = 'AD_TAG';
    public const AGE_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const INTEREST_TAG_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets = 'INTEREST_TAG';
    public const REGION_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AD_TAG_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets,
        self::AGE_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets,
        self::GENDER_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets,
        self::INTEREST_ACTION_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets,
        self::INTEREST_TAG_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets,
        self::REGION_QianchuanAdDetailGetV10DataAudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdDetailGetV10DataAudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
