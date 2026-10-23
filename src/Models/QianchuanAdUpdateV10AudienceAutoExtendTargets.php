<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdUpdateV10AudienceAutoExtendTargets
{
    public const AGE_QianchuanAdUpdateV10AudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_QianchuanAdUpdateV10AudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_QianchuanAdUpdateV10AudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_QianchuanAdUpdateV10AudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const REGION_QianchuanAdUpdateV10AudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AGE_QianchuanAdUpdateV10AudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_QianchuanAdUpdateV10AudienceAutoExtendTargets,
        self::GENDER_QianchuanAdUpdateV10AudienceAutoExtendTargets,
        self::INTEREST_ACTION_QianchuanAdUpdateV10AudienceAutoExtendTargets,
        self::REGION_QianchuanAdUpdateV10AudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdUpdateV10AudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
