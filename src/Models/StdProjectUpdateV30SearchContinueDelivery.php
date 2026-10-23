<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30SearchContinueDelivery
{
    public const OFF_StdProjectUpdateV30SearchContinueDelivery = 'OFF';
    public const ON_StdProjectUpdateV30SearchContinueDelivery = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectUpdateV30SearchContinueDelivery,
        self::ON_StdProjectUpdateV30SearchContinueDelivery,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30SearchContinueDelivery', $value));
        }
        return (string) $value;
    }
}
