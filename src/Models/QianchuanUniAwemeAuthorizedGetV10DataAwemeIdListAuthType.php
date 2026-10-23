<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType
{
    public const AWEME_COOPERATOR_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType = 'AWEME_COOPERATOR';
    public const OFFICIAL_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType = 'OFFICIAL';
    public const ROOM_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType = 'ROOM';
    public const SELF_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType = 'SELF';
    public const VIDEO_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::AWEME_COOPERATOR_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType,
        self::OFFICIAL_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType,
        self::ROOM_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType,
        self::SELF_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType,
        self::VIDEO_QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanUniAwemeAuthorizedGetV10DataAwemeIdListAuthType', $value));
        }
        return (string) $value;
    }
}
