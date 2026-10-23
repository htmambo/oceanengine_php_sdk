<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalLifeAdvertiserListV30DataAdvListLocalAccountRole
{
    public const DIRECT_ACCOUNT_LocalLifeAdvertiserListV30DataAdvListLocalAccountRole = 'DIRECT_ACCOUNT';
    public const VIRTUAL_ACCOUNT_LocalLifeAdvertiserListV30DataAdvListLocalAccountRole = 'VIRTUAL_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::DIRECT_ACCOUNT_LocalLifeAdvertiserListV30DataAdvListLocalAccountRole,
        self::VIRTUAL_ACCOUNT_LocalLifeAdvertiserListV30DataAdvListLocalAccountRole,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalLifeAdvertiserListV30DataAdvListLocalAccountRole', $value));
        }
        return (string) $value;
    }
}
