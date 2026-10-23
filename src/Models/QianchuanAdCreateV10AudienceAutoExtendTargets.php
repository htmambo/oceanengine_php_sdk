<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAdCreateV10AudienceAutoExtendTargets
{
    public const AGE_QianchuanAdCreateV10AudienceAutoExtendTargets = 'AGE';
    public const CUSTOM_AUDIENCE_QianchuanAdCreateV10AudienceAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const GENDER_QianchuanAdCreateV10AudienceAutoExtendTargets = 'GENDER';
    public const INTEREST_ACTION_QianchuanAdCreateV10AudienceAutoExtendTargets = 'INTEREST_ACTION';
    public const REGION_QianchuanAdCreateV10AudienceAutoExtendTargets = 'REGION';

    public const ALLOWED_VALUES = [
        self::AGE_QianchuanAdCreateV10AudienceAutoExtendTargets,
        self::CUSTOM_AUDIENCE_QianchuanAdCreateV10AudienceAutoExtendTargets,
        self::GENDER_QianchuanAdCreateV10AudienceAutoExtendTargets,
        self::INTEREST_ACTION_QianchuanAdCreateV10AudienceAutoExtendTargets,
        self::REGION_QianchuanAdCreateV10AudienceAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAdCreateV10AudienceAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
