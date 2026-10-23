<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus
{
    public const ANCHOR_FORBID_QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus = 'ANCHOR_FORBID';
    public const ANCHOR_REACH_UPPER_LIMIT_TODAY_QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus = 'ANCHOR_REACH_UPPER_LIMIT_TODAY';
    public const NORMAL_QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus = 'NORMAL';
    public const UNKNOWN_QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus = 'UNKNOWN';

    public const ALLOWED_VALUES = [
        self::ANCHOR_FORBID_QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus,
        self::ANCHOR_REACH_UPPER_LIMIT_TODAY_QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus,
        self::NORMAL_QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus,
        self::UNKNOWN_QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthorizedGetV10DataAwemeIdListAwemeStatus', $value));
        }
        return (string) $value;
    }
}
