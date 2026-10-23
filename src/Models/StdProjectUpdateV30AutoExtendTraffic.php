<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AutoExtendTraffic
{
    public const ON_StdProjectUpdateV30AutoExtendTraffic = 'ON';
    public const OFF_StdProjectUpdateV30AutoExtendTraffic = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_StdProjectUpdateV30AutoExtendTraffic,
        self::OFF_StdProjectUpdateV30AutoExtendTraffic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AutoExtendTraffic', $value));
        }
        return (string) $value;
    }
}
