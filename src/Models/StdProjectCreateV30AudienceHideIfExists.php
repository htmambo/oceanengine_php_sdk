<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class StdProjectCreateV30AudienceHideIfExists
{
    public const FILTER_StdProjectCreateV30AudienceHideIfExists = 'FILTER';
    public const TARGETING_StdProjectCreateV30AudienceHideIfExists = 'TARGETING';
    public const UNLIMITED_StdProjectCreateV30AudienceHideIfExists = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FILTER_StdProjectCreateV30AudienceHideIfExists,
        self::TARGETING_StdProjectCreateV30AudienceHideIfExists,
        self::UNLIMITED_StdProjectCreateV30AudienceHideIfExists,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum StdProjectCreateV30AudienceHideIfExists', $value));
        }
        return (string) $value;
    }
}
