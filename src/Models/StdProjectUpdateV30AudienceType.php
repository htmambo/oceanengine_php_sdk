<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceType
{
    public const UNLIMITED_StdProjectUpdateV30AudienceType = 'UNLIMITED';
    public const CUSTOM_StdProjectUpdateV30AudienceType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_StdProjectUpdateV30AudienceType,
        self::CUSTOM_StdProjectUpdateV30AudienceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceType', $value));
        }
        return (string) $value;
    }
}
