<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceSmartExtend
{
    public const OFF_StdProjectUpdateV30AudienceSmartExtend = 'OFF';
    public const ON_StdProjectUpdateV30AudienceSmartExtend = 'ON';

    public const ALLOWED_VALUES = [
        self::OFF_StdProjectUpdateV30AudienceSmartExtend,
        self::ON_StdProjectUpdateV30AudienceSmartExtend,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceSmartExtend', $value));
        }
        return (string) $value;
    }
}
