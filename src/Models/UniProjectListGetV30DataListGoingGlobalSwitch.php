<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class UniProjectListGetV30DataListGoingGlobalSwitch
{
    public const ON_UniProjectListGetV30DataListGoingGlobalSwitch = 'ON';
    public const OFF_UniProjectListGetV30DataListGoingGlobalSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_UniProjectListGetV30DataListGoingGlobalSwitch,
        self::OFF_UniProjectListGetV30DataListGoingGlobalSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum UniProjectListGetV30DataListGoingGlobalSwitch', $value));
        }
        return (string) $value;
    }
}
