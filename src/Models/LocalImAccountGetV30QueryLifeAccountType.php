<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class LocalImAccountGetV30QueryLifeAccountType
{
    public const AREA_LocalImAccountGetV30QueryLifeAccountType = 'AREA';
    public const STORE_LocalImAccountGetV30QueryLifeAccountType = 'STORE';

    public const ALLOWED_VALUES = [
        self::AREA_LocalImAccountGetV30QueryLifeAccountType,
        self::STORE_LocalImAccountGetV30QueryLifeAccountType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum LocalImAccountGetV30QueryLifeAccountType', $value));
        }
        return (string) $value;
    }
}
