<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOrientationPackageGetV10DataListAutoExtendTargets
{
    public const AGE_QianchuanOrientationPackageGetV10DataListAutoExtendTargets = 'AGE';
    public const REGION_QianchuanOrientationPackageGetV10DataListAutoExtendTargets = 'REGION';
    public const GENDER_QianchuanOrientationPackageGetV10DataListAutoExtendTargets = 'GENDER';
    public const CUSTOM_AUDIENCE_QianchuanOrientationPackageGetV10DataListAutoExtendTargets = 'CUSTOM_AUDIENCE';
    public const INTEREST_ACTION_QianchuanOrientationPackageGetV10DataListAutoExtendTargets = 'INTEREST_ACTION';

    public const ALLOWED_VALUES = [
        self::AGE_QianchuanOrientationPackageGetV10DataListAutoExtendTargets,
        self::REGION_QianchuanOrientationPackageGetV10DataListAutoExtendTargets,
        self::GENDER_QianchuanOrientationPackageGetV10DataListAutoExtendTargets,
        self::CUSTOM_AUDIENCE_QianchuanOrientationPackageGetV10DataListAutoExtendTargets,
        self::INTEREST_ACTION_QianchuanOrientationPackageGetV10DataListAutoExtendTargets,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOrientationPackageGetV10DataListAutoExtendTargets', $value));
        }
        return (string) $value;
    }
}
