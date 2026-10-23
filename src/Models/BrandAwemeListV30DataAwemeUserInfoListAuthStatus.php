<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class BrandAwemeListV30DataAwemeUserInfoListAuthStatus
{
    public const AUTHING_BrandAwemeListV30DataAwemeUserInfoListAuthStatus = 'AUTHING';
    public const EXPIRED_BrandAwemeListV30DataAwemeUserInfoListAuthStatus = 'EXPIRED';
    public const UNBIND_BrandAwemeListV30DataAwemeUserInfoListAuthStatus = 'UNBIND';

    public const ALLOWED_VALUES = [
        self::AUTHING_BrandAwemeListV30DataAwemeUserInfoListAuthStatus,
        self::EXPIRED_BrandAwemeListV30DataAwemeUserInfoListAuthStatus,
        self::UNBIND_BrandAwemeListV30DataAwemeUserInfoListAuthStatus,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum BrandAwemeListV30DataAwemeUserInfoListAuthStatus', $value));
        }
        return (string) $value;
    }
}
