<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthListGetV10FilteringAuthStatus
{
    public const ALL_QianchuanAwemeAuthListGetV10FilteringAuthStatus = 'ALL';
    public const EFFECTIVE_QianchuanAwemeAuthListGetV10FilteringAuthStatus = 'EFFECTIVE';
    public const EXPIRED_QianchuanAwemeAuthListGetV10FilteringAuthStatus = 'EXPIRED';
    public const WAIT_BIND_QianchuanAwemeAuthListGetV10FilteringAuthStatus = 'WAIT_BIND';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeAuthListGetV10FilteringAuthStatus,
        self::EFFECTIVE_QianchuanAwemeAuthListGetV10FilteringAuthStatus,
        self::EXPIRED_QianchuanAwemeAuthListGetV10FilteringAuthStatus,
        self::WAIT_BIND_QianchuanAwemeAuthListGetV10FilteringAuthStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthListGetV10FilteringAuthStatus', $value));
        }
        return (string) $value;
    }
}
