<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes
{
    public const AWEME_COOPERATOR_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes = 'AWEME_COOPERATOR';
    public const OFFICIAL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes = 'OFFICIAL';
    public const ROOM_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes = 'ROOM';
    public const SELF_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes = 'SELF';
    public const VIDEO_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::AWEME_COOPERATOR_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes,
        self::OFFICIAL_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes,
        self::ROOM_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes,
        self::SELF_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes,
        self::VIDEO_QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanOverallAwemeListV10DataBindAwemeUserInfosAuthTypes', $value));
        }
        return (string) $value;
    }
}
