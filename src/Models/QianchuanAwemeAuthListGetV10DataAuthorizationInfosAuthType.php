<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType
{
    public const ALL_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType = 'ALL';
    public const AWEME_COOPERATOR_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType = 'AWEME_COOPERATOR';
    public const OFFICIAL_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType = 'OFFICIAL';
    public const ROOM_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType = 'ROOM';
    public const SELF_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType = 'SELF';
    public const VIDEO_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType,
        self::AWEME_COOPERATOR_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType,
        self::OFFICIAL_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType,
        self::ROOM_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType,
        self::SELF_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType,
        self::VIDEO_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthType', $value));
        }
        return (string) $value;
    }
}
