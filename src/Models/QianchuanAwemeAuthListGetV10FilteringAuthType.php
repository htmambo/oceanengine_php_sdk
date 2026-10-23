<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthListGetV10FilteringAuthType
{
    public const ALL_QianchuanAwemeAuthListGetV10FilteringAuthType = 'ALL';
    public const AWEME_COOPERATOR_QianchuanAwemeAuthListGetV10FilteringAuthType = 'AWEME_COOPERATOR';
    public const OFFICIAL_QianchuanAwemeAuthListGetV10FilteringAuthType = 'OFFICIAL';
    public const ROOM_QianchuanAwemeAuthListGetV10FilteringAuthType = 'ROOM';
    public const SELF_QianchuanAwemeAuthListGetV10FilteringAuthType = 'SELF';
    public const VIDEO_QianchuanAwemeAuthListGetV10FilteringAuthType = 'VIDEO';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeAuthListGetV10FilteringAuthType,
        self::AWEME_COOPERATOR_QianchuanAwemeAuthListGetV10FilteringAuthType,
        self::OFFICIAL_QianchuanAwemeAuthListGetV10FilteringAuthType,
        self::ROOM_QianchuanAwemeAuthListGetV10FilteringAuthType,
        self::SELF_QianchuanAwemeAuthListGetV10FilteringAuthType,
        self::VIDEO_QianchuanAwemeAuthListGetV10FilteringAuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthListGetV10FilteringAuthType', $value));
        }
        return (string) $value;
    }
}
