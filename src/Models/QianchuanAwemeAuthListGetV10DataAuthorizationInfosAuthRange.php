<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange
{
    public const ALL_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange = 'ALL';
    public const BY_AWEME_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange = 'BY_AWEME';
    public const BY_VIDEO_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange = 'BY_VIDEO';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange,
        self::BY_AWEME_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange,
        self::BY_VIDEO_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthRange', $value));
        }
        return (string) $value;
    }
}
