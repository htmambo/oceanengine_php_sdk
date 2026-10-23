<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class AdGetV2DataAutoUpdateKeyword
{
    public const OFF_AdGetV2DataAutoUpdateKeyword = 'OFF';
    public const ON_AdGetV2DataAutoUpdateKeyword = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_AdGetV2DataAutoUpdateKeyword,
        self::ON_AdGetV2DataAutoUpdateKeyword,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum AdGetV2DataAutoUpdateKeyword', $value));
        }
        return (string) $value;
    }
}
