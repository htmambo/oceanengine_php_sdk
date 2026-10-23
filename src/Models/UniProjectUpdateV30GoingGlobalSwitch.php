<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectUpdateV30GoingGlobalSwitch
{
    public const ON_UniProjectUpdateV30GoingGlobalSwitch = 'ON';
    public const OFF_UniProjectUpdateV30GoingGlobalSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_UniProjectUpdateV30GoingGlobalSwitch,
        self::OFF_UniProjectUpdateV30GoingGlobalSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectUpdateV30GoingGlobalSwitch', $value));
        }
        return (string) $value;
    }
}
