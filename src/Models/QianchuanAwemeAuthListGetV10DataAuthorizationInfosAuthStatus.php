<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus
{
    public const ALL_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus = 'ALL';
    public const EFFECTIVE_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus = 'EFFECTIVE';
    public const EXPIRED_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus = 'EXPIRED';
    public const WAIT_BIND_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus = 'WAIT_BIND';

    public const ALLOWED_VALUES = [
        self::ALL_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus,
        self::EFFECTIVE_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus,
        self::EXPIRED_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus,
        self::WAIT_BIND_QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum QianchuanAwemeAuthListGetV10DataAuthorizationInfosAuthStatus', $value));
        }
        return (string) $value;
    }
}
