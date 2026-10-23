<?php

declare(strict_types=1);

namespace Oceanengine\Models;

final class ProjectUpdateV30AudienceHideIfExists
{
    public const FILTER_ProjectUpdateV30AudienceHideIfExists = 'FILTER';
    public const TARGETING_ProjectUpdateV30AudienceHideIfExists = 'TARGETING';
    public const UNLIMITED_ProjectUpdateV30AudienceHideIfExists = 'UNLIMITED';

    public const ALLOWED_VALUES = [
        self::FILTER_ProjectUpdateV30AudienceHideIfExists,
        self::TARGETING_ProjectUpdateV30AudienceHideIfExists,
        self::UNLIMITED_ProjectUpdateV30AudienceHideIfExists,
    ];

    public static function isValid(string $value): bool
    {
        return in_array($value, self::ALLOWED_VALUES, true);
    }

    public static function fromValue(string $value): string
    {
        if (!self::isValid($value)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s for enum ProjectUpdateV30AudienceHideIfExists', $value));
        }
        return (string) $value;
    }
}
