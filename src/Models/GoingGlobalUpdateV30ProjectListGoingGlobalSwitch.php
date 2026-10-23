<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class GoingGlobalUpdateV30ProjectListGoingGlobalSwitch
{
    public const ON_GoingGlobalUpdateV30ProjectListGoingGlobalSwitch = 'ON';
    public const OFF_GoingGlobalUpdateV30ProjectListGoingGlobalSwitch = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_GoingGlobalUpdateV30ProjectListGoingGlobalSwitch,
        self::OFF_GoingGlobalUpdateV30ProjectListGoingGlobalSwitch,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum GoingGlobalUpdateV30ProjectListGoingGlobalSwitch', $value));
        }
        return (string) $value;
    }
}
