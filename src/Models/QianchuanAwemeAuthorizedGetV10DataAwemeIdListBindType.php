<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType
{
    public const AWEME_COOPERATOR_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType = 'AWEME_COOPERATOR';
    public const DOU_SHOP_LIVE_SELF_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType = 'DOU_SHOP_LIVE_SELF';
    public const EXPIRED_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType = 'EXPIRED';
    public const OFFICIAL_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType = 'OFFICIAL';
    public const ROOM_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType = 'ROOM';
    public const SELF_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType = 'SELF';
    public const TALENT_USER_OWNER_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType = 'TALENT_USER_OWNER';
    public const UNAUTHORIZED_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType = 'UNAUTHORIZED';
    public const UNKNOWN_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::AWEME_COOPERATOR_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType,
        self::DOU_SHOP_LIVE_SELF_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType,
        self::EXPIRED_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType,
        self::OFFICIAL_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType,
        self::ROOM_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType,
        self::SELF_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType,
        self::TALENT_USER_OWNER_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType,
        self::UNAUTHORIZED_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType,
        self::UNKNOWN_QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthorizedGetV10DataAwemeIdListBindType', $value));
        }
        return (string) $value;
    }
}
