<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectUpdateV30AigcDynamicCreativeSwitch
{
    public const ON_UniProjectUpdateV30AigcDynamicCreativeSwitch = 'ON';
    public const OFF_UniProjectUpdateV30AigcDynamicCreativeSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_UniProjectUpdateV30AigcDynamicCreativeSwitch,
        self::OFF_UniProjectUpdateV30AigcDynamicCreativeSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectUpdateV30AigcDynamicCreativeSwitch', $value));
        }
        return (string) $value;
    }
}
