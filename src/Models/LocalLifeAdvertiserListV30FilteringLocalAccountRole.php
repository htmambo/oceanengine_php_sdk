<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalLifeAdvertiserListV30FilteringLocalAccountRole
{
    public const ALL_LocalLifeAdvertiserListV30FilteringLocalAccountRole = 'ALL';
    public const DIRECT_ACCOUNT_LocalLifeAdvertiserListV30FilteringLocalAccountRole = 'DIRECT_ACCOUNT';
    public const VIRTUAL_ACCOUNT_LocalLifeAdvertiserListV30FilteringLocalAccountRole = 'VIRTUAL_ACCOUNT';

    public const ALLOWED_VALUES = [
        self::ALL_LocalLifeAdvertiserListV30FilteringLocalAccountRole,
        self::DIRECT_ACCOUNT_LocalLifeAdvertiserListV30FilteringLocalAccountRole,
        self::VIRTUAL_ACCOUNT_LocalLifeAdvertiserListV30FilteringLocalAccountRole,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalLifeAdvertiserListV30FilteringLocalAccountRole', $value));
        }
        return (string) $value;
    }
}
