<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectUpdateV30AudienceHideIfExists
{
    public const FILTER_StdProjectUpdateV30AudienceHideIfExists = 'FILTER';
    public const TARGETING_StdProjectUpdateV30AudienceHideIfExists = 'TARGETING';
    public const UNLIMITED_StdProjectUpdateV30AudienceHideIfExists = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FILTER_StdProjectUpdateV30AudienceHideIfExists,
        self::TARGETING_StdProjectUpdateV30AudienceHideIfExists,
        self::UNLIMITED_StdProjectUpdateV30AudienceHideIfExists,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectUpdateV30AudienceHideIfExists', $value));
        }
        return (string) $value;
    }
}
