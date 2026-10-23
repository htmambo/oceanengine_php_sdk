<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AutoExtendTraffic
{
    public const ON_StdProjectCreateV30AutoExtendTraffic = 'ON';
    public const OFF_StdProjectCreateV30AutoExtendTraffic = 'OFF';

    public const ALLOWED_VALUES = [
        self::ON_StdProjectCreateV30AutoExtendTraffic,
        self::OFF_StdProjectCreateV30AutoExtendTraffic,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AutoExtendTraffic', $value));
        }
        return (string) $value;
    }
}
