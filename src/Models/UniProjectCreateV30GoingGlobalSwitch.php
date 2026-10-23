<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectCreateV30GoingGlobalSwitch
{
    public const ON_UniProjectCreateV30GoingGlobalSwitch = 'ON';
    public const OFF_UniProjectCreateV30GoingGlobalSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_UniProjectCreateV30GoingGlobalSwitch,
        self::OFF_UniProjectCreateV30GoingGlobalSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectCreateV30GoingGlobalSwitch', $value));
        }
        return (string) $value;
    }
}
