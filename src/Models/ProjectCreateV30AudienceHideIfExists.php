<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectCreateV30AudienceHideIfExists
{
    public const FILTER_ProjectCreateV30AudienceHideIfExists = 'FILTER';
    public const TARGETING_ProjectCreateV30AudienceHideIfExists = 'TARGETING';
    public const UNLIMITED_ProjectCreateV30AudienceHideIfExists = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FILTER_ProjectCreateV30AudienceHideIfExists,
        self::TARGETING_ProjectCreateV30AudienceHideIfExists,
        self::UNLIMITED_ProjectCreateV30AudienceHideIfExists,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectCreateV30AudienceHideIfExists', $value));
        }
        return (string) $value;
    }
}
