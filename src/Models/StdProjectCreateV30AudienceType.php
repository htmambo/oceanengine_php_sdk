<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceType
{
    public const UNLIMITED_StdProjectCreateV30AudienceType = 'UNLIMITED';
    public const CUSTOM_StdProjectCreateV30AudienceType = 'CUSTOM';

    public const ALLOWED_VALUES = [
        self::UNLIMITED_StdProjectCreateV30AudienceType,
        self::CUSTOM_StdProjectCreateV30AudienceType,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceType', $value));
        }
        return (string) $value;
    }
}
