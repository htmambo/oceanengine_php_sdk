<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType
{
    public const AUTH_FREE_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType = 'AUTH_FREE';
    public const AWEME_COOPERATOR_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType = 'AWEME_COOPERATOR';
    public const ALL_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType = 'All';
    public const BIND_TYPE_EXPIRED_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType = 'BIND_TYPE_EXPIRED';
    public const BIND_TYPE_UNAUTHORIZED_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType = 'BIND_TYPE_UNAUTHORIZED';
    public const OFFICIAL_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType = 'OFFICIAL';
    public const SELF_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType = 'SELF';

    public const ALLOWED_VALUES = [
        self::AUTH_FREE_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType,
        self::AWEME_COOPERATOR_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType,
        self::ALL_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType,
        self::BIND_TYPE_EXPIRED_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType,
        self::BIND_TYPE_UNAUTHORIZED_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType,
        self::OFFICIAL_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType,
        self::SELF_LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalAwemeAuthorizedGetV30DataAwemeIdListAuthType', $value));
        }
        return (string) $value;
    }
}
