<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource
{
    public const AWEME_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource = 'AWEME';
    public const QIANCHUAN_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource = 'QIANCHUAN';
    public const STAR_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource = 'STAR';

    public const ALLOWED_VALUES = [
        self::AWEME_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource,
        self::QIANCHUAN_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource,
        self::STAR_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthSource', $value));
        }
        return (string) $value;
    }
}
