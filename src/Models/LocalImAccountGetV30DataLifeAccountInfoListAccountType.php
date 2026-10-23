<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalImAccountGetV30DataLifeAccountInfoListAccountType
{
    public const AREA_LocalImAccountGetV30DataLifeAccountInfoListAccountType = 'AREA';
    public const STORE_LocalImAccountGetV30DataLifeAccountInfoListAccountType = 'STORE';

    public const ALLOWED_VALUES = [
        self::AREA_LocalImAccountGetV30DataLifeAccountInfoListAccountType,
        self::STORE_LocalImAccountGetV30DataLifeAccountInfoListAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalImAccountGetV30DataLifeAccountInfoListAccountType', $value));
        }
        return (string) $value;
    }
}
